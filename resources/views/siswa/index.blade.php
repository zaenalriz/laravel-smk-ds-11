@extends('layouts.index')
@section('title','Siswa')
@section('content')
<div class="container mt-5">
  <form class="d-flex" role="search">
    <input class="form-control me-2" type="text" name="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Search</button>
  </form>
  <p>Data Yang Di cari : {{ $search }}</p>
  
  <a href="{{ route('siswa_tambah') }}" class="btn btn-primary">Tambah Data</a>
<a href="{{ route('siswa') }}" class="btn btn-primary">Refresh</a>
@if (Session::has('hapus'))
<div class="alert alert-danger">
    {{ Session::get('hapus') }}
</div>
@endif
  <table class="table mt-3 border">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($dataSiswa as $item)
        <tr>
            <td>1</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->alamat }}</td>
            <td>
                <a href="{{route('edit_siswa',$item->id)}}"  class="btn btn-warning">Edit</a>
                <form action="{{ route('aksi_hapus_siswa', $item->id) }}" method="post">
                  @csrf
                  <button type="submit" class="btn
          btn-danger">hapus</button>
              </form>
            </td>
        </tr>
    @endforeach
    </tbody>
  </table>
  {{ $dataSiswa->links('vendor.pagination.bootstrap-5') }}
</div>
@endsection
