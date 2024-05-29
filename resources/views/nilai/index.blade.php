@extends('layouts.index')
@section('title', 'nilai')
@section('content')
    <div class="container mt-3">
<a href="{{ route('nilai_tambah') }}"
class="btn btn-primary"
>Tambah</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama Siswa</th>
                    <th> Nilai</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataNilai as $item)
                <tr>
                   <td>{{ $loop->iteration }}</td>
                   <td>{{ $item->nama }}</td>
                   <td>{{ $item->nilai }}</td>
                   <td>
                    <form action="{{ route('hapus_nilai',$item->nilai_id) }}" method="post">
                       @csrf
                        <button type="submit" class="btn
                        btn-danger">hapus</button>
                    </form>
                   </td>
                </tr>    
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
