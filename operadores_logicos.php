<!-- Operadores Lógicos
Los Operadores Lógicos permiten combinar expresiones simples en expresiones más complejas, estas expresiones se evalúan y devuelven un valor Booleano (TRUE)(FALSE).

Símbolo         nombre
and                 And (y)
or                  Or  (o)
"!"                 Not (no) sin comillas
&&                  And (y)
||                  Or  (o) 

Tabla de Operador AND
Expresión 1                 Expresión 2             Resultado
FALSE           &&          FALSE                   FALSE
FALSE           &&          TRUE                    FALSE
TRUE            &&          FALSE                   FALSE
TRUE            &&          TRUE                    TRUE

Tabla de Operador OR
Expresión 1                 Expresión 2             Resultado
FALSE           ||          FALSE                   FALSE
FALSE           ||          TRUE                    TRUE
TRUE            ||          FALSE                   TRUE
TRUE            ||          TRUE                    TRUE

Tabla de Operador NOT
Expresión 1                 Resultado
!FALSE                      TRUE                   
!TRUE                       FALSE                   
               





-->




<?php
// $valor_1 = 7;
// $valor_2 = 2;

// var_dump($valor_1==7 && 7>3);

// $valor_1 = 7;
// $valor_2 = 2;

// var_dump($valor_1==6 || 1>3 || $valor_2 >10);

// $valor_1 = 7;
// $valor_2 = 2;

// var_dump(!($valor_1 == $valor_2));

$valor_1 = 7;
$valor_2 = 2;

$resultado=!($valor_1 >= $valor_2);
var_dump($resultado);
