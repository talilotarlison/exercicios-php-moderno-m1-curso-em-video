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
      <h1>Calculo aumento salario</h1>
    </head>
    <section>
      <form action=<?=$_SERVER['PHP_SELF']?> method="get">
        <label for="salario"> Seu salario atual.</label>
        <input type="number" name="salario" id="salario" value="<?=$_GET['salario'] ?? ""?>">
          <label for="nascimento">Qual sera o percentual de reajuste? <span id="reajuste">(0%)</span></label>
         <input type="range" value="<?=$_GET['aumento'] ?? 0?>" name="aumento" min="0" max="100" id="valor">
        <p>Ano atual <?= date("Y")?></p>
        <input type="submit" value="Analisar Salario">
      </form>
     </section>
       
        <?php

          if ($_SERVER['REQUEST_METHOD'] === 'GET') {
               // The request is using the POST method

            if(isset($_GET['salario'])&& isset($_GET['aumento'])){
              $salario =  (float)filter_input(INPUT_GET, 'salario', FILTER_SANITIZE_SPECIAL_CHARS);
              $aumento =  (float)filter_input(INPUT_GET, 'aumento', FILTER_SANITIZE_SPECIAL_CHARS);

              $novoSalario =  $salario + ( $salario * $aumento/100);

              // https://www.php.net/manual/pt_BR/language.types.string.php
              print  " <section> 
                          <p> Seu novo salario é R$ ". number_format($novoSalario,2, ",","." ). "</p>
                      </section>";
            }
          }
    ?>
   
  </body>
  <script src="app.js"></script>
</html>