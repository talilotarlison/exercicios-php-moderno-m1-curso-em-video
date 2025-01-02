

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
      <h1>Media das Notas.</h1>
    </head>
    <section>
      <form action=<?=$_SERVER['PHP_SELF']?> method="get">
        <label for="numero1"> Nota 1:</label>
        <input type="text" name="numero1" id="numero1" value="<?=$_GET['numero1'] ?? ""?>">
       <label for="numero2">Nota 2</label>
        <input type="text" name="numero2" id="numero2" value="<?=$_GET['numero2']?? ""?>">
        <label for="numero3">Nota 3</label>
        <input type="text" name="numero3" id="numero3" value="<?=$_GET['numero3']?? ""?>">
        <input type="submit" value="Analisar">
      </form>
     </section>
        <section> 
        <?php

          if ($_SERVER['REQUEST_METHOD'] === 'GET') {
               // The request is using the POST method

            if(isset($_GET['numero1'])&& isset($_GET['numero2'])&&isset($_GET['numero3'])){
              $num1 =  filter_input(INPUT_GET, 'numero1', FILTER_SANITIZE_SPECIAL_CHARS);
              $num2 =  filter_input(INPUT_GET, 'numero2', FILTER_SANITIZE_SPECIAL_CHARS);
              $num3 =  filter_input(INPUT_GET, 'numero3', FILTER_SANITIZE_SPECIAL_CHARS);
             
              $peso1 = 3;
              $peso2 = 2;
              $peso3 = 1;

              $mediaSimples = ($num1 + $num2 + $num3)/3;

               $mediaPonderada = ($num1 * $peso1 + $num2 * $peso2 + $num3* $peso3)/($peso1+$peso2+$peso3);
              // https://www.php.net/manual/pt_BR/language.types.string.php
              print  "<p>Media Simples das notas é : {$mediaSimples} </p>";
              print  "<p>Media Ponderada das notas é : {$mediaPonderada} </p>";
            }
          }
    ?>
    </section>
   
  </body>
</html>