<?php 
    for($i = 1; $i <=6 ; $i++) { 
        echo '<br /> Sebelum break. '; 
        if ($i == 3) {
            break; 
        } echo 'Setelah break. Nilai i : '.$i; 
    }

    echo '<br /><br />'; 
    echo 'Kode setelah perulangan.'; 
?> 
