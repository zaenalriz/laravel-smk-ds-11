<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        $dataKelas = Kelas::get();
        return view('kelas.index', [
            'search' => $search,
            'dataKelas' => $dataKelas
        ]);
    }
}
