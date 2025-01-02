
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Curso php</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
  </head>
  <body>
    <head>
      <!-- https://github.com/gustavoguanabara/php-moderno/blob/main/downloads/modelo-css/style.css -->
      <h1>Resultado</h1>
    </head>
    <section>
		<?php
			// https://www.php.net/manual/en/function.filter-input.php
			// https://stackoverflow.com/questions/359047/detecting-request-type-in-php-get-post-put-or-delete

			if ($_SERVER['REQUEST_METHOD'] === 'GET') {
			     // The request is using the POST method

				if(isset($_GET['numero'])){
					$dolar = 5.9;
					$num =  filter_input(INPUT_GET, 'numero', FILTER_SANITIZE_SPECIAL_CHARS);
					$resultado = $num / $dolar ;
					echo "Valor em reais:" . number_format($num, 2,",") . "<br>";
					echo "Valor em dolar : ". $resultado. "<br>";
				}else{
					echo "opcao invalida";
			}

			}
		?>
		<a href="javascript:history.go(-1)">Voltar</a>
    </section>
   
  </body>
</html>