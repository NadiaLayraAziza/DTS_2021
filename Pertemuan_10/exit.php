<?php
    for($i = 1; $i <= 6; $i++) {
        echo '<br /> Sebelum exit. ';
        if ($i == 3) {
            exit ();
        }
        echo 'Setelah exit. Nilai i : '.$i;
    }
    
    echo '<br /><br />';
    echo 'Kode setelah perulangan.';
?>