<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BatasPoinController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriPelanggaranController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\PelanggaranController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

use App\Models\DetailPelanggaran;
use App\Models\Pelanggaran;
use App\Models\Siswa;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class, 'index'])->name('home.index');

Route::post('/contact',[HomeController::class, 'contact'])->name('home.contact');

Route::get('/login',[AuthController::class, 'login'])->name('login');
Route::post('/login/post',[AuthController::class, 'login_post'])->name('login_post');

Route::get('/logout',[AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth', 'checkRole:admin']], function(){

    Route::get('/dashboards',[DashboardController::class, 'index'])->name('dashboard.index');

    Route::get('/kategori_pelanggaran',[KategoriPelanggaranController::class, 'index'])->name('kategori.index');
    Route::post('/kategori_pelanggaran/insert',[KategoriPelanggaranController::class, 'insert'])->name('kategori.insert');
    Route::post('/kategori_pelanggaran/update/{id}',[KategoriPelanggaranController::class, 'update'])->name('kategori.update');
    Route::get('/kategori_pelanggaran/destroy/{id}',[KategoriPelanggaranController::class, 'destroy'])->name('kategori.destroy');

    Route::get('/batas_poin',[BatasPoinController::class, 'index'])->name('bataspoin.index');
    Route::post('/batas_poin/update',[BatasPoinController::class, 'update'])->name('bataspoin.update');

    Route::get('/pelanggaran',[PelanggaranController::class, 'index'])->name('pelanggaran.index');
    Route::get('/pelanggaran/show/{id}',[PelanggaranController::class, 'show'])->name('pelanggaran.show');
    Route::post('/pelanggaran/insert',[PelanggaranController::class, 'insert'])->name('pelanggaran.insert');
    Route::post('/pelanggaran/show/update/{id}',[PelanggaranController::class, 'update'])->name('pelanggaran.update');
    Route::get('/pelanggaran/show/destroy/{id}',[PelanggaranController::class, 'destroy'])->name('pelanggaran.destroy');
    // Route::get('/pelanggaran/download/{id}',[PelanggaranController::class, 'download'])->name('pelanggaran.download');
    Route::get('/pelanggaran/download/{id}', function ($id) {

		$pelanggaran = Pelanggaran::with('siswa')->where('id', $id)->first();
        $siswa = Siswa::with('wali', 'kelas')->where('id', $pelanggaran->siswa_id)->first();
        $detail_pelanggaran = DetailPelanggaran::with('siswa', 'kategori')->where('pelanggaran_id', $pelanggaran->id)->get();

        $file = public_path('surat.rtf');

		$array = array(
            '[NO_SURAT]' => sprintf("%03d", $siswa->id),
			'[NAMA_SISWA]' => $siswa->nama_lengkap,
            '[ALAMAT]' => $siswa->alamat,
			'[HARI]' => Carbon::now()->addDays(1)->translatedFormat('l'),
			'[TANGGAL]' => Carbon::now()->addDays(1)->format('d F Y'),
		);

		$nama_file = 'surat_BK_'.$siswa->nama_lengkap.'.doc';

		return WordTemplate::export($file, $array, $nama_file);
	})->name('pelanggaran.download');

    Route::get('/kontak',[KontakController::class, 'index'])->name('kontak.index');
    Route::get('/kontak/destroy/{id}',[KontakController::class, 'destroy'])->name('kontak.destroy');

    Route::get('/pengguna',[PenggunaController::class, 'index'])->name('pengguna.index');
    Route::get('/pengguna/reset_password/{id}',[PenggunaController::class, 'reset_password'])->name('pengguna.reset_password');

    Route::get('/guru',[GuruController::class, 'index'])->name('guru.index');
    Route::post('/guru/insert',[GuruController::class, 'insert'])->name('guru.insert');
    Route::post('/guru/update/{id}',[GuruController::class, 'update'])->name('guru.update');
    Route::get('/guru/destroy/{id}',[GuruController::class, 'destroy'])->name('guru.destroy');

    Route::get('/kelas',[KelasController::class, 'index'])->name('kelas.index');
    Route::post('/kelas/insert',[KelasController::class, 'insert'])->name('kelas.insert');
    Route::post('/kelas/update/{id}',[KelasController::class, 'update'])->name('kelas.update');
    Route::get('/kelas/destroy/{id}',[KelasController::class, 'destroy'])->name('kelas.destroy');

    Route::get('/siswa',[SiswaController::class, 'index'])->name('siswa.index');
    Route::post('/siswa/insert',[SiswaController::class, 'insert'])->name('siswa.insert');
    Route::post('/siswa/update/{id}',[SiswaController::class, 'update'])->name('siswa.update');
    Route::get('/siswa/destroy/{id}',[SiswaController::class, 'destroy'])->name('siswa.destroy');

    Route::get('/profile',[ProfileController::class, 'index'])->name('profile.index');
    Route::post('/profile/update',[ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile/change_password',[ProfileController::class, 'change_password'])->name('profile.change_password');
    Route::post('/profile/change_avatar',[ProfileController::class, 'change_avatar'])->name('profile.change_avatar');

});
