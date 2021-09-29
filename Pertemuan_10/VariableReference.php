<?php 
    function tambahSatu(&$nilai) { 
        $nilai = $nilai + 1; 
    } 

    $a = 5; 
    tambahSatu($a); 
    echo 'nilai a : '.$a; 
?> 
