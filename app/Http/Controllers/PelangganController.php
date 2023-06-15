<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\invest;
use App\Models\statusInvest;

class PelangganController extends Controller
{
    public function dashboard() {
        return view('pelanggan.dashboard');
    }

    public function investasi() {
        $invest = invest::all();
        return view('pelanggan.investasi', compact('invest'));
    }
    public function status() {
        $statinvest = statusInvest::where('user_id', auth()->id())->get();

        // $statinvest = statusInvest::with('invest')->whereRelation('invest', 'invest_id', auth()->id())->get();
        
        return view('pelanggan.status-invest', compact('statinvest'));
    }
    public function formInvest($id) {
        $invest = invest::where('id', $id)->first();

        return view('pelanggan.form-invest', compact('invest'));
    }

    public function storeInvest(Request $request) {
        $request->validate([
            // 'status' => ['required', 'string','max:50'],
            'nominal' => ['required', 'string','max:50']
        ]);

        $statinvest = statusInvest::create([
            'status' => "Ongoing",
            'nominal' => $request->nominal,
            'user_id' => auth()->id(),
            'invest_id' => $request->id
        ]);

        return redirect()->route('pelanggan.status')->with('success', 'Berhasil invest');
    }
}
