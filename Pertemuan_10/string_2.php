<?php 
    $nama = 'Aira'; 
    $hobi = 'Badminton'; 

    $single_quoted = 'Single Quoted: Nama saya adalah $nama, dan hobi saya $hobi...^_^';
    $double_quoted = "Double Quoted: Name saya adalah $nama, dan hobi saya $hobi...^_^"; 

    echo $single_quoted; echo "<br>"; 
    echo $double_quoted; echo "<br>"; 

    $alternatif_single_quoted = 'Single Quoted: Name saya adalah '.$nama.', dan hobi saya '.$hobi.'...^_^';
    echo $alternatif_single_quoted; echo "<br>"; 
?>