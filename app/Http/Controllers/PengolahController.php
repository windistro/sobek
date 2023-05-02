<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rules;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\BahanBaku;
use App\Models\TelurAsin;

class PengolahController extends Controller
{
    public function PengolahDashboard() {
        return view('pengolah/dashboard-pengolah');
    }

    public function ViewBaku() {
        $baku = BahanBaku::all();
        return view('pengolah/view-bahanbaku', compact('baku'));
    }

    public function ViewTelur() {
        $salted = TelurAsin::all();
        return view('pengolah/view-telurasin', compact('salted'));
    }

    public function CreateBaku() {
        return view('pengolah/create-bahanbaku');
    }

    public function CreateTelur() {
        return view('pengolah/create-telurasin');
    }

    public function EditBaku($id) {
        $baku = BahanBaku::where('id', $id)->first();
        return view('pengolah/edit-bahanbaku', compact('baku'));
    }

    public function EditTelur($id) {
        $salted = TelurAsin::where('id', $id)->first();
        return view('pengolah/edit-telurasin', compact('salted'));
    }

    public function storeBaku(Request $request) {
        $request->validate([
            'stokTelurBebek' => ['required', 'integer'],
            'stokGaram' => ['required', 'integer']
        ]);

        $baku = BahanBaku::create([
            'stokTelurBebek' => $request->stokTelurBebek,
            'stokGaram' => $request->stokGaram,
        ]);

        return redirect()->route('pengolah.bahanbaku')->with('success', 'Data berhasil ditambah');
    }

    public function storeTelur(Request $request) {
        $request->validate([
            'totalTelurAsin' => ['required', 'integer'],
            'tanggalPembuatan' => ['required', 'date'],
            'tanggalKadaluarsa' => ['required', 'date']
        ]);

        $salted = TelurAsin::create([
            'totalTelurAsin' => $request->totalTelurAsin,
            'tanggalPembuatan' => $request->tanggalPembuatan,
            'tanggalKadaluarsa' => $request->tanggalKadaluarsa,
        ]);

        return redirect()->route('pengolah.telurasin')->with('success', 'Data berhasil ditambah');
    }

    public function updateBaku(Request $request, $id) {
        $request->validate([
            'stokTelurBebek' => ['required', 'integer'],
            'stokGaram' => ['required', 'integer']
        ]);

        $baku = BahanBaku::findOrFail($id);
        $baku->update($request->all());

        return redirect()->route('pengolah.bahanbaku')->with('success', 'Data berhasil diupdate');
    }

    public function updateTelur(Request $request, $id) {
        $request->validate([
            'totalTelurAsin' => ['required', 'integer'],
            'tanggalPembuatan' => ['required', 'date'],
            'tanggalKadaluarsa' => ['required', 'date']
        ]);

        $salted = TelurAsin::findOrFail($id);
        $salted->update($request->all());

        return redirect()->route('pengolah.telurasin')->with('success', 'Data berhasil diupdate');
    }
}
