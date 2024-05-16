<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function siswa(){
        return view('siswa/index');
    }
}
