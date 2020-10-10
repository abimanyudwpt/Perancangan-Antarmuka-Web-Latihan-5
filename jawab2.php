<?php
    $a=$_POST['satu'];
    $b=$_POST['dua'];
    $c=$_POST['tiga'];

    echo "$a <br>";
    echo "$b <br>";
    for ($i=0; $i<$c-2; $i++) { 
        $beda= $b - $a;
        $hasil= $b + $beda;
        echo "$hasil <br>";
        $a = $b;
        $b = $hasil;
    }
?>