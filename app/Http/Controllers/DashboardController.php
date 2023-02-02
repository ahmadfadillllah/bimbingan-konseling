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

        $datakategori = KategoriPelanggaran::all()->count();
        $datapelanggaran = DetailPelanggaran::all()->count();
        $datauser = User::all()->count();
        $datasiswa = Siswa::all()->count();

        $dataDashboard = [
            $datakategori,
            $datapelanggaran,
            $datauser,
            $datasiswa
        ];

        return view('dashboard.index', compact('user', 'kategori', 'pelanggaran', 'siswa', 'dataDashboard'));
    }
}
