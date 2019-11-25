<?php

$method = $_SERVER["REQUEST_METHOD"];

if ($method == "POST") {

	$minimo = $_POST["minimo"];
	$maximo = $_POST["maximo"];
	$dados = $_POST["dados"];

}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>

<?php if ($method == "GET") { ?>

	<form method="POST">
		<p>
			<label>Mínimo: </label> <input type="number" name="minimo" />
		</p>
		<p>
			<label>Máximo: </label> <input type="number" name="maximo" />
		</p>
		<p>
			<label>Nº de dados: </label> <input type="number" name="dados" />
		</p>
		<input type="submit" />
	</form>

	<?php } else {?>

	<h1>Valores sorteados:</h1>

	<?php for($i = 0; $i < $dados; $i++) { ?>

	<h3>
	<?php echo rand($minimo, $maximo);	?>
	</h3>

	<?php } ?>

	<?php } ?>

</body>
</html>
