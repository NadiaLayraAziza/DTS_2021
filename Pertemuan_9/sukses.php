<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registrasi Berhasil</title>
</head>

<body>
    <form>
    <h1 align="center">Pendaftaran Kamu Berhasil!</h1>
    <table border="0" style="padding-left: 100px;">
    <tr>
        <td width="165">Nama Lengkap</td>
        <td width="250">:<strong><?php echo " ". $_GET["nama_lengkap"]; ?></strong></td>
    </tr>
    <tr>
        <td>TTL</td>
        <td>:<strong><?php echo " ". $_GET["tempat_lahir"];?>, <?php echo " ". $_GET["tanggal_lahir"];?></strong></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:<strong><?php echo " ". $_GET["jenis_kelamin"];?></strong></td>
    </tr>
    <tr>
        <td>Alamat Lengkap</td>
        <td>:<strong><?php echo " ". $_GET["alamat"];?></strong></td>
    </tr>
    <tr>
        <td>E-mail</td>
        <td>:<strong><?php echo " " .$_GET["email"];?></strong></td>
    </tr>
    <tr>
        <td>No.HP</td>
        <td>:<strong><?php echo " ". $_GET["no_hp"];?></strong></td>
    </tr>
</table>
    </form>   
</body>

</html>