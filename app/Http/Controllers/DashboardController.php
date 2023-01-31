<?php

namespace App\Http\Controllers;
use App\Models\DetailPelanggaran;
use App\Models\KategoriPelanggaran;
use App\Models\Siswa;
use App\Models\User;
class DashboardController extends Controller
{
    //
    public function index()
    {
        $user = User::all();
        $kategori = KategoriPelanggaran::all();
        $pelanggaran = DetailPelanggaran::all();
        $siswa = Siswa::all();
        return view('dashboard.index', compact('user', 'kategori', 'pelanggaran', 'siswa'));
    }
}
