<!DOCTYPE html>
<html lang="id" data-bs-theme="auto">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penelitian Gunadarma</title>
    <link rel="icon" href="assets/images/logo.png">
    <link rel="stylesheet" href="css/style.css">
    <script src="javascript/script.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- Google Font: Montserrat -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <!-- Google Font : Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- Google Font : Libre Baskerville -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <!-- Google Font : Mulish -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;700&display=swap" rel="stylesheet">
    <!-- Google Font : Public Sans -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@600&display=swap" rel="stylesheet">
    <!-- Icon Footer -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,200,1,0" />
</head>

<body>
    <header data-bs-theme="light">
        <nav class="navbar navbar-expand-lg navbar-light border-bottom bg-white" data-bs-theme="light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img id="logo-lp" src="assets/images/logo.png">
                    <div class="text-container">
                        <span id="above-logo">LEMBAGA PENELITIAN</span>
                        <span>UNIVERSITAS GUNADARMA</span>
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php"
                                style="color: #B642C0; border-bottom: 4px solid #B642C0; padding-bottom: 2px;">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="Profil.php">Profil</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="berita.php" role="button" aria-haspopup="true"
                                aria-expanded="false">
                                Berita
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="beritaPenelitian.php">Penelitian</a></li>
                                <li><a class="dropdown-item" href="beritaKegiatan.php">Kegiatan</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="unduh.php">Unduh</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Daftar Penerima Hibah
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="dana.php">Dana Padanan</a></li>
                                <li><a class="dropdown-item" href="hibah.php">Hibah</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Tautan
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="http://ejournal.gunadarma.ac.id">eJournal</a></li>
                                <li><a class="dropdown-item" href="#">Pengumpulan Laporan</a></li>
                                <li><a class="dropdown-item" href="#">Pengumpulan Proposal</a></li>
                            </ul>
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
                        <div class="overlay"></div>
                        <img src="./assets/images/image1.jpg" class="d-block w-100" alt="Image Carousel 1">
                    </div>
                    <div class="carousel-item">
                        <div class="overlay"></div>
                        <img src="./assets/images/image2.jpeg" class="d-block w-100" alt="Image Carousel 2">
                    </div>
                    <div class="carousel-item">
                        <div class="overlay"></div>
                        <img src="./assets/images/image3.jpg" class="d-block w-100" alt="Image Carousel 3">
                    </div>
                </div>
            </div>
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="0"></button>
                <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="2"></button>
            </div>
        </div>

        <div class="logo-and-text">
            <img src="./assets/images/logo.png" width="300px" height="300px" alt="Logo UG">
            <div class="vertical-line"></div>
            <div class="text-container">
                <h3>Selamat Datang di Situs Resmi</h3>
                <h1><b>LEMBAGA PENELITIAN</b></h1>
                <h2>UNIVERSITAS GUNADARMA</h2>
            </div>
        </div>
        <!-- CAROUSEL END -->

        <!-- SECTION BERITA START -->
        <div class="container">
            <div class="row mt-5 mb-3">
                <div class="col-lg-12">
                    <h3>Berita Terkini</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header bg-white">
                            Tanggal Upload Berita
                        </div>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><b>Judul Berita</b></h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <a href="#" class="btn"
                                style="background-color:#8F3797; color:#fff; font-family:'Poppins'">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header bg-white">
                            Tanggal Upload Berita
                        </div>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><b>Judul Berita</b></h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <a href="#" class="btn"
                                style="background-color:#8F3797; color:#fff; font-family:'Poppins'">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header bg-white">
                            Tanggal Upload Berita
                        </div>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><b>Judul Berita</b></h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                            <a href="#" class="btn"
                                style="background-color:#8F3797; color:#fff; font-family:'Poppins'">Selengkapnya</a>
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
                        <h3>Kalender Penelitian <span>PTA 2023/2024</span></h3>
                    </center>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-bordered table-hover table-striped center-table">
                        <thead>
                            <tr>
                                <th scope="col" style="text-align: center; background-color:#A439B5;; color:#fff;">
                                    Periode</th>
                                <th scope="col" style="text-align: center; background-color:#A439B5;; color:#fff">
                                    Agenda</th>
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
        <div id="scroll-to-top" title="Kembali ke atas">
            <img src="./assets/images/arrow.png" alt="Arrow Up">
        </div>
        <!-- SECTION AGENDA END -->
    </main>

    <div class="container-fluid" style="background-color: #833A8A; color:#fff">
        <footer class="row-cols-1 py-5 my-5 border-top">
            <div class="row justify-content-between footer-container">
                <div class="col-lg-3">
                    <h5>LEMBAGA PENELITIAN</h5>
                    <h6>UNIVERSITAS GUNADARMA</h6>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2">
                            <span class="material-symbols-outlined">location_on</span>
                            <div class="icon-text">
                                <p>Jl. Margonda Raya 100,</p>
                                <p>Depok, Jawa Barat,</p>
                                <p>INDONESIA - 16424</p>
                            </div>
                        </li>
                        <li class="nav-item mb-2">
                            <span class="material-symbols-outlined">call</span>
                            021 - 78881112
                        </li>
                        <li class="nav-item mb-2"><a href="mailto:lembagapenelitian@gunadarma.ac.id"
                                style="text-decoration:none; color:#D4D4D4;">
                                <span class="material-symbols-outlined">mail</span>
                                lembagapenelitian@gunadarma.ac.id</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" style="text-decoration:none; color:#D4D4D4">
                                <span class="material-symbols-outlined">language</span>
                                lembagapenelitian@gunadarma.ac.id</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3">
                    <h5>Tentang Kami</h5>
                    <p class="about-us">Lembaga Penelitian Universitas Gunadarma adalah lembaga di lingkungan
                        Universitas Gunadarma yang mengelola
                        bidang penelitian atau riset, pengabdian, publikasi, kukerta, kerjasama bidang penelitian atau
                        riset dan pengabdian serta luarannya.</p>
                </div>

                <div class="col-lg-3">
                    <h5>Link Terkait</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="http://gunadarma.ac.id" target="_blank"
                                style="text-decoration:none; color:#D4D4D4; font-size: 20px">Web Gunadarma</a></li>
                        <li class="nav-item mb-2"><a href="http://ejournal.gunadarma.ac.id" target="_blank"
                                style="text-decoration:none; color:#D4D4D4; font-size: 20px">eJournal</a></li>
                        <li class="nav-item mb-2"><a href="https://baak.gunadarma.ac.id" target="_blank"
                                style="text-decoration:none; color:#D4D4D4; font-size: 20px">BAAK</a></li>
                        <li class="nav-item mb-2"><a href="https://lpm.gunadarma.ac.id" target="_blank"
                                style="text-decoration:none; color:#D4D4D4; font-size: 20px">Pengabdian Masyarakat</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row pt-2 mb-3"></div>
            <div class="row footer-container">
                <div class="col-lg-12">
                    <h5 style="font-family:'Libre Baskerville'">Media Sosial</h5>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" height="25" width="25" viewBox="0 0 448 512"><a
                                href="https://www.instagram.com/gunadarma/">
                                <path fill="#f9fafa"
                                    d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                            </a></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" height="25" width="25" viewBox="0 0 512 512"><a
                                href="https://www.facebook.com/gunadarma">
                                <path fill="#f8f9fc"
                                    d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z" />
                            </a></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" height="25" width="25" viewBox="0 0 448 512"><a
                                href="https://www.linkedin.com/school/universitas-gunadarma/">
                                <path fill="#f2f6fd"
                                    d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" />
                            </a></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" height="25" width="25" viewBox="0 0 576 512"><a
                                href="https://www.youtube.com/@ugtvofficial">
                                <path fill="#fafafa"
                                    d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z" />
                            </a></svg>
                    </p>
                </div>
            </div>
        </footer>
    </div>

    <!-- Bootstrap JS -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
</body>

</html>