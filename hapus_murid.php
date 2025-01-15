<?php
require_once "db.php";

//ID siswa yang akan dihapus

$id = $_GET['id'];
//Query untuk mengahapus data
$sql = " DELETE FROM kontak_murid WHERE id = $id ";
if (mysqli_query($conn, $sql)) {
    echo "Data berhasil dihapus";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
header("Location:index.php?page=murid");
