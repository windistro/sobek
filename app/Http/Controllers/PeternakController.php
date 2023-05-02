<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bebek;
use App\Models\Kandang;
use App\Models\Pakan;
use App\Models\Telur;

class PeternakController extends Controller
{
    public function peternakDashboard() {
        return view('peternak/dashboard-peternak');
    }

    public function viewKandang() {
        $pen = Kandang::all();
        return view('peternak/kandang/view', compact('pen'));
    }
    public function viewBebek() {
        $duck = Bebek::all();
        return view('peternak/bebek/view', compact('duck'));
    }
    public function viewPakan() {
        $food = Pakan::all();
        return view('peternak/pakan/view', compact('food'));
    }
    public function viewTelur() {
        $egg = Telur::all();
        return view('peternak/telur/view', compact('egg'));
    }

    public function createKandang() {
        return view('peternak/kandang/create');
    }
    public function createBebek() {
        return view('peternak/bebek/create');
    }
    public function createPakan() {
        return view('peternak/pakan/create');
    }
    public function createTelur() {
        return view('peternak/telur/create');
    }

    public function editKandang($id) {
        $pen = Kandang::where('id', $id)->first();
        return view('peternak/kandang/edit', compact('pen'));
    }
    public function editBebek($id) {
        $duck = Bebek::where('id', $id)->first();
        return view('peternak/bebek/edit', compact('duck'));
    }
    public function editPakan($id) {
        $food = Pakan::where('id', $id)->first();
        return view('peternak/pakan/edit', compact('food'));
    }
    public function editTelur($id) {
        $egg = Telur::where('id', $id)->first();
        return view('peternak/telur/edit', compact('egg'));
    }

    public function storeKandang(Request $request) {
        $request->validate([
            'totalPembatas' => ['required', 'integer'],
            'bebekPembatas' => ['required', 'integer'],
            'totalBebek' => ['required', 'integer']
        ]);
        
        $pen = Kandang::create([
            'totalPembatas' => $request->totalPembatas,
            'bebekPembatas' => $request->bebekPembatas,
            'totalBebek' => $request->totalBebek,
        ]);

        return redirect()->route('peternak.kandang')->with('success', 'Data berhasil ditambah');
    }
    public function storeBebek(Request $request) {
        $request->validate([
            'umur' => ['required', 'integer'],
            'status' => ['required', 'string','max:20'],
            'telurWeekly' => ['required', 'integer']
        ]);

        $duck = Bebek::create([
            'umur' => $request->umur,
            'status' => $request->status,
            'telurWeekly' => $request->telurWeekly,
        ]);

        return redirect()->route('peternak.bebek')->with('success', 'Data berhasil ditambah');
    }
    public function storePakan(Request $request) {
        $request->validate([
            'stokKatul' => ['required', 'integer'],
            'stokKosentrat' => ['required', 'integer']
        ]);

        $food = Pakan::create([
            'stokKatul' => $request->stokKatul,
            'stokKosentrat' => $request->stokKosentrat,
        ]);

        return redirect()->route('peternak.pakan')->with('success', 'Data berhasil ditambah');
    }
    public function storeTelur(Request $request) {
        $request->validate([
            'telurPembatas' => ['required', 'integer'],
            'totalTelur' => ['required', 'integer']
        ]);

        $egg = Telur::create([
            'telurPembatas' => $request->telurPembatas,
            'totalTelur' => $request->totalTelur,
        ]);

        return redirect()->route('peternak.telur')->with('success', 'Data berhasil ditambah');
    }

    public function updateKandang(Request $request, $id) {
        $request->validate([
            'totalPembatas' => ['required', 'integer'],
            'bebekPembatas' => ['required', 'integer'],
            'totalBebek' => ['required', 'integer']
        ]);

        $pen = Kandang::findOrFail($id);
        $pen->update($request->all());

        return redirect()->route('peternak.kandang')->with('success', 'Data berhasil diupdate');
    }
    public function updateBebek(Request $request, $id) {
        $request->validate([
            'umur' => ['required', 'integer'],
            'status' => ['required', 'string','max:20'],
            'telurWeekly' => ['required', 'integer']
        ]);

        $duck = Bebek::findOrFail($id);
        $duck->update($request->all());

        return redirect()->route('peternak.bebek')->with('success', 'Data berhasil diupdate');
    }
    public function updatePakan(Request $request, $id) {
        $request->validate([
            'stokKatul' => ['required', 'integer'],
            'stokKosentrat' => ['required', 'integer']
        ]);

        $food = Pakan::findOrFail($id);
        $food->update($request->all());

        return redirect()->route('peternak.pakan')->with('success', 'Data berhasil diupdate');
    }
    public function updateTelur(Request $request, $id) {
        $request->validate([
            'telurPembatas' => ['required', 'integer'],
            'totalTelur' => ['required', 'integer']
        ]);

        $egg = Telur::findOrFail($id);
        $egg->update($request->all());

        return redirect()->route('peternak.telur')->with('success', 'Data berhasil diupdate');
    }
}
