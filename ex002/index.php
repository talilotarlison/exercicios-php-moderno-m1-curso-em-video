<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Curso php</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>
     exemplo de hora e data!!
    </h1>
     <?php
         date_default_timezone_set('America/Sao_Paulo');
         echo "Hoje e data " . date("d/M/Y") ."<br>";
         echo "Hora de hoje " . date("G:i:s");
      ?> 
  </body>
</html>