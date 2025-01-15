<?php
require_once "db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="bs/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container-fluid {
            margin-left: 50px;
        }

        .collapse {
            margin-left: 150px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item" style="margin-left: 30px;">
                        <a class="nav-link" href="guru.php">Kontak Guru</a>
                    </li>
                    <li class="nav-item" style="margin-left: 30px;">
                        <a class="nav-link" href="murid.php">Kontak Murid</a>
                    </li>
                    <li class="nav-item" style="margin-left: 30px;">
                        <a class="nav-link" href="tambah_kontak_guru.php">Tambah Kontak Guru</a>
                    </li>
                    <li class="nav-item" style="margin-left: 30px;">
                        <a class="nav-link" href="tambah_kontak_murid.php">Tambah Kontak Murid</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nomor Kontak</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = mysqli_query($conn, "select * from kontak_murid");
                if (mysqli_num_rows($query) > 0) {
                    // Eksekusi tampil
                    while ($data = mysqli_fetch_assoc($query)) {
                ?>
                        <tr>
                            <td align="center"><?= $data['id'] ?></td>
                            <td><?= $data['nama'] ?></td>
                            <td><?= $data['email'] ?></td>
                            <td><?= $data['nomor'] ?></td>
                            <td align="center">
                                <li> <a href="hapus_murid.php?id=<?= $data['id'] ?>" onclick="return confirm('Yakin Hapus?')" class="hapus">Hapus</a></li>
                            </td>
                        </tr>
                <?php
                    }
                } else {
                    echo "<tr> <td colspan = '4'> Maaf, data tidak ada </td> </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>