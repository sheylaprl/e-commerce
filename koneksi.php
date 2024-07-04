<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'femme_fatale';

// Create connection
$koneksi = new mysqli($host, $user, $password, $database);

// // Check connection
// if ($koneksi->connect_error) {
//   die("Connection failed: " . $koneksi->connect_error);
// }
// echo "Connected successfully";
// ?>