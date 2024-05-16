@extends('layouts.index')
@section('title','Home')
@section('content')
ini content coba coba
@php 
$sekolah='smk ds';
$no=2;
$array=[1,2,3,4];
@endphp
@foreach ($array as $item)
<h1> {{ $item }}   </h1> 
@endforeach

@if($no==1)
<button>no {{ $no }}</button>
@else 
<button>no bukan 1</button>
@endif

{{ $sekolah }}
    halaman utama
    {{-- laravel --}}
    {{ $nama_lengkap }}


    <?php echo $kelas ?>
    <a href="/siswa">
        halaman siswa
    </a>
    @endsection
