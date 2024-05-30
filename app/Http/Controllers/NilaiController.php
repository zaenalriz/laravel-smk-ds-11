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
    $dataNilai = Nilai::select('*', 'nilai.id as nilai_id')->join('siswa', 'nilai.siswa_id', '=', 'siswa.id')->get();
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
    $request->validate([
      'siswa_id' => 'required',
      'nilai' => 'required|numeric'
    ]);
    if ($request->nilai > 100 || $request->nilai < 0) {
      return redirect()->back()->with([
        'validasi_nilai' => 'Nilai tidak bisa lebi dari
        100 dan tidak bisa kurang dari 0'
      ]);
    }
    Nilai::insert([
      'siswa_id' => $request->siswa_id,
      'nilai' => $request->nilai
    ]);
    return redirect()->route('nilai')->with('pesan', 'data berhasil di tambahkan');
  }

  public function hapus($id)
  {
    Nilai::where('id', $id)->delete();
    return redirect()->route('nilai')->with('hapus', 'data berhasil dihapus');
  }
  public function edit($id)
  {
    $nilai = Nilai::where('id', $id)->first();
    $dataSiswa = Siswa::get();
    return view('nilai.edit', [
      'dataSiswa' => $dataSiswa,
      'nilai' => $nilai
    ]);
  }
  public function aksi_edit(Request $request, $id)
  {
    Nilai::where('id', $id)->update([
      'siswa_id' => $request->siswa_id,
      'nilai' => $request->nilai
    ]);
    return redirect()->route('nilai')
      ->with('edit', 'Data berhasil di edit');
  }
}
