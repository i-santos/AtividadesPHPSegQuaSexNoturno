<?php 

$method = $_SERVER["REQUEST_METHOD"];

if ($method == "POST") {
	
	$valor = $_POST["valor"];
	
	if( is_numeric($valor) ) {
		$resposta = "Valor Numérico";
	} else {
		$resposta = "Valor Não Numérico";
	}
	
	
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
	<input name="valor"/>
	<input type="submit"/>
</form>

<?php } else { ?>

<h1><?php echo $resposta; ?></h1>
<?php } ?>
</body>
</html>