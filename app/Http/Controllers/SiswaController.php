<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function siswa(Request $request)
    {
        $search = $request->search;
        $dataSiswa = Siswa::paginate(10);
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
        return  redirect()->route('siswa');
    }
    public function edit($id)
    {
        $data['siswa'] = Siswa::where('id', $id)->first();
        return view('siswa/edit', $data);
    }
    public function update(Request $request, $id)
    {
        $data=[
            'nama' => $request->nama,
            'alamat' => $request->alamat
        ];
        Siswa::where('id', $id)->update($data);
        return redirect()->route('siswa')
            ->with('edit', 'Data berhasil di edit');
    }
   
    public function hapus($id)
    {
        Siswa::where('id', $id)->delete();
        return redirect()->route('siswa')->with('hapus', 'data berhasil dihapus');
    }
}
