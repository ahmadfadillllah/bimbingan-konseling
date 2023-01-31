<?php

namespace App\Http\Controllers;

use App\Models\BatasPoin;
use Illuminate\Http\Request;

class BatasPoinController extends Controller
{
    //
    public function index()
    {
        $batas = BatasPoin::where('id', 1)->first();

        return view('bataspoin.index', compact('batas'));
    }

    public function update(Request $request)
    {

        try {
            BatasPoin::where('id', 1)->update([
                'nama' => $request->nama,
                'poin' => $request->poin,
            ]);

            return redirect()->back()->with('success', 'Informasi telah diupdate');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }
}
