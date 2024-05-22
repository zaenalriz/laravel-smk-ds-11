<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        $dataKelas = Kelas::where('kelas','LIKE','%'.$search.'%')
        ->get();
        return view('kelas.index', [
            'search' => $search,
            'dataKelas' => $dataKelas
        ]);
    }
    public function tambah(){
        // folder/file
        return view('kelas/tambah');
    }
    public function aksi_tambah(Request $request){
       Kelas::insert([
        'kelas'=>$request->kelas
       ]); 
       return redirect()->route('kelas');
    }
}
