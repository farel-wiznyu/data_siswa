<?php

include('db.php');

$nis = $_GET['nis'];
$sql = "SELECT * FROM data_siswa WHERE NIS='$nis'";
$result = $connect->query($sql);
$row = $result->fetch_assoc();

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

        a {
            color:rgb(220, 20, 60) ;
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
    <form action="edit_proses.php?nis=<?= $nis ?>" method="POST">
        <label for="nama">Nama:</label><br>
        <input type="text" name="nama" value="<?php echo $row['nama'] ?>"><br><br>
        
        <label for="kelas">Kelas:</label><br>
        <input type="number" name="kelas" value="<?php echo $row['kelas'] ?>"><br><br>    
        
        <label for="jurusan">Jurusan:</label><br>
        <input type="text" name="jurusan" value="<?php echo $row['jurusan'] ?>"><br><br>
        
        <label for="alamat">Alamat:</label><br>
        <input type="text" name="alamat" value="<?php echo $row['alamat'] ?>"><br><br>
        
        <label for="tanggal_lahir">Tanggal Lahir:</label><br>
        <input type="date" name="tanggal_lahir" value="<?php echo $row['tanggal_lahir'] ?>"><br><br>
        
        <label for="no_hp">No hp:</label><br>
        <input type="text" name="no_hp" value="<?php echo $row['no_hp'] ?>"><br><br>
        
        <label for="email">Email:</label><br>
        <input type="text" name="email" value="<?php echo $row['email'] ?>"><br><br>

        <button type="submit" name="submit">submit</button>
    </form>

    <br><br>

    <a href="index.php">kembali</a>
</body>
</html>