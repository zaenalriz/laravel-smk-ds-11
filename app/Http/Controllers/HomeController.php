<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // SELECT COUNT(id) FROM `kelas`
       $jumlahKelas=Kelas::count();
       $jumlahSiswa=Siswa::count();
        return view('home.index',[
            'jumlahKelas'=>$jumlahKelas,
            'jumlahSiswa'=>$jumlahSiswa
        ]);
    }
}
