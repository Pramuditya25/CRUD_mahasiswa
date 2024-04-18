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

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('mahasiswas.update', $mahasiswa->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">NIM</label>
                                <input type="number" class="form-control @error('nim') is-invalid @enderror" name="nim" value="{{ old('nim', $mahasiswa->nim) }}" placeholder="Masukkan NIM Mahasiswa">
                            
                                <!-- error message untuk nim -->
                                @error('nim')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">NAMA</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $mahasiswa->nama) }}" placeholder="Masukkan Nama Mahasiswa">
                            
                                <!-- error message untuk nama -->
                                @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">ALAMAT</label>
                                <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" rows="3" placeholder="Masukkan Alamat Mahasiswa">{{ old('alamat', $mahasiswa->alamat) }}</textarea>
                            
                                <!-- error message untuk alamat -->
                                @error('alamat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">NOMOR HP</label>
                                <input type="text" class="form-control @error('nomorhp') is-invalid @enderror" name="nomorhp" value="{{ old('nomorhp', $mahasiswa->nomorhp) }}" placeholder="Masukkan Nomor HP Mahasiswa">
                            
                                <!-- error message untuk nomorhp -->
                                @error('nomorhp')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">MOTIVASI KULIAH</label>
                                <textarea class="form-control @error('motivasi_kuliah') is-invalid @enderror" name="motivasi_kuliah" rows="3" placeholder="Masukkan Motivasi Kuliah">{{ old('motivasi_kuliah', $mahasiswa->motivasi_kuliah) }}</textarea>
                            
                                <!-- error message untuk motivasi_kuliah -->
                                @error('motivasi_kuliah')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="flex gap-3">
                               <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                               <button type="reset" class="btn btn-md btn-warning">RESET</button>
                               <a href="{{ route('mahasiswas.index') }}" class="bg-blue-500 py-2 px-4 rounded-lg
                               hover:no-underline hover:bg-green-500 text-white">Kembali</a>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
