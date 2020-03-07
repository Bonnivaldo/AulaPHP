<?php
	$nt1 = $_POST['nt1'];
	$nt2 = $_POST['nt2'];
	$nt3 = $_POST['nt3'];
	$nt4 = $_POST['nt4'];

	$media = ($nt1 + $nt2 + $nt3 + $nt4)/4;

	if($media <= 5) {
		echo "A média é: $media \n";
		echo "O aluno foi REPROVADO.";
	}else{
		if($media >= 7){
			echo "A média é: $media \n";
			echo "O aluno foi APROVADO.";
		}else{
			echo "A média é: $media \n";
			echo "O aluno esta de RECUPERAÇÃO.";
		}
	}
?>