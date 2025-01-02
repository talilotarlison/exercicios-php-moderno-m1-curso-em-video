

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
      <h1>Maquina do Tempo</h1>
    </head>
    <section>
      <form action=<?=$_SERVER['PHP_SELF']?> method="get">
        <label for="ano"> Ano Atual?</label>
        <input type="number" min="1900"  max="<?= date("Y")?>" name="ano" id="ano" value="<?=$_GET['ano'] ?? ""?>">
        <label for="nascimento">Ano de nascimento ?</label>
        <input type="number"  min="1900" name="nascimento" id="nascimento" value="<?=$_GET['nascimento']?? ""?>">
        <p>Ano atual <?= date("Y")?></p>
        <input type="submit" value="Analisar Idade">
      </form>
     </section>
       
        <?php

          if ($_SERVER['REQUEST_METHOD'] === 'GET') {
               // The request is using the POST method

            if(isset($_GET['ano'])&& isset($_GET['nascimento'])){
              $anoAltual =  filter_input(INPUT_GET, 'ano', FILTER_SANITIZE_SPECIAL_CHARS);
              $dataNascimento =  filter_input(INPUT_GET, 'nascimento', FILTER_SANITIZE_SPECIAL_CHARS);

              function calculaIdade(int $anoAltual, int $dataNascimento):string{
                 if($dataNascimento > $anoAltual){
                    return "Você não nasceu ainda!!";
                 }else{
                    return "Sua idade será :" . ($anoAltual - $dataNascimento) . " anos";
                 }
              }

              $idade =  calculaIdade($anoAltual,$dataNascimento );

              // https://www.php.net/manual/pt_BR/language.types.string.php
              print  " <section> 
                          <p> {$idade} </p>
                      </section>";
            }
          }
    ?>
   
  </body>
</html>
