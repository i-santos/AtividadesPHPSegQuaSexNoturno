<?php

$method = $_SERVER["REQUEST_METHOD"];

if ($method == "POST") {
	$minimo = $_POST["minimo"];
	$maximo = $_POST["maximo"];
	$resultado = rand($minimo, $maximo);
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Lançador de Dados V2</title>
</head>
<body>
	<a href="index.html">Voltar</a>
	<h1>Lançador de Dados v2</h1>
	<form method="POST">
		<p>
			<label>Mínimo: </label> <input name="minimo" type="number" />
		</p>
		<p>
			<label>Máximo: </label> <input name="maximo" type="number" />
		</p>
		<input type="submit" />
	</form>
	

	<?php if ($method == "POST") { ?>

	<h1>Valor Sorteado: <?php echo $resultado; ?></h1>

	<?php } ?>


</body>
</html>
