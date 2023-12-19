<!DOCTYPE html>
<html>
<head>
<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <link rel="stylesheet" href="styles.css">
</head>

</head>

<body>
    <header>
        <h3>Pendaftaran Siswa Baru</h3>
        <h1>SMK Coding</h1>
        <a href="login/login.php">login siswa</a>
        <a href="login/login.php">login guru</a>
    </header>

    <h4>Menu</h4>
    <nav>
        <?php if(isset($_GET['status'])): ?>
            <p>
                <?php
                    if($_GET['status'] == 'sukses'){
                        echo "Pendaftaran siswa baru berhasil!";
                    } else {
                        echo "Pendaftaran gagal!";
                    }
                ?>
            </p>
        <?php endif; ?>
        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">Pendaftar siswa</a></li>
            <li><a href="formguru/index.php">pendaftaran guru</a><li>
        </ul>
    </nav>

    </body>
</html>