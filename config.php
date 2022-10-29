<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "db_kfcbucketive";

$koneksi = mysqli_connect($server, $user, $password, $database);

if (!$koneksi) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
