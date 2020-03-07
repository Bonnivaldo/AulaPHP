<?php
	$vlr = $_POST['vlr'];

    $tst = $vlr % 2;
   
    if($tst == 0){
        echo "Número Par";
    }else{
        echo "Número Impar";
    }
    
?>