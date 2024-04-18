<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Data Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    @vite('resources/css/app.css')
</head>
<body style="background: lightgray">
<header class="mx-auto w-full bg-blue-500">
    <nav class="py-3 justify-center text-center flex gap-5">
        <a href="https://poltekharber.ac.id/" target="_blank" class="text-white hover:no-underline">PoltekHarber</a>
        <a href="https://d3komputer.poltektegal.ac.id/" target="_blank" class="text-white hover:no-underline">D3Komputer</a>
        <a href="https://syncnau.poltektegal.ac.id/" target="_blank" class="text-white hover:no-underline">Syncnau</a>
        <a href="https://oase.poltektegal.ac.id/" target="_blank" class="text-white hover:no-underline">Oase</a>
    </nav>
</header>

  <div class="container mt-8 mb-8">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-white border-0 shadow-lg rounded-lg">
                <div class="card-header bg-blue-500 text-white">
                    <h4 class="font-semibold">Detail Mahasiswa</h4>
                </div>
                <div class="card-body">
                    <div class="mb-4">
                        <h5 class="font-semibold">NIM:</h5>
                        <p>{{ $mahasiswa->nim }}</p>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-semibold">Nama:</h5>
                        <p>{{ $mahasiswa->nama }}</p>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-semibold">Alamat:</h5>
                        <p>{{ $mahasiswa->alamat }}</p>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-semibold">Nomor HP:</h5>
                        <p>{{ $mahasiswa->nomorhp }}</p>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-semibold">Motivasi Kuliah:</h5>
                        <p>{{ $mahasiswa->motivasi_kuliah }}</p>
                    </div>
                    <a href="{{ route('mahasiswas.index') }}" class="bg-blue-500 py-2 px-3 rounded-lg hover:bg-green-500 text-white hover:no-underline">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
