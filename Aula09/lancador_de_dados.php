<?php

$method = $_SERVER["REQUEST_METHOD"];

if ($method == "POST") {

	$minimo = $_POST["minimo"];
	$maximo = $_POST["maximo"];

	$sorteado = rand($minimo, $maximo);

}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Lançador de Dados</title>
</head>
<body>

<?php if ($method == "GET") {?>

	<form method="POST">
		<p>
			<label>Mínimo: </label> <input name="minimo" type="number" />
		</p>

		<p>
			<label>Máximo: </label> <input name="maximo" type="number" />
		</p>

		<input type="submit" />
	</form>

	<?php } else { ?>

	<h1>
		Valor sorteado:
		<?php echo $sorteado; ?>
	</h1>

	<?php } ?>
</body>
</html>
