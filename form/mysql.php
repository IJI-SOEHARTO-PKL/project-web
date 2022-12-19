<?php

$host = "127.0.0.1";
$user = "root";
$db = "joki";
$pass = "";

$koneksi = mysqli_connect($host, $user, $pass, $db, 3306) or die("Koneksi ke database gagal");
$query = "CREATE TABLE IF NOT EXISTS user (uid VARCHAR(255), email VARCHAR(255), password VARCHAR(255), server VARCHAR(255))";
$result = mysqli_query($koneksi, $query);
if(!$result) {
  echo "gagal membuat table";
}