<!-- Operadores de Comparación 
Los operadores de comparación comparan dos expresiones y devuelven un valor Booleano que puede ser TRUE (1) o FALSE (0).

Ejemplo             Símbolo (nombre)            Resultado
1 =="1"             ==  (igual)                     TRUE
10 === "10"         === (idéntico)                  FALSE
7 != "7"            !=  (diferente)                 FALSE
21 <>"21"           <>  (diferente)                 FALSE
19 !=="19"          !== (No idéntico)               TRUE
7 < 4               < (menos qué)                   FALSE
7 > 4               > (mayor qué)                   FALSE
2 <= 2              <= (menor o igual qué)          TRUE
3 >= 7              >= (mayor o igual qué)          FALSE



https://www.youtube.com/watch?v=X5VeBot2sGA


 -->

 <?php 
    // echo (1==1);
  
    //Igual
    // $valor_1=1;
    // var_dump($valor_1=="1");

    //Idéntico
    // $valor_1=1;
    // var_dump($valor_1==1);

     //Distinto o Diferente
    //  $valor_1=9;
    //  var_dump($valor_1!="7");

      //Distinto o Diferente
    //   $valor_1=9;
    //   var_dump($valor_1 <>"7");

    //   $valor_1="Hola";
    //   var_dump($valor_1 <>"hola");

    // No Idéntico / tipo string es texto " "
    // $valor_1=7;
    //   var_dump($valor_1 !=="7");

     // Menos que
    //  $valor_1=1;
    //  var_dump($valor_1 < 2);

     // Mayor que
    //  $valor_1=9;
    //  var_dump($valor_1 > 10);

     // Menor o igual que
    //  $valor_1 = 11;
    //  var_dump($valor_1 <= 10);

     // Mayor o igual que
     $valor_1 = 11;
     var_dump($valor_1 >= 10);


 
 
 
 ?>