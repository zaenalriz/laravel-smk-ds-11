@extends('layouts.index')
@section('content')
    <div class="container">
        <h2>Edit siswa</h2>
        <form action="{{ route('aksi_edit_siswa', $siswa->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" value="{{ $siswa->nama }}" class="form-control" placeholder="Masukan nama">
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" name="alamat" value="{{ $siswa->alamat }}" class="form-control"
                    placeholder="Masukan alamat">
            </div>
     
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
@endsection
