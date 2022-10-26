<?php
    $n1 = 20;
    $n2 = 50;
  
    /* ** operadores de comparación**  
        == igualidad
        > mayor que
        >= mayor o igual que
        < menor que
        <= menor o igual que    
        
        && operador y
        or operador o
     */
    if($n1==$n2){
        //codigo que se resuelve si la respuesta a la pregunta es positiva
        echo "ambos valores son iguales";
    }else{
        if($n1>$n2){
            echo $n1." es mayor que ".$n2;
        }else{
            echo $n2." es mayor que ".$n1;
        }
        //echo "los valores son diferentes";
    }



?>