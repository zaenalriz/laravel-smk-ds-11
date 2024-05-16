@extends('layouts.index')
@section('title','Kelas')
   
@section('content')
<div class="container mt-5">
  <form class="d-flex" role="search">
    <input class="form-control me-2" type="text" name="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Search</button>
  </form>
  <p>Data Yang Di cari : {{ $search }}</p>
  <table class="table mt-3 border">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Kelas</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($dataKelas as $item)
      <tr>
       <td>1</td>
       <td>{{ $item->kelas }}</td>
       <td>
 <a href=""  class="btn btn-warning">Edit</a>
 <a href=""  class="btn btn-danger">Hapus</a>
       </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
