<!-- Operadores de Asignación
Nombre                  Simbolo en PHP          Ejemplo
Asignar                     =                   $a =10;
Sumar y Asignar             +=                  $a+ =5;
Restar y Asignar            -=                  $a- =5;
Multiplicar y Asignar       *=                  $a* =5;
Dividir y Asignar           /=                  $a/ =5;
Concatenar y Asignar        .=                  $a. = "es el valor de A";
Los operadores de asignación nos permiten realizar operaciones de una forma más corta por ejemplo: $a+=5 es lo mismo que $a= $a+5  -->
    
<?php 
#suma
// $numero=5;
// $numero+=5;
// echo $numero;

#resta
// $numero=5;
// $numero-=2;
// echo $numero;

#multiplicación
// $numero=5;
// $numero*=2;
// echo $numero;

#división
// $numero=5;
// $numero/=2;
// echo $numero;

#concatenar
$numero="Texto de prueba ";
$numero.=2;
$numero.=" Otro texo";
echo $numero;


?>

