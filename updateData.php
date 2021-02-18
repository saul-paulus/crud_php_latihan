<?php
require 'connection.php';

$id = $_POST['id'];

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$umur = $_POST['umur'];
$jenisKelamin = $_POST['jenisKelamin'];

$resDataUpdate = mysqli_query($db_conn, "UPDATE biodata SET nama='$nama', alamat='$alamat', umur=$umur, jenis_kelamin = '$jenisKelamin' WHERE id='$id'");

if ($resDataUpdate) {
    //Jika berhasil disimpan
    header('location:index.php');
} else {
    //jika gagal disimpan
    echo "Data gagal diubah";
}