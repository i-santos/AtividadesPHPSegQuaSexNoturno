<?php 

$method = $_SERVER["REQUEST_METHOD"];

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Request Method</title>
</head>
<body>

	<?php if ($method == "GET") { ?>
	
		<h1>Bem-vindo!</h1>
	<?php } else { ?>
		<h1>Request feito com sucesso</h1>
	<?php } ?>

</body>
</html>