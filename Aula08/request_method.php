<?php

$method = $_SERVER["REQUEST_METHOD"];

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>

	<?php if( $method == "GET" ) {?>
	
		<h1>Bem-vindo!</h1>
		<p>Essa é a página inicial do site.</p>
		<form>
			
		</form>
	
	<?php } else { ?>
	
		<h1>Request feito com sucesso!</h1>
		<p>Seus dados estão armazenados com segurança!</p>
	
	<?php } ?>

</body>
</html>