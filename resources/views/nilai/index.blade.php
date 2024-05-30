@extends('layouts.index')
@section('title', 'nilai')
@section('content')
    <div class="container mt-3">
        <a href="{{ route('nilai_tambah') }}" class="btn btn-primary">Tambah</a>

        @if (Session::has('pesan'))
            <div class="alert alert-primary">
                {{ Session::get('pesan') }}
            </div>
        @endif
        @if (Session::has('hapus'))
        <div class="alert alert-danger">
            {{ Session::get('hapus') }}
        </div>
        @endif
        @if (Session::has('edit'))
        <div class="alert alert-warning">
            {{ Session::get('edit') }}
        </div>
        @endif
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
                            <a href="{{ route('nilai_edit',$item->nilai_id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('hapus_nilai', $item->nilai_id) }}" method="post">
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
