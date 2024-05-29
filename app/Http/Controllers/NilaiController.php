<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Siswa;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
  public function index()
  {
    //SELECT * from nilai inner join siswa on nilai.siswa_id=siswa.id
    $dataNilai = Nilai::
    select('*','nilai.id as nilai_id')->
    join('siswa', 'nilai.siswa_id', '=', 'siswa.id')->get();
    return view('nilai.index', [
      'dataNilai' => $dataNilai
    ]);
  }
  public function tambah()
  {
    $dataSiswa = Siswa::get();
    return view(
      'nilai.tambah',
      [
        'dataSiswa' => $dataSiswa
      ]
    );
  }
  public function aksi_tambah(Request $request)
  {
    // Nilai::insert($request->only(['siswa_id','nilai']));
    Nilai::insert([
      'siswa_id' => $request->siswa_id,
      'nilai' => $request->nilai
    ]);
    return redirect()->route('nilai');
  }

  public function hapus($id){
Nilai::where('id',$id)->delete();
return redirect()->route('nilai');
  }
}
