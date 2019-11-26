<?php

$method = $_SERVER["REQUEST_METHOD"];

if ($method == "POST") {

	$valorInicial = $_POST["inicial"];
	$valorMensal = $_POST["mensal"];
	$taxaJuros = $_POST["juros"];
	$qntdMeses = $_POST["meses"];

	$total = $valorInicial;

	for($contador = 0; $contador < $qntdMeses; $contador++) {
		$total = $total * (1 + $taxaJuros) + $valorMensal;
	}

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
	<form method="POST">
		<p>
			<label>Aporte Inicial: </label> <input type="number" name="inicial" />
		</p>
		<p>
			<label>Aporte Mensal: </label> <input type="number" name="mensal" />
		</p>
		<p>
			<label>Taxa de juros (a.m.): </label> <input type="number" step="0.001"
				name="juros" />
		</p>
		<p>
			<label>Quantidade de meses: </label> <input type="number"
				name="meses" />
		</p>
		<input type="submit" />
	</form>

	<?php if ($method == "POST") { ?>

		<h2>Valor final: R$ <?php echo number_format($total, 2); ?></h2>
		<h2>Valor final: R$ <?php echo $total; ?></h2>


	<?php } ?>


</body>
</html>
