<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $nama='eko';
        $kelas='11 sija';
        return view('home.index',
        ['nama_lengkap'=>$nama,'kelas'=>$kelas]);
    }
}
