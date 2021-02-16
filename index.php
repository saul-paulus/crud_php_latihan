<?php

require 'connection.php';

//Ambil data dari tabel biodata
$resQuery = mysqli_query($db_conn, "SELECT * FROM biodata");

// ambil data dari $resQuery
$resData = mysqli_fetch_all($resQuery, MYSQLI_ASSOC);

// jika error
if (!$resQuery) {
    die("pengambilan data gagal:" . mysqli_error($db_conn));
};
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Data Mahasiswa</title>
</head>

<body>

    <div class="container">
        <h1>Data Mahasiswa Fisika</h1>

        <table class="table table-striped">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Umur</th>
                <th>Jenis Kelamin</th>
                <th>Aksi</th>
            </tr>
            <?php foreach ($resData as $dataMhs) : ?>
            <tr>
                <td></td>
                <td><?= $dataMhs['nama']; ?></td>
                <td><?= $dataMhs['alamat']; ?> </td>
                <td><?= $dataMhs['umur']; ?></td>
                <td><?= $dataMhs['jenis_kelamin']; ?></td>
                <td><a href="updateData.php" class="btn btn-warning">edit</a> <a href=""
                        class="btn btn-danger">hapus</a></td>
            </tr>
            <?php endforeach; ?>
        </table>

        <!-- Tombol untuk tambah data -->
        <a type="button" class="btn btn-primary" href="insertData.php">Tambah Data</a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

</html>