<?php
require_once "db.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$nomor = $_POST['nomor'];


$sql = "insert into kontak_murid (nama, email, nomor)
            values ('$nama', '$email', '$nomor')";

echo $sql;

$query = mysqli_query($conn, $sql);

if ($query) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Error : " . mysqli_error($conn);
}

header("Location:index.php?page=murid");
