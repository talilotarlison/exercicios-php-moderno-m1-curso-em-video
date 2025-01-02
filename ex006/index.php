
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
      <h1>Gerar numero aleatiorio entre 1 e 100</h1>
    </head>
    <section>
		<?php
			// https://www.php.net/manual/pt_BR/function.rand.php
      // random_int() -- rand()
			$num = mt_rand(0, 100);
			echo "O numero sortead o foi: ". $num . "<br>";

		?>
		<p><a href="javascript:history.go(0)">Sortear numero</a></p>
    <p><a href="javascript:document.location.reload()">Sortear numero</a></p>
		
    </section>
   
  </body>
</html>