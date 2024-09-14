<?php
$hosname = "localhost";
$dbName = "binus";
$password = "";
$username = "root";

$koneksi  = new mysqli($hosname,  $username,  $password, $dbName);
// Check connection
if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}
echo "Connected successfully";
