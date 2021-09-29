<?php
    $namalengkap = $_POST['namalengkap'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $alamat = $_POST['alamat'];
    $pendidikan = $_POST['pendidikan'];
    $tahunlulus = $_POST['tahun_lulus'];

    if ($_POST['jeniskelamin'] == 'Laki-laki') {
        $jeniskelamin = "Laki-laki";
    } else {
        $jeniskelamin = "Perempuan";
    }

    $gelombang = $_POST['Gelombang'];

    if ($_POST['Gelombang'] == 'Gelombang1') {
        $biaya = "Rp. 7.000.000";
        $gelombang = "Gelombang 1";
    } else if ($_POST['Gelombang'] == 'Gelombang2') {
        $biaya = "Rp. 8.000.000";
        $gelombang = "Gelombang 2";
    } else if ($_POST['Gelombang'] == 'Gelombang3') {
        $biaya = "Rp. 9.000.000";
        $gelombang = "Gelombang 3";
    }

    switch ($_POST['pendidikan']) {
        case "SD" :
            $pendidikan = "SD";
            break;

        case "SMP" :
            $pendidikan = "SMP";
            break;

        case "SMA" :
            $pendidikan = "SMA";
            break;

        case "D3" :
            $pendidikan = "D3";
            break;

        case "S1" :
            $pendidikan = "S1";
            break;

        case "S2" :
            $pendidikan = "S2";
            break;

        case "S3" :
            $pendidikan = "S3";
            break;

        default :
            $pendidikan = "Tidak Dipilih";
            break;
    }
?>

<p>
Terima kasih telah melakukan pendaftaran <em>online</em>, berikut data lengkap Anda :
</p>
<table border="0">
    <tr>
        <td width="165">Nama Mahasiswa</td>
        <td width="250">:<strong><?php echo " ". $namalengkap?></strong></td>
    </tr>
    <br>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:<strong><?php echo " ". $jeniskelamin?></strong></td>
    </tr>
    <br>
    <tr>
        <td>Alamat Rumah</td>
        <td>:<strong><?php echo " ". $alamat?></strong></td>
    </tr>
    <br>
    <tr>
        <td>Pendidikan Terakhir</td>
        <td>:<strong><?php echo " ".$pendidikan?></strong></td>
    </tr>
    <br>
    <tr>
        <td>Tahun Lulus</td>
        <td>:<strong><?php echo " ".$tahunlulus?></strong></td>
    </tr>
    <br>
    <tr>
        <td>Gelombang Pendaftaran</td>
        <td>:<strong><?php echo " ".$gelombang?></strong></td>
    </tr>
    <br>
    <tr>
        <td>Biaya Pendidikan</td>
        <td>:<strong><?php echo " ".$biaya?></strong></td>
    </tr>
</table>