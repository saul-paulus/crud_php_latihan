<?php
require 'connection.php';


// Mengambil id yang dilemparkan di url
$id = $_GET['id'];

// Menampilkan data yang akan diedit
$resQuery = mysqli_query($db_conn, "SELECT * FROM biodata WHERE id = '$id' LIMIT 1");
$resData = mysqli_fetch_all($resQuery, MYSQLI_ASSOC)['0'];

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

    <title>Ubah Data</title>
</head>

<body>

    <div class="container col-4">

        <h1 class=" p-3 ">Form Ubah Data</h1>



        <form action="updateData.php" method="POST">
            <div class="mb-3">
                <input type="hidden" class="form-control" id="nama" name="id" placeholder="id...."
                    value="<?= $resData['id']; ?>">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="" class="form-control" id="nama" name="nama" placeholder="masukan nama anda...."
                    value="<?= $resData['nama']; ?>">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input class="form-control" id="alamat" rows="3" name="alamat" placeholder="dimana anada tinggal..."
                    value="<?= $resData['alamat']; ?>"></input>
            </div>
            <div class="mb-3">
                <label for="umur" class="form-label">Umur</label>
                <input type="" class="form-control" id="umur" name="umur" placeholder="umur berapa sekarang...."
                    value="<?= $resData['umur']; ?>">
            </div>
            <div class="mb-3">
                <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                <input type="" class="form-control" id="jenisKelamin" name="jenisKelamin"
                    placeholder="apa jenis kelamin anda...." value="<?= $resData['jenis_kelamin']; ?>">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Apakah Anda yakin?</label>
            </div>
            <a class="btn btn-warning" href="index.php">Kembali</a>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

</html>