<?php 
    $benar = true; // TRUE 
    $salah = false; // FALSE 

    echo "benar = $benar, salah = $salah <br /><pre>"; 
    // hasil output: benar = 1, salah = 
    
    var_dump($benar);       // hasil output: bool(true) 
    var_dump($salah);       // hasil output: bool(false) 
    
    $x = "";                // string kosong dianggap false 
    var_dump($x);           // hasil output: string(0) "" 
    var_dump((bool) $x);    // hasil output: bool(false) 
    
    $x = " ";               // string dengan minimal 1 karakter adalah true; 
    var_dump($x);           // hasil output: string(1) " " 
    var_dump((bool) $x);    // hasil output: bool(true) 
    
    $x = 0;                 // integer bernilai 0 
    var_dump($x);           // hasil output: int(0) 
    var_dump((bool) $x);    // hasil output: bool(false) 
    
    $x = 1;                 // integer bernilai 1 
    var_dump($x);           // hasil output: int(1) 
    var_dump((bool) $x);    // hasil output: bool(true) 
    
    $x = 2021;              // integer bernilai selain 0 dan 1 
    var_dump($x);           // hasil output: int(2021) 
    var_dump((bool) $x);    // hasil output: bool(true) 
?> 
