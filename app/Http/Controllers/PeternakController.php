<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\Bebek;
use App\Models\Kandang;
use App\Models\Pakan;
use App\Models\Telur;
use App\Models\invest;

class PeternakController extends Controller
{
    public function peternakDashboard() {
        return view('peternak/dashboard-peternak');
    }

    public function invest() {
        return view('peternak/investasi/view');
    }

    public function viewKandang() {
        // $pen = Kandang::all();
        $pen = Kandang::where('user_id', auth()->id())->get();

        return view('peternak/kandang/view', compact('pen'));
    }
    public function viewBebek() {
        // $duck = Bebek::all();
        $duck = Bebek::with('kandang.user')->whereRelation('kandang', 'user_id', auth()->id())->get();
        // $duck = Bebek::where('kandang_id', $kandang->kandang_id)->get();

        return view('peternak/bebek/view', compact('duck'));
    }
    public function viewPakan() {
        // $food = Pakan::all();
        $food = Pakan::where('user_id', auth()->id())->get();

        return view('peternak/pakan/view', compact('food'));
    }
    public function viewTelur() {
        // $egg = Telur::all();
        $egg = Telur::with('kandang.user')->whereRelation('kandang', 'user_id', auth()->id())->get();
        // $egg = Telur::where('kandang_id', $egg->kandang_id)->get();

        return view('peternak/telur/view', compact('egg'));
    }
    public function viewInvest() {
        // $invest = invest::all();
        $invest = invest::where('user_id', auth()->id())->get();

        return view('peternak/invest/view', compact('invest'));
    }

    public function createKandang() {
        return view('peternak/kandang/create');
    }
    public function createBebek() {
        $pen = Kandang::all();

        return view('peternak/bebek/create', compact('pen'));
    }
    public function createPakan() {
        return view('peternak/pakan/create');
    }
    public function createTelur() {
        $pen = Kandang::all();

        return view('peternak/telur/create', compact('pen'));
    }
    public function createInvest() {
        return view('peternak/invest/create');
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
    public function editInvest($id) {
        $invest = invest::where('id', $id)->first();
        return view('peternak/invest/edit', compact('invest'));
    }

    public function storeKandang(Request $request) {
        $request->validate([
            'name' => ['required', 'string','max:50'],
            'kategori' => ['required', 'string','max:50'],
            'kapasitas' => ['required', 'integer'],
            'totalBebek' => ['required', 'integer']
        ]);
        
        $pen = Kandang::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'kategori' => $request->kategori,
            'kapasitas' => $request->kapasitas,
            'totalBebek' => $request->totalBebek,
        ]);

        return redirect()->route('peternak.kandang')->with('success', 'Data berhasil ditambah');
    }
    public function storeBebek(Request $request) {
        $request->validate([
            'tag' => ['required', 'string','max:20'],
            'tempat' => ['required', 'string','max:20'],
            'jumlah' => ['required', 'integer'],
            'kelamin' => ['required', 'string','max:20'],
            'umur' => ['required', 'string','max:20'],
            'kategori' => ['required','string','max:20']
        ]);

        $duck = Bebek::create([
            'tag' => $request->tag,
            'tempat' => $request->tempat,
            'jumlah' => $request->jumlah,
            'kelamin' => $request->kelamin,
            'umur' => $request->umur,
            'kategori' => $request->kategori,
            'kandang_id' => $request->tempat,
        ]);

        return redirect()->route('peternak.bebek')->with('success', 'Data berhasil ditambah');
    }
    public function storePakan(Request $request) {
        $request->validate([
            'nama' => ['required', 'string','max:20'],
            'stok' => ['required', 'integer'],
            'catatan' => ['required', 'string'],
        ]);

        $food = Pakan::create([
            'nama' => $request->nama,
            'stok' => $request->stok,
            'catatan' => $request->catatan,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('peternak.pakan')->with('success', 'Data berhasil ditambah');
    }
    public function storeTelur(Request $request) {
        $request->validate([
            'telurEarned' => ['required', 'integer'],
            'tanggal' => ['required', 'date']
        ]);

        $egg = Telur::create([
            'kandang_id' => $request->kandang_id,
            'telurEarned' => $request->telurEarned,
            'tanggal' => $request->tanggal,
            'kandang_id' => $request->tempat
        ]);

        return redirect()->route('peternak.telur')->with('success', 'Data berhasil ditambah');
    }
    public function storeInvest(Request $request) {
        $request->validate([
            'peternakan' => ['required', 'string'],
            'deskripsi' => ['required', 'string'],
            'durasi' => ['required', 'integer', 'min:30'],
        ]);

        $invest = invest::create([
            'user_id' => auth()->id(),
            'peternakan' => $request->peternakan,
            'deskripsi' => $request->deskripsi,
            'durasi' => $request->durasi,
        ]);

        return redirect()->route('peternak.invest')->with('success', 'Data berhasil ditambah');
    }

    public function updateKandang(Request $request, $id) {
        $request->validate([
            'name' => ['required', 'string','max:50'],
            'kategori' => ['required', 'string','max:50'],
            'kapasitas' => ['required', 'integer'],
            'totalBebek' => ['required', 'integer']
        ]);

        $pen = Kandang::findOrFail($id);
        $pen->update($request->all());

        return redirect()->route('peternak.kandang')->with('success', 'Data berhasil diupdate');
    }
    public function updateBebek(Request $request, $id) {
        $request->validate([
            'tag' => ['required', 'string','max:20'],
            'tempat' => ['required', 'string','max:20'],
            'jumlah' => ['required', 'integer'],
            'kelamin' => ['required', 'string','max:20'],
            'umur' => ['required', 'string','max:20'],
            'kategori' => ['required','string','max:20']
        ]);

        $duck = Bebek::findOrFail($id);
        $duck->update($request->all());

        return redirect()->route('peternak.bebek')->with('success', 'Data berhasil diupdate');
    }
    public function updatePakan(Request $request, $id) {
        $request->validate([
            'nama' => ['required', 'string','max:20'],
            'stok' => ['required', 'integer'],
            'catatan' => ['required', 'string'],
        ]);

        $food = Pakan::findOrFail($id);
        $food->update($request->all());

        return redirect()->route('peternak.pakan')->with('success', 'Data berhasil diupdate');
    }
    public function updateTelur(Request $request, $id) {
        $request->validate([
            'telurEarned' => ['required', 'integer'],
            'tanggal' => ['required', 'date']
        ]);

        $egg = Telur::findOrFail($id);
        $egg->update($request->all());

        return redirect()->route('peternak.telur')->with('success', 'Data berhasil diupdate');
    }
    public function updateInvest(Request $request, $id) {
        $request->validate([
            'peternakan' => ['required', 'string'],
            'deskripsi' => ['required', 'string'],
            'durasi' => ['required', 'integer', 'min:30'],
        ]);

        $invest = invest::findOrFail($id);
        $invest->update($request->all());

        return redirect()->route('peternak.invest')->with('success', 'Data berhasil diupdate');
    }
}
