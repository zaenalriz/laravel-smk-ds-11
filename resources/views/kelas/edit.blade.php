@extends('layouts.index')
@section('content')
<div class="container">
    <h2>Edit kelas</h2>
    <form action="{{ route('aksi_edit',$dataKelas->id) }}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Kelas</label>
            <input type="text" value="{{ $dataKelas->kelas }}" name="kelas" class="form-control"
             placeholder="Masukan kelas">
          </div>
    <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>
@endsection