<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rules;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\BahanBaku;
use App\Models\TelurAsin;
use App\Models\Penjualan;

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
    public function ViewPenjualan() {
        $sell = Penjualan::all();
        return view('pengolah.penjualan.view', compact('sell'));
    }

    public function CreateBaku() {
        return view('pengolah/create-bahanbaku');
    }

    public function CreateTelur() {
        return view('pengolah/create-telurasin');
    }
    public function CreatePenjualan() {
        return view('pengolah.penjualan.create');
    }

    public function EditBaku($id) {
        $baku = BahanBaku::where('id', $id)->first();
        return view('pengolah/edit-bahanbaku', compact('baku'));
    }

    public function EditTelur($id) {
        $salted = TelurAsin::where('id', $id)->first();
        return view('pengolah/edit-telurasin', compact('salted'));
    }
    public function EditPenjualan($id) {
        $sell = Penjualan::where('id', $id)->first();
        return view('pengolah.penjualan.edit', compact('sell'));
    }

    public function storeBaku(Request $request) {
        $request->validate([
            'nama' => ['required', 'string'],
            'jenis' => ['required', 'string'],
            'stok' => ['required', 'integer'],
            'catatan' => ['required', 'string']
        ]);

        $baku = BahanBaku::create([
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'stok' => $request->stok,
            'catatan' => $request->catatan,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('pengolah.bahanbaku')->with('success', 'Data berhasil ditambah');
    }

    public function storeTelur(Request $request) {
        $request->validate([
            'tanggalPembuatan' => ['required', 'date'],
            'totalTelurAsin' => ['required', 'integer'],
            'tanggalKadaluarsa' => ['required', 'date']
        ]);

        $salted = TelurAsin::create([
            'tanggalPembuatan' => $request->tanggalPembuatan,
            'totalTelurAsin' => $request->totalTelurAsin,
            'tanggalKadaluarsa' => $request->tanggalKadaluarsa,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('pengolah.telurasin')->with('success', 'Data berhasil ditambah');
    }
    public function storePenjualan(Request $request) {
        $request->validate([
            'tanggal' => ['required', 'date'],
            'total' => ['required', 'integer'],
            'terjual' => ['required', 'integer'],
        ]);

        $sell = Penjualan::create([
            'tanggal' => $request->tanggal,
            'total' => $request->total,
            'terjual' => $request->terjual,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('pengolah.penjualan')->with('success', 'Data berhasil ditambah');
    }

    public function updateBaku(Request $request, $id) {
        $request->validate([
            'nama' => ['required', 'string'],
            'jenis' => ['required', 'string'],
            'stok' => ['required', 'integer'],
            'catatan' => ['required', 'string']
        ]);

        $baku = BahanBaku::findOrFail($id);
        $baku->update($request->all());

        return redirect()->route('pengolah.bahanbaku')->with('success', 'Data berhasil diupdate');
    }

    public function updateTelur(Request $request, $id) {
        $request->validate([
            'tanggalPembuatan' => ['required', 'date'],
            'totalTelurAsin' => ['required', 'integer'],
            'tanggalKadaluarsa' => ['required', 'date']
        ]);

        $salted = TelurAsin::findOrFail($id);
        $salted->update($request->all());

        return redirect()->route('pengolah.telurasin')->with('success', 'Data berhasil diupdate');
    }

    public function updatePenjualan(Request $request) {
        $request->validate([
            'tanggal' => ['required', 'date'],
            'total' => ['required', 'integer'],
            'terjual' => ['required', 'integer'],
        ]);

        $sell = Penjualan::findOrFail($id);
        $sell->update($request->all());

        return redirect()->route('pengolah.penjualan')->with('success', 'Data berhasil diupdate');
    }
}
