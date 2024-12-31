<?php
// Koneksi ke database
$host = 'localhost';
$dbname = 'rmvpvicw_rental	';
$username = 'rmvpvicw_admin';
$password = 'AdminPassword_69';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
