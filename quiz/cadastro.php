<?php

include("conexao.php");
	
	$nome=$_POST['nome'];
	$resposta=$_POST['questao1'];

	
	$sql="INSERT INTO questoes(nome,  questao1)
	VALUES ('$nome', '$resposta')";
	if(mysqli_query($conexao, $sql)){
		header("Location: index.html");
	}else{
		echo "Erro". mysqli_connect_error($conexao);
	}
	
	mysqli_close($conexao);
?>