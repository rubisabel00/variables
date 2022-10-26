<?php
    $n1= $_GET['n1'];
    $n2= $_GET['n2'];
    $n3= $_GET['n3'];

    if($n1>$n2){
        if($n1>$n3){
            echo $n1. " es mayor que ".$n2." y ".$n3;
        }else{
            echo $n3. " es mayor que ".$n1." y ".$n2;
        }
    }else{
        if($n2>$n3){
            echo $n2. " es mayor que ".$n1." y ".$n3;
        }else{
            echo $n3. " es mayor que ".$n1." y ".$n2;
        }
    }
?>