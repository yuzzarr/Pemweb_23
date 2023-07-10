<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <div class="container">
          <a class="navbar-brand" href="/"><img src="/assets/Gambar/Bimbel top_1.png" alt="Logo Bimbel Top +" class="gambar_logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse text-right" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="/#aboutus">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/#kelas">Kelas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/#testimoni">Testimoni</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/#mentor">Mentor</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/#kontak">Kontak Kami</a>
              </li>
              @auth
              @if(auth()->user()->role == 'Admin')
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Welcome back, {{ auth()->user()->name }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/">Data Akun</a>
                  <a class="dropdown-item" href="#">Data User</a>
                  <div class="dropdown-divider"></div>
                  <form action="/Logout" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item">Logout</button>
                  </form>
                </div>
              </li>
              @else
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Welcome back, {{ auth()->user()->name }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/">Daftar</a>
                  <a class="dropdown-item" href="#">Download Materi</a>
                  <div class="dropdown-divider"></div>
                  <form action="/Logout" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item">Logout</button>
                  </form>
                </div>
              </li>
              @endif
              @endauth
            </ul>
          </div>
        </div>
    </nav>

    <div class="container-fluid Kelas pt-5 pb-5">
        @yield('content')
    </div>

    

    <script>
      document.addEventListener("DOMContentLoaded", function() {
        var dropdownToggleList = [].slice.call(document.querySelectorAll('[data-bs-toggle="dropdown"]'));
        dropdownToggleList.map(function (dropdownToggle) {
          return new bootstrap.Dropdown(dropdownToggle);
        });
      });
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>