<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PengolahController;
use App\Http\Controllers\PeternakController;
use App\Http\Controllers\PelangganController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('user', AdminController::class);
Route::resource('bahanbaku', PengolahController::class);

Route::get('/', function () {
    return view('auth.login');
});

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard'); 
    Route::get('/admin/peternak', [AdminController::class, 'AdminPeternak'])->name('admin.peternak'); 
    Route::get('/admin/peternak-tambah', [AdminController::class, 'AdminUserAdd'])->name('admin.create'); 
    Route::post('/admin/peternak-tambah', [AdminController::class, 'store'])->name('admin.create'); 
    Route::get('/admin/peternak-edit/{id}', [AdminController::class, 'AdminUserEdit'])->name('admin.edit'); 
    Route::put('/admin/peternak-edit/{id}', [AdminController::class, 'update'])->name('admin.update'); 
});

Route::middleware(['auth', 'role:Pelanggan'])->group(function () {
    Route::get('pelanggan/dashboard', [PelangganController::class, 'dashboard'])->name('pelanggan.dashboard'); 
    Route::get('pelanggan/investasi', [PelangganController::class, 'investasi'])->name('pelanggan.investasi'); 
    Route::get('pelanggan/status', [PelangganController::class, 'status'])->name('pelanggan.status'); 
    Route::get('pelanggan/investasi/{id}', [PelangganController::class, 'formInvest'])->name('pelanggan.form-invest'); 
    Route::post('pelanggan/investasi/{id}', [PelangganController::class, 'storeInvest'])->name('pelanggan.form-invest');
    
    Route::get('pelanggan/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('pelanggan/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('pelanggan/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Route::post('/peternak-tambah', [PelangganController::class, 'store'])->name('Pelanggan.create'); 
    // Route::get('/peternak-edit/{id}', [PelangganController::class, 'PelangganUserEdit'])->name('Pelanggan.edit'); 
    // Route::put('/peternak-edit/{id}', [PelangganController::class, 'update'])->name('Pelanggan.update'); 
});

Route::middleware(['auth', 'role:Pengolah'])->group(function () {
    Route::get('/pengolah/dashboard', [PengolahController::class, 'PengolahDashboard'])->name('pengolah.dashboard');
    Route::get('/pengolah/bahanbaku', [PengolahController::class, 'ViewBaku'])->name('pengolah.bahanbaku');
    Route::get('/pengolah/telurasin', [PengolahController::class, 'ViewTelur'])->name('pengolah.telurasin');
    Route::get('/pengolah/penjualan', [PengolahController::class, 'ViewPenjualan'])->name('pengolah.penjualan');
    Route::get('/pengolah/bahanbaku-create', [PengolahController::class, 'CreateBaku'])->name('pengolah.bahanbaku-create');
    Route::get('/pengolah/telurasin-create', [PengolahController::class, 'CreateTelur'])->name('pengolah.telurasin-create');
    Route::get('/pengolah/penjualan-create', [PengolahController::class, 'CreatePenjualan'])->name('pengolah.penjualan-create');
    Route::post('/pengolah/bahanbaku-create', [PengolahController::class, 'storeBaku'])->name('pengolah.bahanbaku-create');
    Route::post('/pengolah/telurasin-create', [PengolahController::class, 'storeTelur'])->name('pengolah.telurasin-create');
    Route::post('/pengolah/penjualan-create', [PengolahController::class, 'storePenjualan'])->name('pengolah.penjualan-create');
    Route::get('/pengolah/bahanbaku-edit/{id}', [PengolahController::class, 'EditBaku'])->name('pengolah.bahanbaku-edit');
    Route::get('/pengolah/telurasin-edit/{id}', [PengolahController::class, 'EditTelur'])->name('pengolah.telurasin-edit');
    Route::get('/pengolah/penjualan-edit/{id}', [PengolahController::class, 'EditPenjualan'])->name('pengolah.penjualan-edit');
    Route::put('/pengolah/bahanbaku-edit/{id}', [PengolahController::class, 'updateBaku'])->name('pengolah.bahanbaku-update');
    Route::put('/pengolah/telurasin-edit/{id}', [PengolahController::class, 'updateTelur'])->name('pengolah.telurasin-update');
    Route::put('/pengolah/penjualan-edit/{id}', [PengolahController::class, 'updatePenjualan'])->name('pengolah.penjualan-update');
});

Route::middleware(['auth', 'role:Peternak'])->group(function () {
    Route::get('/peternak/dashboard', [PeternakController::class, 'peternakDashboard'])->name('peternak.dashboard');

    // view
    Route::get('/peternak/kandang', [PeternakController::class, 'viewKandang'])->name('peternak.kandang');
    Route::get('/peternak/bebek', [PeternakController::class, 'viewBebek'])->name('peternak.bebek');
    Route::get('/peternak/pakan', [PeternakController::class, 'viewPakan'])->name('peternak.pakan');
    Route::get('/peternak/telur', [PeternakController::class, 'viewTelur'])->name('peternak.telur');
    Route::get('/peternak/invest', [PeternakController::class, 'viewInvest'])->name('peternak.invest');

    // create
    Route::get('/peternak/kandang-create', [PeternakController::class, 'createKandang'])->name('peternak.kandang-create');
    Route::get('/peternak/bebek-create', [PeternakController::class, 'createBebek'])->name('peternak.bebek-create');
    Route::get('/peternak/pakan-create', [PeternakController::class, 'createPakan'])->name('peternak.pakan-create');
    Route::get('/peternak/telur-create', [PeternakController::class, 'createTelur'])->name('peternak.telur-create');
    Route::get('/peternak/invest-create', [PeternakController::class, 'createInvest'])->name('peternak.invest-create');

    // store
    Route::post('/peternak/kandang-create', [PeternakController::class, 'storeKandang'])->name('peternak.bahanbaku-create');
    Route::post('/peternak/bebek-create', [PeternakController::class, 'storeBebek'])->name('peternak.telurasin-create');
    Route::post('/peternak/pakan-create', [PeternakController::class, 'storePakan'])->name('peternak.bahanbaku-create');
    Route::post('/peternak/telur-create', [PeternakController::class, 'storeTelur'])->name('peternak.telurasin-create');
    Route::post('/peternak/invest-create', [PeternakController::class, 'storeInvest'])->name('peternak.invest-create');


    // edit
    Route::get('/peternak/kandang-edit/{id}', [PeternakController::class, 'editKandang'])->name('peternak.kandang-edit');
    Route::get('/peternak/bebek-edit/{id}', [PeternakController::class, 'editBebek'])->name('peternak.bebek-edit');
    Route::get('/peternak/pakan-edit/{id}', [PeternakController::class, 'editPakan'])->name('peternak.pakan-edit');
    Route::get('/peternak/telur-edit/{id}', [PeternakController::class, 'editTelur'])->name('peternak.telur-edit');
    Route::get('/peternak/invest-edit/{id}', [PeternakController::class, 'editInvest'])->name('peternak.invest-edit');

    // update
    Route::put('/peternak/kandang-edit/{id}', [PeternakController::class, 'updateKandang'])->name('peternak.kandang-update');
    Route::put('/peternak/bebek-edit/{id}', [PeternakController::class, 'updateBebek'])->name('peternak.bebek-update');
    Route::put('/peternak/pakan-edit/{id}', [PeternakController::class, 'updatePakan'])->name('peternak.pakan-update');
    Route::put('/peternak/telur-edit/{id}', [PeternakController::class, 'updateTelur'])->name('peternak.telur-update');
    Route::put('/peternak/invest-edit/{id}', [PeternakController::class, 'updateInvest'])->name('peternak.invest-update');

});


require __DIR__.'/auth.php';
