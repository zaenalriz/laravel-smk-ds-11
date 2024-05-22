@extends('layouts.index')
@section('content')
<div class="container">
    <h2>Tambah siswa</h2>
    <form action="{{ route('aksi_tambah_siswa') }}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control"
             placeholder="Masukan nama">
          </div>
          <div class="mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control"
             placeholder="Masukan alamat">
          </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
@endsection