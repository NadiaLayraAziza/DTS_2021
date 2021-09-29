<?php 
    for($i = 1; $i <= 6; $i++) {
        echo '<br /> Sebelum continue. ';
        if($i == 3) {
            continue;
        }
        echo 'Setelah continue. Nilai i : '.$i;
    }

    echo '<br /><br />';
    echo 'Kode setelah perulangan.';
?>