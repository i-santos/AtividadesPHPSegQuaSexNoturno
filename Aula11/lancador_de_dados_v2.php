<?php

$method = $_SERVER["REQUEST_METHOD"];

if ( $method == "POST" ) {

	$minimo = $_POST["minimo"];
	$maximo = $_POST["maximo"];
	$dados = $_POST["dados"];

} else {
	
	$minimo = 1;
	$maximo = 6;
	$dados = 1;
	
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Lançador de Dados</title>
</head>
<body>


	<form method="POST">
		<p>
			<label>Mínimo: </label> <input name="minimo" type="number" value="<?php echo $minimo; ?>" />
		</p>
		<p>
			<label>Máximo: </label> <input name="maximo" type="number" value="<?php echo $maximo; ?>" />
		</p>
		<p>
			<label>Quantidade de dados: </label> <input name="dados"
				type="number" value="<?php echo $dados; ?>"/>
		</p>

		<input type="submit" />
	</form>
	
	<?php 	
	if($method == "POST") {
		echo "<h1>Resultados:</h1>";
		for($i = 0; $i < $dados; $i++) {
			echo "<p>";
			$numero = rand($minimo, $maximo);
			echo $numero;
			echo "</p>";
		}
	}
	
	?>


</body>
</html>
