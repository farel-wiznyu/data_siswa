<?php

include('db.php');
if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    $nis = $_GET["nis"];
    $sql = "UPDATE data_siswa SET nama='$nama', kelas='$kelas', jurusan='$jurusan', alamat='$alamat', tanggal_lahir='$tanggal_lahir', no_hp='$no_hp', email='$email' WHERE nis='$nis'";

    if ($connect->query($sql) === TRUE) {
        echo "<script>alert('Edit Berhasil Vro')</script>";
        echo "<script>window.location.href='index.php'</script>";
    } else {
        echo "<script>alert('Edit Gagal Vro')</script>";
    }
}

?>