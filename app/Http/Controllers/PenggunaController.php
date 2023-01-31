<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller
{
    //
    public function index()
    {
        $user = User::where('role', '!=', 'admin')->get();
        return view('pengguna.index', compact('user'));
    }

    public function reset_password($id)
    {
        try {
            User::where('id', $id)->update([
                'password' => Hash::make('Guru345@'),
            ]);

            return redirect()->back()->with('success', 'Password telah direset');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }
}
