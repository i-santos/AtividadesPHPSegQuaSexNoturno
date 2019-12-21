<?php
include("classes/usuario.class.php");
include("conexao.php");
global $link;

session_start();

$usuario = $_SESSION["usuarioLogado"];

$resultado = mysqli_query($link, "SELECT * FROM cadastro_usuarios.tarefa WHERE id_usuario = {$usuario->id}");

$tarefas = array();

if ($resultado) {

	if ($resultado->num_rows > 0) {

		while( $tarefa = mysqli_fetch_object($resultado) ) {
			$tarefas[] = $tarefa;
		}

	}

}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Home | Lista de Tarefas</title>
</head>
<body>
	<a href="logout.php">Logout</a>
	<h1>Home</h1>

	<fieldset>
		<legend>Nova Tarefa</legend>
		<form method="POST" action="adicionar.php">
			<p>
				<label>Título: </label> <input type="text" name="titulo" />
			</p>
			<input type="submit" value="Adicionar" />
		</form>
		<?php if ( isset( $_SESSION["erroAdicionarTarefa"] ) ) {?>
		<p>
		<?php echo $_SESSION["erroAdicionarTarefa"]; ?>
		</p>
		<?php } else if ( isset( $_SESSION["sucessoAdicionarTarefa"] ) ) {?>
		<p>
		<?php echo $_SESSION["sucessoAdicionarTarefa"]; ?>
		</p>
		<?php } ?>
	</fieldset>

	<h2>Suas tarefas:</h2>

	<?php foreach($tarefas as $t) { ?>
	<p><?php echo $t->titulo; ?> ( <?php echo $t->finalizada ? "Finalizada" : "Em aberto";  ?> )</p>
	<?php } ?>
</body>
</html>
