<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function siswa(Request $request)
    {
        $search = $request->search;
        $dataSiswa = Siswa::get();
        return view('siswa/index', [
            'search' => $search,
            'dataSiswa' => $dataSiswa
        ]);
    }
}
