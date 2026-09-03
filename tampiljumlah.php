<?php
include 'koneksi.php';

$query = "SELECT * FROM data_kelas";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
</head>
<body>
    <table border = "1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Kelas</th>
                <th>Jumlah Siswa</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['nama_kelas'] . "</td>";
                    echo "<td>" . $row['jumlah'] . "</td>";
                }
            ?>
        </tbody>
    </table>

    <a href="connection.php">Koneksi PHP</a>
</body>
</html>