<?php 

include("db.php");
$nis = $_GET['nis'];

$sql = "DELETE FROM data_siswa WHERE nis='$nis'";

if ($connect->query($sql) === TRUE) {
    echo "<script>alert('Hapus Data Berhasil Vro')</script>";
    echo "<script>window.location.href='index.php';</script>";
} else {
    echo "<script>alert('Hapus Data Gagal Vro')</script>";
    echo "<script>window.location.href='index.php';</script>";
}

?>