<?php
require 'connection.php';

$id = $_GET['id'];

$resHapusData = mysqli_query($db_conn, "DELETE FROM biodata WHERE id='$id'");


if ($resHapusData) {
    header('location:index.php');
} else {
    echo "Data gagal dihapus";
}