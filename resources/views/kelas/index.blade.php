@extends('layouts.index')
@section('title','Kelas')
   
@section('content')
<div class="container mt-5">
  <form class="d-flex" role="search">
    <input class="form-control me-2" type="text" name="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Search</button>
  </form>
  <p>Data Yang Di cari : {{ $search }}</p>

  <a href="{{ route('tambah_kelas') }}" class="btn btn-primary">Tambah Data</a>
<a href="{{ route('kelas') }}" class="btn btn-primary">Refresh</a>
  <table class="table mt-3 border">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Kelas</th>
        <th scope="col">Aksi</th>
      </tr>
 
    </thead>
    <tbody>
      @foreach($dataKelas  as  $key =>$item)
      <tr>
       <td>{{$loop->iteration }}</td>
       <td>{{ $item->kelas }}</td>
       <td>
 <a href="{{ route('edit',$item->id) }}"  class="btn btn-warning">Edit</a>
 <form action="{{ route('hapus',$item->id) }}" method="post">
@csrf
<button type="submit" class="btn btn-danger">hapus</button>
</form>
       </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{ $dataKelas->links('vendor.pagination.bootstrap-5') }}
</div>
@endsection
