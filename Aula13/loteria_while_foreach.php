<?php

$method = $_SERVER["REQUEST_METHOD"];

if ($method == "POST") {

	$minimo = $_POST["minimo"];
	$maximo = $_POST["maximo"];
	$nDezenas = $_POST["nDezenas"];

	$sorteados = array();

	for($i = 0; $i < $nDezenas; $i++) {

		// Trocar o for por while
		$adicionado = false;
		while($adicionado == false) {

			$dezena = rand($minimo, $maximo);

			if (in_array($dezena, $sorteados) == false) {
				$sorteados[] = $dezena;
				$adicionado = true;
			}
		}

	}
	sort($sorteados);



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
			<label>Mínimo: </label> <input type="number" name="minimo" value="1" />
		</p>
		<p>
			<label>Máximo: </label> <input type="number" name="maximo" value="60" />
		</p>
		<p>
			<label>Quantidade de dezenas: </label> <input type="number"
				name="nDezenas" value="6" />
		</p>
		<input type="submit" value="Sortear" />
	</form>

	<?php if ($method == "POST") { ?>

	<h2>Com foreach</h2>
	<?php foreach($sorteados as $valor) { ?>
	<p>
	<?php echo $valor; ?>
	</p>
	<?php } ?>

	<h2>Com for</h2>
	<?php for($i = 0; $i < $nDezenas; $i++) { ?>
	<p>
	<?php echo $sorteados[$i]; ?>
	</p>
	<?php } ?>


	<?php } ?>


</body>
</html>
