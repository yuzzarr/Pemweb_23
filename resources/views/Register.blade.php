@extends('layouts.navbar')
@section('title', 'Daftar Peserta')
@section('content')
        <div class="container">
            <h2>Register Akun</h2>
            <br>
            <Form action="/actionRegister" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="col">
                <div class="col mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" required>
                </div>
                <div class="col mb-3">
                    <label for="asal_sekolah" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="col mb-3">
                    <label for="kelas" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                
                <button class="btn btn-dark col mb-3 mt-4" type="submit" name="submit">Register</button>
            </div>
            </Form>
        </div>
@endsection