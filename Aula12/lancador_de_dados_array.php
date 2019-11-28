<?php 

$method = $_SERVER["REQUEST_METHOD"];

if ($method == "POST") {
	
	$minimo = $_POST["minimo"];
	$maximo = $_POST["maximo"];
	$nDados = $_POST["nDados"];
	$resultados = array();
	
	for($i = 0; $i < $nDados; $i++) {
		
	 	$resultados[] =	rand($minimo, $maximo);
		
	}
	
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Lançador de Dados Com Array</title>
</head>
<body>
<a href="/AtividadesPHP/Aula12/">Voltar</a>
<h1>Lançador de Dados Com Array</h1>

<?php if ($method == "GET") { ?>

	<form method="POST">
		<p>
			<label>Mínimo: </label>
			<input type="number" name="minimo" />
		</p>
		<p>
			<label>Máximo: </label>
			<input type="number" name="maximo" />
		</p>
		<p>
			<label>Quantidade de Dados: </label>
			<input type="number" name="nDados" />
		</p>
		<input type="submit" value="Lançar Dados" />
	</form>

<?php } else { ?>

	<h2>Com implode:</h2>
	<?php echo implode(" | ", $resultados); ?>
	
	<h2>Com for:</h2>
	<?php for($i = 0; $i < $nDados; $i++) { ?>
	
		<p>Dado <?php echo ($i + 1); ?>: <?php echo $resultados[$i]; ?></p>
	
	<?php } ?>

<?php } ?>

</body>
</html>