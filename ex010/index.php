

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
      <h1>Soma de numeros.</h1>
    </head>
    <section>
      <form action=<?=$_SERVER['PHP_SELF']?> method="get">
        <label for="numero1"> Numero 1:</label>
        <input type="text" name="numero1" id="numero1" value="<?=$_GET['numero1'] ?? ""?>">
       <label for="numero2"> Numero 2:</label>
        <input type="text" name="numero2" id="numero2" value="<?=$_GET['numero2']?? ""?>">
        <input type="submit" value="Somar">
      </form>
     </section>
        <?php

      if ($_SERVER['REQUEST_METHOD'] === 'GET') {
           // The request is using the POST method

        if(isset($_GET['numero1'])&& isset($_GET['numero2'])){
          $num1 =  filter_input(INPUT_GET, 'numero1', FILTER_SANITIZE_SPECIAL_CHARS);
          $num2 =  filter_input(INPUT_GET, 'numero2', FILTER_SANITIZE_SPECIAL_CHARS);

          $resu = (float)$num1 + (float)$num2;
          // https://www.php.net/manual/pt_BR/language.types.string.php
          print  <<< SOMA
               <section> 
                  <p>A soma entre é : {$resu} </p> 
               </section>
               SOMA; 
        }
      }
    ?>
   
      
 
   
  </body>
</html>