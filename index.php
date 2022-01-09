<?php
//memanggil file functions.php
require 'functions.php';

//memanggil function query pengambilan data pada table mahasiswa
//lalu ditampung kedalam variable login
$login = query("SELECT * FROM login");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Lalu Ardiat Arip</title>
</head>

<body>
    <div class="container">
        <div class="container-fluid">
            <h1 class="text-center">Daftar karyawan</h1>
            <button type="button" class="btn btn-dark">
                <a href="tambah.php">Add</a>
            </button>

            <br>
            <table class="table table-dark table-striped">
                <tr>
                    <th>
                        No.
                    </th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>Position</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>

                <?php foreach ($login as $item) : ?>
                    <tr>
                        <td><?= $item["id"] ?></td>
                        <td><?= $item["nama"] ?></td>
                        <td><?= $item["email"] ?></td>
                        <td><?= $item["address"] ?></td>
                        <td><?= $item["gender"] ?></td>
                        <td><?= $item["position"] ?></td>
                        <td><?= $item["status"] ?></td>
                        <td><a class="btn btn-danger" href="hapus.php?id=<?= $item["id"]; ?>" onclick="return confirm('yakin?')">Hapus</a></td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>
</body>

</html>