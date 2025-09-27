<?php

include("db.php");

if(isset($_POST['submit'])){
    // $nis = $_POST['nis']; nis gausah, soalnya me udah auto increment hehe
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];

    $insert = "INSERT INTO data_siswa (nama, kelas, jurusan, alamat, tanggal_lahir, no_hp, email) VALUES ('$nama', '$kelas', '$jurusan', '$alamat', '$tanggal_lahir', '$no_hp', '$email')";


    $result = $connect->query($insert);

    if($result === True){
        // echo "<script>window.location.href = 'data_siswa.php';</script>";
        header("location: index.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: 'Arial';
            background-color: white;
        }

        input{
            border-radius: 20px;
            outline: 2px solid rgb(220, 20, 60);
            border: none;  
            /* background-color: rgb(253, 235, 208); */
            width: 300px;  
            height: 40px;
            padding-left: 20px;
        }
        
        button {
            padding: 10px;
            outline: 2px solid rgb(220, 20, 60);
            border-radius: 30px;
            border: none;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <label for="nama">Nama:</label><br>
        <input type="text" name="nama"><br><br>
        
        <label for="kelas">Kelas:</label><br>
        <input type="number" name="kelas"><br><br>    
        
        <label for="jurusan">Jurusan:</label><br>
        <input type="text" name="jurusan"><br><br>
        
        <label for="alamat">Alamat:</label><br>
        <input type="text" name="alamat"><br><br>
        
        <label for="tanggal_lahir">Tanggal Lahir:</label><br>
        <input type="date" name="tanggal_lahir"><br><br>
        
        <label for="no_hp">No hp:</label><br>
        <input type="text" name="no_hp"><br><br>
        
        <label for="email">Email:</label><br>
        <input type="text" name="email"><br><br>

        <button type="submit" name="submit">submit</button>
    </form>
</body>
</html>