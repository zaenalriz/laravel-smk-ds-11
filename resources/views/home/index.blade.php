<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link " href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/siswa">Siswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/kelas">Kelas</a>
              </li>
             
            </ul>
          </div>
        </div>
      </nav>
      
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>