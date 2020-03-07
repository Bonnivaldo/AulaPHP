<?php
	$vlr = $_POST['vlr'];

    if($vlr>0){
        echo "Valor Positivo";
    }else{
        if($vlr<0){
            echo "Valor Negativo";
        }else{
            echo "Igual a Zero";
        }
    }
    
?>