<?php 
    $plat_nomor = 'b'; 

    switch($plat_nomor){
        case 'B': 
            echo 'Jakarta'; 
            break; 
        case 'D': 
            echo 'Bandung'; 
            break; 
        case 'N': 
            echo 'Malang'; 
            break; 
        default: 
        echo 'Plat kendaraan tidak diketahui.'; 
        break; 
    }
?>
