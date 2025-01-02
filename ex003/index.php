<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Curso php</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>
     Tipos de dados primitivos!
    </h1>
     <?php
        // 0x = hexadecimal
        // 0b = binario
        // 0 = octal


        // Tipos primitivos:
        // string - int - integer- float - dauble - bool - boolian 

         $num = 010;
         echo "o valor da variavel é {$num}";

         const CANAL = "curso em video";

         $v = "gustavo"; 
         $idade = 45;
         var_dump($v);

         print("meu nome e gustavo");
         printf("Meu nome é %s e tenho %d <br>", $v,$idade);

         $numero = (int) 3e2 ;// 3 x 10(2) coerção de tipo
         var_dump($numero);  

         $num1 = (float)"950";
         var_dump($num1); 

          $x = 500;
          var_dump($x);

          $casado = true;
          var_dump($casado);

          // tipos compostos 
          // arrry- object
          $vet = [ 12,4,5,25,6,"joao", true];
          var_dump($vet);

          $obj = (object)["nome"=>"talilo", "idade"=> 19];
          var_dump($obj->nome);


          // tipos especiais

          // null - resourse - callabe - mixed
     ?> 
  </body>
</html>