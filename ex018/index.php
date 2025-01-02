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
      <h1>Simulador de saque</h1>
    </head>
    <section>
      <form action=<?=$_SERVER['PHP_SELF']?> method="get">
        <label for="valor"> Total de dinheiro que quer sacar.</label>
        <input type="number" name="valor" id="valor" value="<?=$_GET['valor'] ?? ""?>">
        <input type="submit" value="Analisar tempo">
      </form>
     </section>
       
        <?php

          if ($_SERVER['REQUEST_METHOD'] === 'GET') {
               // The request is using the POST method

            if(isset($_GET['valor'])){
              $valorSaque =  (int)filter_input(INPUT_GET, 'valor', FILTER_SANITIZE_SPECIAL_CHARS);

              $sobra =  $valorSaque;
              // saque de 100
              $tot100 =   (int)($sobra / 100);
              $sobra = $sobra % 100;
              // saque de 50
              $tot50 =  floor($sobra / 50);
              $sobra %= 50;
              // saque de 10
               $tot10 =  (int)($sobra / 10);
               $sobra = $sobra % 10;
              // saque de 5 
               $tot5 =  (int)($sobra / 5);
               $sobra = $sobra % 5;    

              // https://www.php.net/manual/pt_BR/language.types.string.php
              print  " <section> 
                          <p>Seu saque de {$valorSaque} vai resultar em:</p>
                          <p> {$tot100} notas de 100 reais</p>
                          <p> {$tot50} notas de 50 reais</p>
                          <p> {$tot10} notas de 10 reais</p>
                          <p> {$tot5} notas de 5 reais</p>
                          <p> ficou {$sobra} que não é possivel sacar</p>
                      </section>";
            }
          }
    ?>
   
  </body>

</html>