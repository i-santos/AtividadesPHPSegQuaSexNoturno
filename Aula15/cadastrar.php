<!DOCTYPE html>
<html>
<?php

$method = $_SERVER["REQUEST_METHOD"];

if ($method == "POST") {
	// Eu quero fazer um novo cadastro para esse usuário
	session_start();

	if ( isset($_SESSION["lista"]) == false) {
		$_SESSION["lista"] = array();
	}

	$lista = $_SESSION["lista"];

	$email = $_POST["email"];
	$senha = $_POST["senha"];

	$usuario = array();
	$usuario["email"] = $email;
	$usuario["senha"] = $senha;

	// Lógica para verificar se email já está cadastrado
	$emailCadastrado = false;
	foreach ($lista as $u) {

		if ($u["email"] == $usuario["email"]) {
			$emailCadastrado = true;
			break;
		}

	}

	// Verifica, após a lógica, se email não está cadastrado
	if ($emailCadastrado == false) {
		$lista[] = $usuario;
		$_SESSION["lista"] = $lista;
		header("Location: cadastro_sucesso.php");
		exit();
	}
}

?>

<head>
<meta charset="ISO-8859-1">
<title>Cadastro | Usuários</title>
</head>
<body>
	<a href="usuarios.php">Voltar</a>
	<h1>Cadastro de Usuário</h1>
	<form method="POST">
		<p>
			<label>E-mail: </label> <input type="email" name="email" />
		</p>
		<p>
			<label>Senha: </label> <input type="password" name="senha" />
		</p>
		<input type="submit" value="Cadastrar" />

		<?php if ( isset( $emailCadastrado ) and $emailCadastrado == true) { ?>
		<p>* Email já cadastrado. Tente novamente.</p>
		<?php } ?>

	</form>
</body>
</html>
