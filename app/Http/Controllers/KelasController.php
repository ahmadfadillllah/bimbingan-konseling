<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::with('wali')->get();
        $wali_kelas = User::where('role', 'guru')->get();
        $jumlah_siswa = Siswa::select(DB::raw('kelas_id, count(id) as total'))->groupby('kelas_id')->get();

        $data = [
            'kelas' => $kelas,
            'wali_kelas' => $wali_kelas,
            'jumlah_siswa' => $jumlah_siswa,
        ];
        return view('kelas.index', compact('kelas', 'wali_kelas', 'jumlah_siswa', 'data'));
    }

    public function insert(Request $request)
    {
        try {
            Kelas::create([
                'tingkat_kelas' => $request->tingkat_kelas,
                'nama_kelas' => $request->nama_kelas,
                'wali_id' => $request->wali_id,
            ]);

            return redirect()->back()->with('success', 'Kelas telah ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }

    public function update(Request $request, $id)
    {

        try {
            Kelas::where('id', $id)->update([
                'tingkat_kelas' => $request->tingkat_kelas,
                'nama_kelas' => $request->nama_kelas,
                'wali_id' => $request->wali_id,
            ]);

            return redirect()->back()->with('success', 'Kelas telah diupdate');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            Kelas::where('id', $id)->delete();

            return redirect()->back()->with('success', 'Kelas telah dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }
}
