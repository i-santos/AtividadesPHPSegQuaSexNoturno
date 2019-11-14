<?php

// Descobrir qual método foi utilizado na requisição
$method = $_SERVER["REQUEST_METHOD"];
$ehPost = $method == "POST";

if ($ehPost) {

    // Pegar números da entrada do usuário
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    // Validar números

    // Validar numero 1
    if (is_numeric($num1)) {

        // Se número 1 for válido, então validar número 2
        if (is_numeric($num2)) {

            // Se ambos números forem numéricos, verificar se $num2 é diferente de zero
            if ($num2 != 0) {

                // Se chegou até aqui, então entrada de dados é válida
                // Portanto, fazer cálculos
                $soma = $num1 + $num2;
                $sub = $num1 - $num2;
                $mult = $num1 * $num2;
                $div = $num1 / $num2;
            } else {
                // Se o $num2 for igual a zero, informar erro para usuário
                echo "O Número 2 precisa ser diferente de zero.";
            }
        } else {
            // Se o $num2 não for numérico, informar erro
            echo "O número 2 precisa ser numérico.";
        }
    } else {
        // Se o $num1 não for numérico, informar erro
        echo "O número 1 precisa ser numérico";
    }
}
?>

<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8" />
<title>Calculadora</title>
</head>
<body>
	<h1>Calculadora</h1>

	<!-- Formulário de entrada de dados -->
	<form action="" method="post">
		<p>
			<label>Número 1: </label> <input name="num1" />
		</p>
		<p>
			<label>Número 2: </label> <input name="num2" />
		</p>
		<input type="submit" value="Calcular" />
	</form>

	<!-- Mostrar resultados apenas se os valores forem válidos -->
	<?php if ( $ehPost ) { ?>
		<?php if ( is_numeric($num1) ) { ?>
			<?php if ( is_numeric($num2) ) { ?>
				<?php if ( $num2 != 0 ) {?>
	<p>Número 1: <?php echo $num1; ?></p>
	<p>Número 2: <?php echo $num2; ?></p>

	<p>Soma = <?php echo $soma; ?></p>
	<p>Sub 	= <?php echo $sub; ?></p>
	<p>Mult = <?php echo $mult; ?></p>
	<p>Div 	= <?php echo $div; ?></p>
				<?php } ?>
			<?php } ?>
		<?php } ?>
	<?php } ?>
</body>
</html>