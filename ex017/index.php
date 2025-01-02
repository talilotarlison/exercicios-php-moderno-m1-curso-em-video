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
      <h1>Calculadora de tempo</h1>
    </head>
    <section>
      <form action=<?=$_SERVER['PHP_SELF']?> method="get">
        <label for="tempo"> Total de segundo para calcular.</label>
        <input type="number" name="tempo" id="tempo" value="<?=$_GET['tempo'] ?? ""?>">
        <input type="submit" value="Analisar tempo">
      </form>
     </section>
       
        <?php

          if ($_SERVER['REQUEST_METHOD'] === 'GET') {
               // The request is using the POST method

            if(isset($_GET['tempo'])){
              $tempoTotalSegundos =  (int)filter_input(INPUT_GET, 'tempo', FILTER_SANITIZE_SPECIAL_CHARS);

              $sobra =  $tempoTotalSegundos;
              // total de semana
              $semana =   (int)($sobra / 604800);
              $sobra = $sobra % 604800;
              // total de dias
              $dia =  (int)($sobra / 86400);
              $sobra = $sobra % 86400;
              // total horas
               $hora =  (int)($sobra / 3600);
               $sobra = $sobra % 3600;
              // total de minutos
               $minutos =  (int)($sobra / 60);
               $sobra = $sobra % 60;    
               // total de segundos
               $segundos = $sobra;   

              // https://www.php.net/manual/pt_BR/language.types.string.php
              print  " <section> 
                          <p> Tatalizando tudo, os  {$tempoTotalSegundos} segundo corresponde:</p>
                          <p> {$semana} semanas</p>
                          <p> {$dia} dias</p>
                          <p> {$hora} horas</p>
                          <p> {$minutos} minutos</p>
                          <p> {$segundos} segundos</p>
                      </section>";
            }
          }
    ?>
   
  </body>

</html>