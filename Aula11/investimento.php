<?php 

$method = $_SERVER["REQUEST_METHOD"];

if ($method == "POST") {
	
	$inicial = $_POST["inicial"];
	$mensal = $_POST["mensal"];
	$meses = $_POST["meses"];
	$taxa = $_POST["taxa"];
	
	$soma = 0;
	
	for($i = 1; $i < $meses; $i++) {
		$soma = $soma + pow(1 + $taxa, $i);
	}
	
	$total = $inicial * pow(1 + $taxa, $meses) + $soma * $mensal;
	
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Calculadora de Rendimentos</title>
</head>
<body>
<a href="index.html">Voltar</a>
<h1>Calculadora de Rendimentos</h1>

<form method="POST" action="investimento.php">
	<p>
		<label>Aporte Inicial: </label>
		<input type="number" name="inicial" />
	</p>
	<p>
		<label>Aporte Mensal: </label>
		<input type="number" name="mensal" />
	</p>
	<p>
		<label>Quantidade de meses: </label>
		<input type="number" name="meses" />
	</p>
	<p>
		<label>Taxa de juro (a.m.): </label>
		<input type="number" name="taxa" step="0.0001" />
	</p>
	<input type="submit" value="Calcular" />
</form>

<?php if ($method == "POST") { ?>

	<h2>Valor total após <?php echo $meses;?> meses: R$ 
	<?php $total;?></h2>
<?php } ?>

</body>
</html>