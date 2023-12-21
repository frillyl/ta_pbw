<!DOCTYPE html>
<html lang="id" data-bs-theme="auto">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penelitian Gunadarma</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- Google Font: Montserrat -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Montserrat", sans-serif;
        }

        .carousel-overlay {
            /* position: absolute;
            top: 57px;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #604972;
            opacity: 0.7;
            z-index: 1; */
        }

        .logo-and-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            text-align: left;
            color: #fff;
        }

        .logo-and-text img {
            display: inline-block;
            vertical-align: middle;
            margin-bottom: 10px;
        }

        .vertical-line {
            display: inline-block;
            vertical-align: middle;
            border-left: 5px solid #fff;
            height: 200px;
            margin: 0 20px;
        }

        .text-container {
            display: inline-block;
            vertical-align: middle;
        }
    </style>
</head>

<body>
    <header data-bs-theme="light">
        <nav class="navbar navbar-expand-lg navbar-light border-bottom bg-white" data-bs-theme="light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><b>Lembaga Penelitian UG</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Agenda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Unduh</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Daftar Penerima
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Dana</a></li>
                                <li><a class="dropdown-item" href="#">Hibah</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Tautan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <!-- CAROUSEL START -->
        <div class="carousel-overlay">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./assets/images/image1.jpg" class="d-block w-100" alt="Image Carousel 1">
                        <!-- </div>
                    <div class="carousel-item">
                        <img src="./assets/images/image2.jpg" class="d-block w-100" alt="Image Carousel 2">
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/images/image3.jpg" class="d-block w-100" alt="Image Carousel 3">
                    </div> -->
                    </div>
                </div>
            </div>

            <div class="logo-and-text">
                <img src="./assets/images/logo.png" width="200px" height="200px" alt="Logo UG">
                <div class="vertical-line"></div>
                <div class="text-container">
                    <h3>Selamat Datang di Situs Resmi</h3>
                    <h1><b>LEMBAGA PENELITIAN</b></h1>
                    <h2>Universitas Gunadarma</h2>
                </div>
            </div>
            <!-- CAROUSEL END -->

            <!-- SECTION BERITA START -->
            <div class="container">
                <div class="row mt-5 mb-3">
                    <div class="col-lg-12">
                        <h3><b>Berita Terkini</b></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header bg-white" style="color: #8F3797;">
                                Tanggal Upload Berita
                            </div>
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><b>Judul Berita</b></h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn" style="background-color:#8F3797; color:#fff">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header bg-white" style="color: #8F3797;">
                                Tanggal Upload Berita
                            </div>
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><b>Judul Berita</b></h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn" style="background-color:#8F3797; color:#fff">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header bg-white" style="color: #8F3797;">
                                Tanggal Upload Berita
                            </div>
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><b>Judul Berita</b></h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn" style="background-color:#8F3797; color:#fff">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <a href="#">Tampilkan Semua Berita</a>
                    </div>
                </div>
            </div>
            <!-- SECTION BERITA END -->

            <!-- SECTION AGENDA START -->
            <div class="container">
                <div class="row mt-5 pt-5 mb-3">
                    <div class="col-lg-12">
                        <center>
                            <h3><b>Agenda Penelitian</b> PTA 2023/2024</h3>
                        </center>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" style="text-align: center; background-color:#8F3797; color:#fff">Agenda</th>
                                    <th scope="col" style="text-align: center; background-color:#8F3797; color:#fff">Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <td>Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- SECTION AGENDA END -->
    </main>

    <div class="container-fluid" style="background-color: #8F3797; color:#fff">
        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
            <div class="col-lg-6">
                <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                    <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>
                <p class="text-body-secondary">© 2023</p>
            </div>

            <div class="col-lg-3">
                <h5>Tentang Kami</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                </ul>
            </div>

            <div class="col-lg-3">
                <h5>Link Terkait</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                </ul>
            </div>
        </footer>
    </div>

    <!-- Bootstrap JS -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>