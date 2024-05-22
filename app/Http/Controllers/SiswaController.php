<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function siswa(Request $request)
    {
        $search = $request->search;
        $dataSiswa = Siswa::paginate(2);
        return view('siswa/index', [
            'search' => $search,
            'dataSiswa' => $dataSiswa
        ]);
    }
    public function tambah()
    {
        return view('siswa/tambah');
    }
    public function aksi_tambah(Request $request)
    {
        Siswa::insert([
            'nama' => $request->nama,
            'alamat' => $request->alamat
        ]);
    }
}
