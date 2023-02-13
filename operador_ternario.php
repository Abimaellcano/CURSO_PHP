<?php
// se usa el signo ? para condicionar si es verdadero  y : si la condicion es falsa
//primera forma no permite usar echo 
// En ocasiones queremos introducir sentencias condicionales en una sola línea, pero si usamos una sentencia if, puede que tengamos que usar varias líneas para que la legibilidad de nuestro código sea la adecuada. Sin embargo podemos usar el operador ternario en PHP, que se comporta exactamente igual que una sentencia if con else.

//sentencia_booleana ? valor_si_verdadero : valor_si_falso;
//$resultado = $valor ?: 'defecto';

(9>7) ? 10*7 : 10*5;

//segunda forma
(2>7) ? $total = 10*7 : $total = 10*5;
echo $total;

//tercera forma
$total = (2>7) ? 10*7 : 10*5;
echo $total;

//https://www.youtube.com/watch?v=FvzoVwBJqW8