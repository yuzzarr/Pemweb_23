<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIMBEL TOP +</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="assets/Gambar/Bimbel top_1.png" alt="Logo Bimbel Top +" class="gambar_logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse text-right" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#aboutus">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#kelas">Kelas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#testimoni">Testimoni</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#mentor">Mentor</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#kontak">Kontak Kami</a>
              </li>
              @auth
              @if(auth()->user()->role == 'admin')
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Welcome back, {{ auth()->user()->name }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/">Data User</a>
                  <a class="dropdown-item" href="/Admin/index">Data Peserta</a>
                  <a class="dropdown-item" href="#">Data Materi</a>
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
                  <a class="dropdown-item" href="">Daftar</a>
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
    
    <div class="container-fluid banner">
        <div class="container text-center">
            <h4 class="display-6">Ingin Nilai Ujian Naik??</h4>
            <h3 class="display-1">Yuk Bimbel di BIMBEL TOP +</h3>
            @auth
            <a href="/Admin/tambah-peserta">
                <button type="button" class="btn btn-primary btn-lg">
                    Daftar
                </button>
            </a>
            @else
            <a href="/Register">
                <button type="button" class="btn btn-primary btn-lg">
                    Register
                </button>
            </a>
            <a href="/Login">
                <button type="button" class="btn btn-primary btn-lg">
                    Login
                </button>
            </a>
            @endauth
        </div>
    </div>

    <div class="container-fluid pt-5 pb-5 bg-light">
      <div class="container text-center">
          <h2 class="display-3" id="aboutus">About Us</h2>
          <h1 class="display-6">Sejak SBMPTN Belum Ganti Nama!!</h1>
          <img src="assets/Gambar/logo.png" alt="Logo Bimbel Top +" class="logo_tentang">
          <p class="deskripsi">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium alias enim illo modi, ex, reiciendis vitae nihil cum totam, culpa voluptate facere facilis adipisci neque veniam vel doloribus! Perferendis odit recusandae placeat vel illum. Aut, distinctio delectus laboriosam ipsam nulla nam doloremque voluptas possimus harum praesentium, numquam vero blanditiis unde dolorem ab. Quo, deleniti repudiandae sed provident voluptatibus fugiat quaerat sunt sapiente quis? Optio reiciendis beatae minus ipsa non sed sit necessitatibus porro consequuntur! Facere, accusantium! Rerum illo expedita facilis minima mollitia nesciunt, reiciendis obcaecati voluptatibus, dolor voluptas ea distinctio commodi inventore fuga. Explicabo quo adipisci sed sapiente beatae id animi deleniti doloremque fugiat pariatur iste eum magnam, iure labore excepturi distinctio veniam ipsa cumque facilis esse itaque quod aut error rem? Eaque fugiat animi necessitatibus nobis vero excepturi in atque voluptatibus ab ad, officiis culpa neque sapiente explicabo labore, ipsum assumenda. Inventore possimus facere at. Debitis perferendis rem distinctio porro laborum exercitationem minima sunt rerum fuga quis.</p>
          <p class="display-6">99.9999% Lulus</p>
      </div>
    </div>

    <div class="container-fluid Kelas pt-5 pb-5">
        <div class="container text-center">
            <h2 class="display-3" id="kelas">Program Kelas</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam quaerat quae nihil, similique laudantium quam?</p>
            <div class="row pt-4">
                <div class="col-md-6">
                    <span class="kotak">
                        <i class="fa-solid fa-building-columns fa-5x"></i>
                    </span>
                    <h3 class="mt-3">Program PTN</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda magnam odit expedita!</p>
                </div>

                <div class="col-md-6">
                    <span class="kotak">
                        <i class="fa-solid fa-users fa-5x"></i>
                    </span>
                    <h3 class="mt-3">Program Kedinasan</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda magnam odit expedita!</p>
                </div>

                <div class="col-md-4 program">
                    <span class="kotak">
                        <i class="fa-solid fa-school fa-5x"></i>
                    </span>
                    <h3 class="mt-3">Program SMA</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda magnam odit expedita!</p>
                </div>

                <div class="col-md-4 program">
                  <span class="kotak">
                      <i class="fa-solid fa-school fa-5x"></i>
                  </span>
                  <h3 class="mt-3">Program SMP</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda magnam odit expedita!</p>
                </div>

                <div class="col-md-4 program">
                  <span class="kotak">
                      <i class="fa-solid fa-school fa-5x"></i>
                  </span>
                  <h3 class="mt-3">Program SD</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda magnam odit expedita!</p>
                </div>

                <p class="fs-3">Yuk Daftar Bimbel di Bimbel Top +</p>
                @auth
                <a href="/tambah-peserta">
                  <button type="button" class="btn btn-primary btn-lg daftar">
                      Daftar
                  </button>
                </a>
                @else
                <a href="/Login">
                  <button type="button" class="btn btn-primary btn-lg daftar">
                      Daftar
                  </button>
                </a>
                @endauth
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5 pb-5 bg-light">
        <div class="container text-center">
            <h2 class="display-3" id="testimoni">Testimoni</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil quasi illo illum, totam iure praesentium. Id facilis aliquam, modi voluptate corrupti numquam nam veritatis!</p>
            
            <div class="row pt-4 gx-4 gy-4">
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/Gambar/Testimoni 1.webp" class="card-img-top" alt="Testimoni 1">
                        <div class="card-body">
                          <h5 class="card-title">Testimoni 1</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae corrupti quasi illo maiores explicabo odit, facere hic labore eos cumque dolorum. Odio, eos fuga?</p>
                        </div>
                      </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/Gambar/Testimoni 2.webp" class="card-img-top" alt="Testimoni 2">
                        <div class="card-body">
                          <h5 class="card-title">Testimoni 2</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae corrupti quasi illo maiores explicabo odit, facere hic labore eos cumque dolorum. Odio, eos fuga?</p>
                        </div>
                      </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/Gambar/Testimoni 3.webp" class="card-img-top" alt="Testimoni 3">
                        <div class="card-body">
                          <h5 class="card-title">Testimoni 3</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae corrupti quasi illo maiores explicabo odit, facere hic labore eos cumque dolorum. Odio, eos fuga?</p>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid Kelas pt-5 pb-5">
      <div class="container text-center">
          <h2 class="display-3" id="mentor">Mentor</h2>
          <h1 class="display-6">Lulusan dari Universitas Top!!</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam quaerat quae nihil, similique laudantium quam?</p>
          <div class="row pt-4">
            <div class="col-md-4 list-mentor">
              <div class="card" style="width: 18rem;">
                <img src="assets/Gambar/3.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="Mentor 1">Mentor 1</h5>
                  <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex commodi, nam id saepe similique ipsum?</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Jurusan Matematika</li>
                  <li class="list-group-item">Lorem ipsum dolor sit.</li>
                </ul>
              </div>
            </div>

            <div class="col-md-4 list-mentor">
              <div class="card" style="width: 18rem;">
                <img src="assets/Gambar/Teks paragraf Anda (2).png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Mentor 2</h5>
                  <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia beatae neque soluta aut expedita omnis!</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Jurusan Matematika</li>
                  <li class="list-group-item">Lorem ipsum dolor sit amet.</li>
                </ul>
              </div>
            </div>
          </div>
      </div>
    </div>

    <footer class="text-center text-lg-start bg-light text-muted">
      <!-- Section: Social media -->
      <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
          <span>Get connected with us on social networks:</span>
        </div>
        <!-- Left -->
    
        <!-- Right -->
        <div>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-google"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-linkedin"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-github"></i>
          </a>
        </div>
        <!-- Right -->
      </section>
      <!-- Section: Social media -->
    
      <!-- Section: Links  -->
      <section id="kontak">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <h6 class="text-uppercase fw-bold mb-4">Bimbel Top +</h6>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus cupiditate, pariatur nesciunt impedit atque sequi beatae dolore voluptate similique fuga.
              </p>
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">
                Bimbel Top +
              </h6>
              <p>
                <a href="#aboutus" class="text-reset">About Us</a>
              </p>
              <p>
                <a href="#kelas" class="text-reset">Kelas</a>
              </p>
              <p>
                <a href="#testimoni" class="text-reset">Testimoni</a>
              </p>
              <p>
                <a href="#mentor" class="text-reset">Mentor</a>
              </p>
              <p>
                <a href="#kontak" class="text-reset">Kontak Kami</a>
              </p>
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">
                Program Bimbel
              </h6>
              <p>
                <a href="#kelas" class="text-reset">Program PTN</a>
              </p>
              <p>
                <a href="#kelas" class="text-reset">Program Kedinasan</a>
              </p>
              <p>
                <a href="#kelas" class="text-reset">Program SMA</a>
              </p>
              <p>
                <a href="#kelas" class="text-reset">Program SMP</a>
              </p>
              <p>
                <a href="#kelas" class="text-reset">Program SD</a>
              </p>
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
              <p><i class="fas fa-home me-3"></i> Jonggol, Bogor 11111</p>
              <p>
                <i class="fas fa-envelope me-3"></i>
                info@example.com
              </p>
              <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
              <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->
    
      <!-- Copyright -->
      <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2021 Copyright:
        <a class="text-reset fw-bold" href="">Bimbel Top +</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>