<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit(); // Terminate script execution after the redirect
}

include_once("../../../admin/config.php");
$result = mysqli_query($conn, "SELECT * FROM tb_tentang_kami JOIN tb_user ON tb_user.id_user = tb_tentang_kami.id_user");

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil | Tentang Kami</title>
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
                            <a class="nav-link" aria-current="page" href="/admin/dashboard.php">Beranda</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Profil
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item active" href="./profil/tentang_kami/index.php">Tentang Kami</a></li>
                                <li><a class="dropdown-item" href="#">Visi</a></li>
                                <li><a class="dropdown-item" href="#">Misi</a></li>
                            </ul>
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
                                <li><a class="dropdown-item" href="dana.php">Dana</a></li>
                                <li><a class="dropdown-item" href="hibah.php">Hibah</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="logout.php" class="btn btn-danger">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            <div class="row mt-5 mb-3">
                <div class="col-lg-12">
                    <center>
                        <h3><b>Tentang Kami</h3>
                    </center>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-12">
                    <button type="button" class="btn" style="background-color: #8F3797; color:#fff;" data-bs-toggle="modal" data-bs-target="#ModalAdd">
                        Tambah Data
                    </button>
                </div>
            </div>

            <!-- Modal Add-->
            <div class="modal fade" id="ModalAdd" tabindex="-1" aria-labelledby="ModalAdd" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="ModalAdd"><b>Tambah Data</b></h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="POST">
                                <div class="mb-3">
                                    <b><label for="inputIsi" class="form-label">Isi Tentang Kami</label></b>
                                    <textarea type="text" name="isi" class="form-control" id="inputIsi" placeholder="Masukkan isi Tentang Kami disini..." aria-describedby="Isi" required></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="button" name="submit" class="btn btn-success">Tambah Data</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col" style="text-align: center; background-color:#8F3797; color:#fff">No.</th>
                                <th scope="col" style="text-align: center; background-color:#8F3797; color:#fff">Ditambahkan Oleh</th>
                                <th scope="col" style="text-align: center; background-color:#8F3797; color:#fff">Ditambahkan Pada</th>
                                <th width="400px" scope="col" style="text-align: center; background-color:#8F3797; color:#fff">Isi</th>
                                <th scope="col" style="text-align: center; background-color:#8F3797; color:#fff">Diedit Oleh</th>
                                <th scope="col" style="text-align: center; background-color:#8F3797; color:#fff">Diedit Pada</th>
                                <th scope="col" style="text-align: center; background-color:#8F3797; color:#fff">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            while ($data_tentang_kami = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                echo "<td>" . $no++ . "</td>";
                                echo "<td>" . $data_tentang_kami['nm_user'] . "</td>";
                                echo "<td>" . $data_tentang_kami['created_at'] . "</td>";
                                echo "<td>" . $data_tentang_kami['isi'] . "</td>";
                                echo "<td>" . $data_tentang_kami['nm_user'] . "</td>";
                                echo "<td>" . $data_tentang_kami['edited_at'] . "</td>";
                                echo "<td><a href='edit.php?id=$data_tentang_kami[id_tentang_kami]' class='btn btn-sm btn-warning'>Ubah</a> | <a href='delete.php?id=$data_tentang_kami[id_tentang_kami]' class='btn btn-sm btn-danger'>Hapus</a></td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <!-- Bootstrap JS -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>