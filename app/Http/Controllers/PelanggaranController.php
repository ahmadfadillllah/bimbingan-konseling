<?php

namespace App\Http\Controllers;

use App\Models\DetailPelanggaran;
use App\Models\KategoriPelanggaran;
use App\Models\Pelanggaran;
use App\Models\Siswa;
use App\Models\BatasPoin;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PelanggaranController extends Controller
{
    //
    public function index()
    {
        $siswa = Pelanggaran::with('siswa')->get();
        return view('pelanggaran.index', compact('siswa'));
    }

    public function show($id)
    {
        $pelanggaran = Pelanggaran::with('siswa')->where('id', $id)->first();
        $siswa = Siswa::with('wali', 'kelas')->where('id', $pelanggaran->siswa_id)->first();
        $kategori = KategoriPelanggaran::all();
        $bobot = BatasPoin::where('id', 1)->first();
        $detail_pelanggaran = DetailPelanggaran::with('siswa', 'kategori')->where('pelanggaran_id', $pelanggaran->id)->get();

        return view('pelanggaran.show', compact('siswa', 'kategori', 'pelanggaran', 'detail_pelanggaran', 'bobot'));
    }

    public function download($id)
    {
        $pelanggaran = Pelanggaran::with('siswa')->where('id', $id)->first();
        $siswa = Siswa::with('wali', 'kelas')->where('id', $pelanggaran->siswa_id)->first();
        $detail_pelanggaran = DetailPelanggaran::with('siswa', 'kategori')->where('pelanggaran_id', $pelanggaran->id)->get();

        $file = public_path('surat.rtf');

		$array = array(
			'[TANGGAL]' => date('d F Y'),
			'[NAMA_WALI]' => $siswa->wali->name,
			'[NAMA_SISWA]' => $siswa->nama,
			'[HARI]' => Carbon::now()->addDays(1)->translatedFormat('l'),
			'[TANGGAL]' => Carbon::now()->addDays(1)->format('d F Y'),
		);

		$nama_file = 'surat-keterangan-kerja.doc';

		return WordTemplate::export($file, $array, $nama_file);
    }

    public function insert(Request $request)
    {
        try {
            DetailPelanggaran::create([
                'pelanggaran_id' => $request->pelanggaran_id,
                'siswa_id' => $request->siswa_id,
                'kategori_id' => $request->kategori_id,
                'dilaporkan_oleh' => $request->dilaporkan_oleh,
                'catatan' => $request->catatan,
            ]);

            Pelanggaran::where('id', $request->pelanggaran_id)->update(['status' => 'Mempunyai pelanggaran']);

            return redirect()->back()->with('success', 'Pelanggaran telah ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }

    public function update($id, Request $request)
    {
        try {
            DetailPelanggaran::where('id', $id)->update([
                'kategori_id' => $request->kategori_id,
                'dilaporkan_oleh' => $request->dilaporkan_oleh,
                'catatan' => $request->catatan,
            ]);

            return redirect()->back()->with('success', 'Pelanggaran telah diupdate');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            DetailPelanggaran::where('id', $id)->delete();

            return redirect()->back()->with('success', 'Pelanggaran telah dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }


}
