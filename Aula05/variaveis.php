<?php

// Criar variáveis do tipo int, float, String

$num        = 10;
$numFloat   = 10.812;
$texto      = "Isso é uma string: fica entre aspas";

?>
<!doctype html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8" />
	<title>Variáveis</title>
</head>
<body>
	<h1>Variáveis</h1>
	
	<p>Int: <?php var_dump($num)?></p>
	<p>Float: <?php var_dump($numFloat)?></p>
	<p>String: <?php var_dump($texto)?></p>
</body>
</html>