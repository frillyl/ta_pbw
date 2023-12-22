<?php

include 'config.php';
session_start();

if (isset($_SESSION['email'])) {
    header("Location: dashboard.php");
    exit();
}

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = hash('sha256', $_POST['password']);

    $sql = "SELECT * FROM tb_user WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $row['email'];
        $_SESSION['nm_user'] = $row['nm_user'];
        header("Location: dashboard.php");
        exit();
    } else {
        echo "<script>alert('Email atau password Anda salah. Silakan coba lagi!')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="id">

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
            background-color: #F8F6F2;
            font-family: "Montserrat", sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            /* 100% viewport height */
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">

            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <b>
                            <h3 class="card-title text-center">MASUK</h3>
                        </b>
                        <p class="card-text text-center">Silahkan Masuk Terlebih Dahulu</p>
                        <form action="" method="POST">
                            <div class="mb-3">
                                <b><label for="inputEmail" class="form-label">Email</label></b>
                                <input type="email" name="email" class="form-control" id="inputEmail" placeholder="johndoe@mail.com" aria-describedby="Email" required>
                            </div>
                            <div class="mb-3">
                                <b><label for="inputPassword" class="form-label">Password</label></b>
                                <input type="password" name="password" class="form-control" id="inputPassword" placeholder="********" required>
                            </div>
                            <center><button name="submit" class="btn" style="background-color: #8F3797; color: #fff">Masuk</button></center>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">

            </div>
        </div>
    </div>
</body>

</html>