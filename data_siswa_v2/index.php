<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Siswa</title>
    <link rel="icon" href="assets/misato.jpg" type="image/x-icon"> 

</head>
<style>
    body {
        font-family: Arial;
        /* background-color: rgb(253, 235, 208); */
    }
    
    table {
        text-align: center;
        padding: 0;
        border-collapse: collapse;
    }
    
    td, th {
        border: 2px solid black;
        padding: 8px; /* biar teks gak mepet */
    }

    .wrapper {
        justify-items: center;
        padding-top: 35dvh;
    }

    .tambah {
    }
    
    .wrapper_tambah {
        padding: 20px;
        text-align: center;
    }

    thead {
        background-color: rgb(220, 20, 60);
        color: white;
    }
    
    tbody {
        background-color: rgb(247, 202, 201);
    }

    a {
        color: rgb(220, 20, 60);
    }

    a:hover {
        color: rgb(250, 177, 47);
    }
</style>
<body>
    <div class="wrapper">
        <table>
            <thead>
                <tr>   
                    <td>NIS</td>
                    <td>Nama</td>
                    <td>Kelas</td>
                    <td>jurusan</td>
                    <td>Alamat</td>
                    <td>tanggal Lahir</td>
                    <td>No HP</td>
                    <td>Email</td>
                    <td>Hapus</td>
                    <td>Edit</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    include("db.php");

                    $sql = "SELECT * FROM data_siswa";
                    $result = $connect->query($sql);

                    while($row = $result->fetch_assoc()){
                        echo "<tr>";
                        echo "<td>$row[nis]</td>";
                        echo "<td>$row[nama]</td>";
                        echo "<td>$row[kelas]</td>";
                        echo "<td>$row[jurusan]</td>";
                        echo "<td>$row[alamat]</td>";
                        echo "<td>$row[tanggal_lahir]</td>";
                        echo "<td>$row[no_hp]</td>";
                        echo "<td>$row[email]</td>";
                        echo "<td><a href='hapus.php?nis=$row[nis]'>hapus</a></td>";
                        echo "<td><a href='edit.php?nis=$row[nis]'>edit</a></td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
    <div class="wrapper_tambah">
        <a href="tambah.php" class="tambah">isi data</a>
    </div>
</body>
</html>