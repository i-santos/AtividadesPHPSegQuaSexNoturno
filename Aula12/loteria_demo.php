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
			echo "[$contador] Sorteio = $dezena<br>";
			
			$search = array_search($dezena, $array_dezenas);
			echo " - " . ($search ? "true<br>" : "false<br>");
			if(!$search) {
				$existe = false;
				echo "Adicionando: $dezena <br>";
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
