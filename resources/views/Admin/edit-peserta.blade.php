@extends('layouts.navbar')
@section('title', 'Edit Peserta') 
@section('content')
        <div class="container">
            <h2>Edit Peserta Bimbel</h2>
            <br>
            @if($errors->any())
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            @foreach($peserta as $p)
            <Form action="/updatePeserta/{{ $p->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col">
                <div class="col mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" value="{{ $p->nama }}" id="nama" class="form-control" required>
                </div>
                <div class="col mb-3">
                    <label for="Alamat" class="form-label">Alamat</label>
                    <input type="text" name="alamat" value="{{ $p->alamat }}" id="alamat" class="form-control" required>
                </div>
                <div class="col mb-3">
                    <label class="form-label d-block">Jenis Kelamin</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" id="lakiLaki" type="radio" name="jenis_kelamin" value="Laki-Laki" {{ $peserta->first()->jenis_kelamin == 'Laki-Laki' ? 'checked' : '' }} required>
                        <label class="form-check-label" for="lakiLaki">Laki-Laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" id="perempuan" type="radio" name="jenis_kelamin" value="Perempuan" {{ $peserta->first()->jenis_kelamin == 'Perempuan' ? 'checked' : '' }} required>
                        <label class="form-check-label" for="perempuan">Perempuan</label>
                    </div>
                </div>
                <div class="col mb-3">
                    <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                    <input type="text" name="asal_sekolah" value="{{ $p->asal_sekolah }}" id="tgl_awal" class="form-control" required>
                </div>
                <div class="col mb-3">
                    <label for="kelas" class="form-label">Kelas</label>
                    <input type="text" name="kelas" value="{{ $p->kelas }}" id="tgl_akhir" class="form-control" required>
                </div>
                <div class="col mb-3">
                    <label for="gambar" class="form-label">Foto Diri</label>
                    <input type="file" name="gambar" id="gambar" class="form-control"><br/>
                    <img src="{{ asset('Gambar Peserta/' . $p->gambar) }}" alt="Foto Diri" width="200"><br/>
                    <a>{{ $p->gambar }}</a>
                </div>
                <button class="btn btn-dark col mb-3 mt-4" type="submit" name="submit">Submit</button>
            </div>
            @endforeach
            </Form>
        </div>
@endsection