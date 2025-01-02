

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
      <h1>Salario minimo calculo</h1>
    </head>
    <section>
      <form action=<?=$_SERVER['PHP_SELF']?> method="get">
        <label for="salario"> Salario valor:</label>
        <input type="text" name="salario" id="salario" value="<?=$_GET['salario'] ?? ""?>">
        <input type="submit" value="Analisar">
      </form>
     </section>
      <section> 
        <?php

        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
             // The request is using the POST method

          if(isset($_GET['salario'])){
            $salario =  filter_input(INPUT_GET, 'salario', FILTER_SANITIZE_SPECIAL_CHARS);
            $salarioMinimo = 1380;

            $resultado = (int)((float)$salario / (float)$salarioMinimo);
            $resto = (float)$salario % (float)$salarioMinimo;

            $resultadoResto = "E sobra de $resto reais";
            // https://www.php.net/manual/pt_BR/language.types.string.php
            print "<p>Voce ganhar  {$resultado}  salarios minimo." . ($resto > 0 ? $resultadoResto : "") ."</p>"; 
                        
          }
        }
    ?>
   
     </section>  
 
   
  </body>
</html>