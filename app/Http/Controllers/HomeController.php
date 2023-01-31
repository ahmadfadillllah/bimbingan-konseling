<?php

namespace App\Http\Controllers;

use App\Models\BatasPoin;
use App\Models\DetailPelanggaran;
use App\Models\KategoriPelanggaran;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $user = User::all();
        $kategori = KategoriPelanggaran::all();
        $pelanggaran = DetailPelanggaran::all();
        $siswa = Siswa::all();

        $detail_pelanggaran = DetailPelanggaran::with('siswa', 'kategori')->get();

        $informasi = BatasPoin::where('id', 1)->first();
        return view('home.index', compact('user', 'kategori', 'pelanggaran', 'siswa', 'detail_pelanggaran', 'informasi'));
    }

    public function contact()
    {
        return view('home.contact');
    }
}
