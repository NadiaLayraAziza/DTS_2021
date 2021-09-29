<?php 
    $nama = array("Adi", "Budi", "Carli", "Dedy"); 

    // fungsi count() untuk menghitung jumlah element dari sebuah array 
    $jumlah_element = count($nama); 

    for($i = 0; $i < $jumlah_element; $i++) { 
        echo $nama[$i].'<br />'; 
    } 
?>
