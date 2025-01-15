<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="bs/css/bootstrap.min.css" rel="stylesheet">
    <style>
        h3 {
            margin-left: 100px;
            margin-top: 100px;
        }

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
    <h3>Halo, Selamat Datang</h3>
</body>

</html>