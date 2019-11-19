<?php

$method = $_SERVER["REQUEST_METHOD"];

if( $method == "POST" ) {
	
	$valor = $_POST["valor"];
	
	if( is_numeric($valor) ) {
		
		$tipo = "Numérico";
		
	} else {
		
		$tipo = "Não é numérico";
		
	}
	
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Tipo do Valor</title>
</head>
<body>

<?php if( $method == "GET") { ?>

	<form method="post">
		<label>Digite um valor: </label>
		<input name="valor" />
		<input type="submit"/>
	</form>

<?php } else {?>

	<h1>Tipo do valor informado: <?php echo $tipo; ?></h1>
	
<?php }?>
</body>
</html>