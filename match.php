<!-- MATCH

https://www.youtube.com/watch?v=wfiP9fUdxhY

La expresión MATCH ramifica la evaluación basada en una comprobación de identidad de un valor, de forma similar a una sentencia switch, una expresión MATCH tiene una expresión de sujeto que se compara con múltiples  alternativas.

A diferencia de Switch, la comparación es un comparación es una comprobación de identidad (===) en lugar de una comprobación de igualdad débil (==). Las expresiones match están disponibles a partir de PHP 8.0


match (variable){
    $variable => Código a ejecutar,

    default => Código a ejecutar
}; -->


<?php
//Ejemplo 1
// $a = 1;

// $x = 10;
// $y = 9;
// $z = 7;
// $b = 1;
// $c = 2;

// $resultado= match($a){
//     $x => "Valor igual a X",
//     $y => "Valor igual a Y",
//     7 => "hola mundo",
//     $b,$y => "Valor igual a B o C",
//     default => "No coincide con niguna variable",
// };

// echo $resultado;


$edad= 6;

$resultado = match(true){
    $edad >= 60 => "Eres de la terdecera edad",
    $edad >= 30 => "Eres adulto",
    $edad >= 18 => " Eres adulto Joven",
    default => "Eres un niño",
};
echo $resultado;


