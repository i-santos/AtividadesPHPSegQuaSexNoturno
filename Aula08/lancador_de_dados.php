
<?php
$method = $_SERVER["REQUEST_METHOD"];

if($method == "POST" ) {

	$min = $_POST["min"];
	$max = $_POST["max"];

	$sorteado = rand($min, $max);
}
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Lançador de Dados</title>
</head>
<body>

<?php if( $method == "GET") { ?>

	<form method="POST">
		<p>
			<label>Valor mínimo: </label> <input name="min" />
		</p>
		<p>
			<label>Valor máximo: </label> <input name="max" />
		</p>
		<input type="submit" />
	</form>

	<?php } else {?>

	<h1>
		Número Sorteado:
		<?php echo $sorteado; ?>
	</h1>

	<?php }?>
</body>
</html>
