<?php
$hostname="localhost";
$username = "id16894603_root";
$password = "C3DTS+yUgx@+kM[-";
$bdname = "id16894603_tecknow";

$conn = mysqli_connect($hostname, $username, $password, $bdname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
  }
  header("location: index.html");