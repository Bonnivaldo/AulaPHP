<?php
	$vlr1 = $_POST['vlr1'];
	$vlr2 = $_POST['vlr2'];
    $vlr3 = $_POST['vlr3'];
    
    if ($vlr1 >= $vlr2){
        if($vlr1 >= $vlr3){
            if ($vlr2 >= $vlr3){
                echo "A ordem crescente é: $vlr3, $vlr2 e $vlr1";
            }else{
                echo "A ordem crescente é: $vlr3, $vlr3 e $vlr1";
            }
        }else{
            echo "A ordem crescente é: $vlr2, $vlr1 e $vlr3";
        }
    }else{
        if($vlr2 >= $vlr3){
           if($vlr1 >= $vlr3){
            echo "A ordem crescente é: $vlr3, $vlr1 e $vlr2";
           }else{
                echo "A ordem crescente é: $vlr1, $vlr3 e $vlr2";
           }
        }else{
            echo "A ordem crescente é: $vlr1, $vlr2 e $vlr3";
        }
    }

?>