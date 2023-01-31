<?php

namespace App\Http\Controllers;

use App\Models\KategoriPelanggaran;
use Illuminate\Http\Request;

class KategoriPelanggaranController extends Controller
{
    //
    public function index()
    {
        $kategori = KategoriPelanggaran::all();
        return view('kategori.index', compact('kategori'));
    }

    public function insert(Request $request)
    {
        try {
            KategoriPelanggaran::create([
                'nama' => $request->nama,
                'bobot' => $request->bobot,
            ]);

            return redirect()->back()->with('success', 'Kategori telah ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        try {
            KategoriPelanggaran::where('id', $id)->update([
                'nama' => $request->nama,
                'bobot' => $request->bobot,
            ]);

            return redirect()->back()->with('success', 'Kategori telah diupdate');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            KategoriPelanggaran::where('id', $id)->delete();

            return redirect()->back()->with('success', 'Kategori telah dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }
}
