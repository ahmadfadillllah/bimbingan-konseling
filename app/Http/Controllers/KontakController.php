<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    //
    public function index()
    {
        $kontak = Kontak::all();
        return view('kontak.index', compact('kontak'));
    }

    public function destroy($id)
    {
        try {
            Kontak::where('id', $id)->delete();

            return redirect()->back()->with('success', 'Kontak telah dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }
}
