<?php

$method = $_SERVER["REQUEST_METHOD"];

if($method == "POST") {

	$minimo = $_POST["minimo"];
	$maximo = $_POST["maximo"];
	$nDezenas = $_POST["nDezenas"];
	
	$array_dezenas = array();
	
	for($i = 0; $i < $nDezenas; $i++) {
		
		$contador = 0;
		for($existe = true; $existe == true; $contador++) {
			$dezena = rand($minimo, $maximo);
			
			// CORREÇÃO: ao invés de usar 'array_search', usar 'in_array' para procurar um valor em um array
			if (in_array($dezena, $array_dezenas) == false) {
				$existe = false;
				$array_dezenas[] = $dezena;
			}
		}
		
	}
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Loteria</title>
</head>
<body>
	<a href="index.html">Voltar</a>
	<h1>Loteria</h1>
	<form method="POST">
		<p>
			<label>Mínimo: </label> <input type="number" name="minimo" />
		</p>
		<p>
			<label>Máximo: </label> <input type="number" name="maximo" />
		</p>
		<p>
			<label>Números de dezenas sorteadas: </label> <input type="number"
				name="nDezenas" />
		</p>
		<input type="submit" value="Sortear" />
	</form>
	
	<?php if($method == "POST") {?>
	<h2>Resultado:</h2>
	
	<?php echo implode(" | ", $array_dezenas); ?>
	
	<?php } ?>
	
</body>
</html>
