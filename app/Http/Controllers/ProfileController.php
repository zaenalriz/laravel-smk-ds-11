<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.index');
    }
    public function aksi_edit_profile(Request $request)
    {
        $request->validate([
            'nama' => 'required'
        ]);
        Pengguna::where('id', auth()->user()->id)
            ->update([
                'nama' => $request->nama
            ]);
        return redirect()->back();
    }
}
