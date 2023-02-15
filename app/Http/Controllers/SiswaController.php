<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Pelanggaran;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //
    public function index()
    {
        $siswa = Siswa::with('wali','kelas')->get();
        // dd($siswa);
        $kelas = Kelas::with('wali')->get();
        $wali_kelas = User::where('role', 'guru')->get();
        return view('siswa.index', compact('siswa', 'kelas', 'wali_kelas'));
    }

    public function insert(Request $request)
    {
        try {
            $siswa = new Siswa;
            $siswa->nisn = $request->nisn;
            $siswa->nama_lengkap = $request->nama_lengkap;
            $siswa->kelas_id = $request->kelas_id;
            $siswa->alamat = $request->alamat;
            $siswa->wali_id = $request->wali_id;
            $siswa->no_hp = $request->no_hp;
            $siswa->orang_tua = $request->orang_tua;
            $siswa->no_hp_orang_tua = $request->no_hp_orang_tua;
            $siswa->save();

            $request->request->add(['siswa_id' => $siswa->id,]);
            Pelanggaran::create([
                'siswa_id' => $siswa->id,
                'status' => 'Tidak mempunyai pelanggaran'
            ]);

            return redirect()->back()->with('success', 'Siswa telah ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        try {
            Siswa::where('id', $id)->update([
                'nisn' => $request->nisn,
                'nama_lengkap' => $request->nama_lengkap,
                'kelas_id' => $request->kelas_id,
                'alamat' => $request->alamat,
                'wali_id' => $request->wali_id,
                'no_hp' => $request->no_hp,
                'orang_tua' => $request->orang_tua,
                'no_hp_orang_tua' => $request->no_hp_orang_tua,
            ]);


            return redirect()->back()->with('success', 'Siswa telah diupdate');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            Siswa::where('id', $id)->delete();

            return redirect()->back()->with('success', 'Siswa telah dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }

    public function show_data(Request $request)
    {
        $kelas = Kelas::where('id', $request->query('kelas_id'))->first();
        return response()->json($kelas, 200);
    }

    public function show1_data(Request $request)
    {
        $kelas = Kelas::where('id', $request->query('kelas_id'))->first();
        return response()->json($kelas, 200);
    }
}
