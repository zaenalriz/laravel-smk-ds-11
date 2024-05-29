@extends('layouts.index')

@section('content')
    <div class="container">
        <form action="{{ route('aksi_tambah_nilai') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="siswa">Siswa</label>
                <select class="form-select" name="siswa_id">
                    <option value="">Pilih siswa</option>
                    @foreach ($dataSiswa as $siswa)
                        <option value="{{ $siswa->id }}">{{ $siswa->nama }}</option>
                    @endforeach

                </select>
            </div>
            <div class="mb-3">
                <label for="nilai">Nilai</label>
                <input type="text" class="form-control" name="nilai">
            </div>
            <button type="submit" class="btn btn-primary">
                Tambah
            </button>
        </form>
    </div>
@endsection
