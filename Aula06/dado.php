<?php

$min = isset($_GET["min"]) ? $_GET["min"] : 0;
$max = isset($_GET["max"]) ? $_GET["max"] : 0;

$num = rand($min, $max);

$historico = isset($_GET["historico"]) ? explode(", ", $_GET["historico"]) : array();
$historico[] = $num;
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Dado</title>
</head>
<body>
	<h1>Dado</h1>
	<form action="dado.php">
		<p>
			<label for="min">Menor: </label>
			<input type="number" name="min" value="<?php echo $min; ?>"/>
		</p>
		<p>
			<label for="max">Maior: </label>
			<input type="number" name="max" value="<?php echo $max; ?>"/>
		</p>
		<input type="submit" value="Jogar Dado"/>
		
		<input type="hidden" value="<?php echo implode(", ", $historico); ?>" name="historico" />
	</form>
	<p>Resultado: <?php echo $num?></p>
	<p>Histórico: <?php echo implode(", ", $historico);?></p>
</body>
</html>