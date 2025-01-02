

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
      <h1>Resultado de Raiz.</h1>
    </head>
    <section>
      <form action=<?=$_SERVER['PHP_SELF']?> method="get">
        <label for="numero1"> Numero :</label>
        <input type="text" name="numero1" id="numero1" value="<?=$_GET['numero1'] ?? ""?>">
        <input type="submit" value="Analisar">
      </form>
     </section>
        <?php

          if ($_SERVER['REQUEST_METHOD'] === 'GET') {
               // The request is using the POST method

            if(isset($_GET['numero1'])){
              $num1 =  filter_input(INPUT_GET, 'numero1', FILTER_SANITIZE_SPECIAL_CHARS);

              $resultadoRaizQuadrada = sqrt($num1);
              // https://algoritmosurgentes.com/algoritmo-em-linguagem-php/raiz-cubica-em-portugues
              $resultadoRaizCubica = pow($num1,1.0/3.0);;
              // https://www.php.net/manual/pt_BR/language.types.string.php
              print  <<< NUM
                   <section> 
                      <p>Raiz Quadrada é : {$resultadoRaizQuadrada} </p> 
                      <p>Raiz Cubica é : {$resultadoRaizCubica}</p>
                   </section>
                   NUM; 
            }
          }
    ?>
   
      
 
   
  </body>
</html>