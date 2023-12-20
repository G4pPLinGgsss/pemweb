<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>
<head>
<head>
    <title>Pendaftaran Guru Baru | SMK Coding</title>
    <link rel="stylesheet" href="gaya3.css">
</head>

</head>

<body>
    <header>
        <h3>Guru yang sudah mendaftar</h3>
    </header>

    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Pendidikan Akhir</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM guru";
        $query = mysqli_query($conn, $sql);

        while($guru = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$guru['id']."</td>";
            echo "<td>".$guru['nama']."</td>";
            echo "<td>".$guru['alamat']."</td>";
            echo "<td>".$guru['jenis_kelamin']."</td>";
            echo "<td>".$guru['agama']."</td>";
            echo "<td>".$guru['pendidikan_akhir']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$guru['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$guru['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>