<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "ta_pbw_v2";
$conn = mysqli_connect($server, $user, $pass, $database);
if (!$conn) {
    die("Koneksi ke Database Gagal: " . mysqli_connect_error());
}
