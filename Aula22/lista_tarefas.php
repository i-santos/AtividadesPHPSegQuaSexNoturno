<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Lista de Tarefas</title>
</head>
<body>
	<a href="index.html">Voltar</a>
	<h1>Lista de Tarefas</h1>
	<form method="POST" action="autenticar.php">
		<p>
			<label>E-mail: </label>
			<input type="email" name="email"/>
		</p>
		<p>
			<label>Senha: </label>
			<input type="password" name="senha"/>
		</p>
		<input type="submit" value="Entrar" />
		<?php if ( isset( $_SESSION["erro"] ) ) {?>
		<p><?php echo $_SESSION["erro"]; ?></p>
		<?php } ?>
	</form>
	<p>
		Não possui uma conta?<a href="cadastrar.php"> Faça seu cadastro</a>
	</p>
</body>
</html>