@extends('layouts.navbar')
@section('title', 'List Peserta')
@section('content')
        <div class="container text-center">
            <h2>List Peserta Bimbel</h2>
            <br>
            <a href="/Admin/tambah-peserta">Tambah Peserta</a>
            <br>
            <div>
              <form action="/index" method="GET">
                @csrf
                <h5>Search</h5>
                <input type="text" name="cari">
                <button type="submit">Search</button>
                <br>
              </form>
            </div>
            <br>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <th class="table-primary">No.</th>
                        <th class="table-primary">Foto Diri</th>
                        <th class="table-primary">Nama</th>
                        <th class="table-primary">Alamat</th>
                        <th class="table-primary">Jenis Kelamin</th>
                        <th class="table-primary">Asal Sekolah</th>
                        <th class="table-primary">Kelas</th>
                        <th class="table-primary">Aksi</th>
                    </thead>
                    
                    <tbody>
                        @foreach($peserta as $p)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td style="text-align: center; width: 25%;"><img src="/Gambar Peserta/{{ $p->gambar }}" style="width: 25%; height: 25%;"></td>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->alamat }}</td>
                            <td>{{ $p->jenis_kelamin }}</td>
                            <td>{{ $p->asal_sekolah }}</td>
                            <td>{{ $p->kelas }}</td>
                            <td>
                                <a href="/Admin/edit-peserta/{{ $p->id }}">
                                  <button type="button" class="btn btn-success btn-lg daftar btn-sm">Edit</button>
                                </a>
                                <a href="/hapusPeserta/{{ $p->id }}">
                                    <button type="button" class="btn btn-danger btn-lg daftar btn-sm">Hapus</button>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection
