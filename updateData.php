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



        <form action="" method="POST">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="" class="form-control" id="nama" name="id" placeholder="id....">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="" class="form-control" id="nama" name="nama" placeholder="masukan nama anda....">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" rows="3" name="alamat"
                    placeholder="dimana anada tinggal..."></textarea>
            </div>
            <div class="mb-3">
                <label for="umur" class="form-label">Umur</label>
                <input type="" class="form-control" id="umur" name="umur" placeholder="umur berapa sekarang....">
            </div>
            <div class="mb-3">
                <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                <input type="" class="form-control" id="jenisKelamin" name="jenisKelamin"
                    placeholder="apa jenis kelamin anda....">
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