<?php

// nama server
$db_server = 'localhost';
$db_user = 'root';
$db_password = '02081998';
$db_namaDb = 'mhs_db';

// Membuat koneksi ke databases
$db_conn = mysqli_connect($db_server, $db_user, $db_password, $db_namaDb);

// Memeriksa apakah koneksi telah terhubung / gagal
if (!$db_conn) {
    die("koneksi gagal:" . mysqli_connect_error());
}