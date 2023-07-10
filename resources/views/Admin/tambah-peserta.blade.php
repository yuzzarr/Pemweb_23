@extends('layouts.navbar')
@section('title', 'Daftar Peserta')
@section('content')
        <div class="container">
            <h2>Daftar Peserta Bimbel</h2>
            <br>
            <Form action="/storePeserta" method="POST" enctype="multipart/form-data">
            @csrf
            @if($errors->any())
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <div class="col">
                <div class="col mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" required>
                </div>
                <div class="col mb-3">
                    <label for="Alamat" class="form-label">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="form-control" required>
                </div>
                <div class="col mb-3">
                    <label class="form-label d-block">Jenis Kelamin</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" id="lakiLaki" type="radio" name="jenis_kelamin" value="Laki-Laki" required>
                        <label class="form-check-label" for="lakiLaki">Laki-Laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" id="perempuan" type="radio" name="jenis_kelamin" value="Perempuan" required>
                        <label class="form-check-label" for="perempuan">Perempuan</label>
                    </div>
                </div>
                <div class="col mb-3">
                    <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                    <input type="text" name="asal_sekolah" id="tgl_awal" class="form-control" required>
                </div>
                <div class="col mb-3">
                    <label for="kelas" class="form-label">Kelas</label>
                    <input type="text" name="kelas" id="tgl_akhir" class="form-control" required>
                </div>
                <div class="col mb-3">
                    <label for="gambar" class="form-label">Foto Diri</label>
                    <input type="file" name="gambar" id="gambar" class="form-control" required>
                </div>
                <button class="btn btn-dark col mb-3 mt-4" type="submit" name="submit">Submit</button>
            </div>
            </Form>
        </div>
@endsection