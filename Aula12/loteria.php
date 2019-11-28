<?php
$method = $_SERVER["REQUEST_METHOD"];

if ($method == "POST") {

    $minimo = $_POST["minimo"];
    $maximo = $_POST["maximo"];
    $nDezenas = $_POST["nDezenas"];
    $sorteados = array();

    for ($i = 0; $i < $nDezenas; $i ++) {

        // Enquanto o número sorteado existir, sortear de novo
        // Só sai do "for" se não encontrar o valor sorteado
        for ($repetido = true; $repetido;) {

            $rand = rand($minimo, $maximo);

            // CORREÇÃO: ao invés de usar 'array_search', usar 'in_array' para procurar um valor em um array
            if (in_array($rand, $sorteados) == false) {
                $sorteados[] = $rand;
                $repetido = false;
            }
        }
    }

    sort($sorteados);
} else {

    $minimo = 1;
    $maximo = 60;
    $nDezenas = 6;
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Loteria</title>
</head>
<body>
	<a href="/AtividadesPHP/Aula12/">Voltar</a>
	<h1>Loteria</h1>
	<form method="POST">
		<p>
			<label>Mínimo: </label> <input type="number" name="minimo"
				value="<?php echo $minimo; ?>" />
		</p>
		<p>
			<label>Máximo: </label> <input type="number" name="maximo"
				value="<?php echo $maximo; ?>" />
		</p>
		<p>
			<label>Quantidade de dezenas sorteadas: </label> <input type="number"
				name="nDezenas" value="<?php echo $nDezenas; ?>" />
		</p>
		<input type="submit" value="Sortear" />
	</form>
<?php if ($method == "POST") { ?>

	<h2>Dezenas Sorteadas:</h2>
	<p>
	<?php echo implode(" | ", $sorteados); ?>
	</p>

<?php } ?>

</body>
</html>