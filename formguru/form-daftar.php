<!DOCTYPE html>
<html>
<head>
<head>
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
    <link rel="stylesheet" href="gaya1.css">
</head>

</head>

<body>
    <header>
        <h3>Formulir Pendaftaran Guru Baru</h3>
    </header>
    <form action="proses-pendaftaran.php" method="POST">
        <fieldset>
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
        </p>
        <p>
            <label for="agama">Agama: </label>
            <select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
        </p>
        <p>
            <label for="sekolah_asal">Pendidikan Terakhir: </label>
            <input type="text" name="pendidikan_terakhir" placeholder="pendidikan terakhir" />
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>
        </fieldset>
    </form>
    </body>
</html>