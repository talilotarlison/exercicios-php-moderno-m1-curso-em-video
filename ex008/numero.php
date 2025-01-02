
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
				// https://docs.awesomeapi.com.br/api-de-moedas
			

					$url = 'https://economia.awesomeapi.com.br/last/USD-BRL';

					// Obtém o conteúdo do arquivo JSON
					$json = file_get_contents($url);

					// Decodifica o JSON para um array associativo
					$data = json_decode($json, true);

					// Exibe os dados
					// print_r($data["USDBRL"]);
			?>

			<h1><?= "Converter de {$data["USDBRL"]["name"]}"?></h1>

			<?php
				if ($_SERVER['REQUEST_METHOD'] === 'GET') {

				     // The request is using the POST method

					if(isset($_GET['numero'])){
						$dolar = $data["USDBRL"]["high"];
						$num =  filter_input(INPUT_GET, 'numero', FILTER_SANITIZE_SPECIAL_CHARS);
						$resultado = $num / $dolar;
						// biblioteca intl do php precisa ativar
						// https://www.php.net/manual/en/numberformatter.formatcurrency.php
						
						$padrao =  numfmt_create( 'pt_BR', NumberFormatter::CURRENCY );

						echo "Valor em ". $data["USDBRL"]["codein"]. ":". number_format($num, 2,",",'.') ."<br>";
						echo "Valor em {$data["USDBRL"]["code"]} : ". number_format($resultado, 2,",",'.') . "<br>";

						echo " Cotação ralizada na data: {$data["USDBRL"]["create_date"]}". "<br>";

						echo "Valor em {$data["USDBRL"]["codein"]} : ". numfmt_format_currency($padrao,$num,"BRL") . "<br>";
						echo "Valor em {$data["USDBRL"]["code"]} : ".numfmt_format_currency($padrao,$resultado,"USD")  . "<br>";
					}else{
						echo "opcao invalida";
				}

			}
		?>
		<p><a href="javascript:history.go(-1)">Voltar</a></p>
		<p><a href='javascript:document.location.href="index.html"'>Voltar</a></p>

    </section>
   
  </body>
</html>