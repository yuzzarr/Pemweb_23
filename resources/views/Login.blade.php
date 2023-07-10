@extends('layouts.navbar')
@section('title', 'Daftar Peserta')
@section('content')
        <div class="container">
            <h2>Login</h2>
            <br>
            @if(session()->has('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <Form action="/Login" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="col">
                <div class="col mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required autofocus>
                </div>
                <div class="col mb-3">
                    <label for="kelas" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                
                <button class="btn btn-dark col mb-3 mt-4" type="submit" name="submit">Login</button>
            </div>
            </Form>
            <br>
            <a>Belum punya akun? </a><a href="/Register">Register</a>
        </div>
@endsection