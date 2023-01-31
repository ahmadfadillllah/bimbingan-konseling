<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GuruController extends Controller
{
    //
    public function index()
    {
        $guru = User::where('role', 'guru')->get();
        return view('guru.index', compact('guru'));
    }

    public function insert(Request $request)
    {
        // dd($request->all());
        try {

            User::create([
                'nik' => $request->nik,
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make('Guru345@'),
                'no_hp' => $request->no_hp,
                'role' => 'guru',
                'avatar' => 'user.png',
                'mata_pelajaran' => $request->mata_pelajaran,
            ]);

            return redirect()->back()->with('success', 'Guru telah ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }

    public function update(Request $request, $id)
    {

        try {
            User::where('id', $id)->update([
                'nik' => $request->nik,
                'name' => $request->name,
                'email' => $request->email,
                'no_hp' => $request->no_hp,
                'mata_pelajaran' => $request->mata_pelajaran,
            ]);

            return redirect()->back()->with('success', 'Guru telah diupdate');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            User::where('id', $id)->delete();

            return redirect()->back()->with('success', 'Guru telah dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }
}
