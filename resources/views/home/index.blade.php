@extends('layouts.index')
@section('title','Home')
@section('content')
<div class="container mt-3">
  <h3>Hallo {{ auth()->user()->nama }}</h3>
    <div class="row gap-3">
        <div class="col-lg-3">
            <div class="card bg-primary" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title text-white">Jumlah Kelas</h5>
                  <h6 class="card-subtitle mb-2 text-white">{{ $jumlahKelas }}</h6>
                </div>
              </div>
        </div>
        <div class="col-lg-3">
            <div class="card bg-primary" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title text-white">Jumlah Siswa</h5>
                  <h6 class="card-subtitle mb-2 text-white">{{ $jumlahSiswa }}</h6>
                </div>
              </div>
        </div>
        
    </div>
</div>
@endsection
