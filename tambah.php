<?php
require 'functions.php';

//memeriksa apakah tombol submit telah ditekan atau belum
if (isset($_POST["submit"])) {
    //jika sudah ditekan dijalankan function tambah
    if (tambah($_POST) > 0) {
        echo "berhasil";
    } else {
        echo "gagal!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css.css">
    <title>Tambah</title>
</head>

<body>
    <div class="container">
        <div class="raw">
            <div class="col">
                <h1 class="text-center">Tambah karyawan</h1>
                <form class="asal_tujuan" action="" method="post">
                    <ul>
                        <li>
                            <label for="nama">Nama : </label>
                            <input type="text" name="nama">
                        </li>
                        <li>
                            <label for="email">Email : </label>
                            <input type="text" name="email">
                        </li>
                        <li>
                            <label for="nim">Address: </label>
                            <input type="text" name="address">
                        </li>
                        <li>
                            <label for="jurusan">Gender : </label>
                            <input type="text" name="gender">
                        </li>
                        <li>
                            <label for="email">Position : </label>
                            <input type="text" name="position">
                        </li>
                        <li>
                            <label for="status">Setatus : </label>
                            <input type="text" name="status">
                        </li>
                        <button type="submit" name="submit">
                            Tambah Data
                        </button>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</body>

</html>