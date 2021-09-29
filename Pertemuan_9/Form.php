<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
</head>
<body>
    <form action="Formulir.php" method="post">
        <h1>Pendaftaran Mahasiswa PAPSI-ITS</h1>
        <p>
            Nama Mahasiswa : <br>
            <input type="text" name="namalengkap" width="75" placeholder="Isi dengan nama lengkap Anda">
        </p>
        <p>
            Jenis Kelamin : <br>
            <input type="radio" id="man" value="Laki-laki" name="jeniskelamin"><label for="man">Laki-laki</label>
            <input type="radio" id="woman" value="Perempuan" name="jeniskelamin"><label for="woman">Perempuan</label>
        </p>
        <p>
            Alamat rumah : <br>
            <textarea name="alamat" rows="3" cols="50" placeholder="Isi dengan alamat lengkap Anda"></textarea>
        </p>
        <p>
            Pendidikan Terakhir : <br>
            <select name="pendidikan">
                <option value="">- Pilih Pendidikan -</option>
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
                <option value="D3">D3</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
            </select>
        </p>
        <p>
            Tahun Lulus : <br>
            <select name="tahun_lulus">
                <?php
                    for($tahun=2017; $tahun>=1945; $tahun -- ) {
                        echo '<option value="'.$tahun.'">'.$tahun.'</option>';
                    }
                ?>
            </select>
        </p>
        <p>
            Gelombang Pendaftaran : <br>
            <input type="radio" id="gelombang1" value="Gelombang1" name="Gelombang"><label for="Gelombang1">Gelombang 1</label>
            <input type="radio" id="gelombang2" value="Gelombang2" name="Gelombang"><label for="Gelombang2">Gelombang 2</label>
            <input type="radio" id="gelombang3" value="Gelombang3" name="Gelombang"><label for="Gelombang3">Gelombang 3</label>
        </p>
        <p>
            <input type="submit" value="Kirim" name="submit">
        </p>
    </form>
</body>
</html>