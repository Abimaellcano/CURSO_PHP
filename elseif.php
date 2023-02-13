<!-- Estructura Condicional Multiple (IF-ELSEIF)

elseif, como su nombre lo sugiere, es una combinación de if y else. Del mismo modo que else, extiende una sentencia if para ejecutar una sentencia diferente en caso que la expresión if original se evalúe como FALSE. Sin embargo , a diferencia de else, esa expresion alternativa solo se ejecutará si la expresión condicional de elseif se evalúa como TRUE.

Nota:
Tenga en cuenta que elseif y else if serán considerados exactamente iguales sólamente cuando se utilizan llaves como en el ejemplo anterior. Al utilizar los dos puntos para definir las condiciones if/elseif, no debe separarse else if en dos palabras o PHP fallará con un error de interprete.

https://www.youtube.com/watch?v=DEKiMZoVyzo -->





<!-- 
    //php puro 
if($a > $b){
    echo "a es mayor que b";
} elseif($a == $b){
    echo "a es igual que b";
} else{
    echo "a es menor que b";
}

//PHP - HTML

if($a> $b):
    echo "a es mayor que b";
elseif($a == $b):
    echo "a es igual que b";
else:
    echo "a es menor que b";
endif; -->


<!-- 
Ejercicios (IF - ELSEIF) -->

<!-- Ejercicio No. 1

1. Se desea diseñar un programa que escriba los nombres de los días de la semana en función del valor de una variable DIA. -->
<?php 



// $dia = 7;

// if($dia == 1){
//     echo "Lunes";
// }elseif($dia == 2){
//     echo "Martes";
// }elseif($dia == 3){
//     echo "Miércoles";
// }elseif($dia == 4){
//     echo "Jueves";
// }elseif($dia == 5){
//     echo "Viernes";
// }elseif($dia == 6){
//     echo "Sábado";
// }elseif($dia == 7){
//     echo "Domingo";
// }else{
//     echo "Error, ha introducido un valor no valido";
// }

 


// <!-- Ejercicio 2 

// En una fábrica de computadoras se planea ofrecer a los clientes un descuento que dependerá del número de computadoras que compre. 

// Si las computadoras son menos de 5 se les darpa un 10% de descuento sobre el total de la compra.

// Si el número de computadoras es mayor o igual a 5 pero menos de 10 se le otorga un 20% de descuento.

// Si son 10 o más se les da un 40% de descuento, el precio de cada computadora es de Q 700

// https://www.youtube.com/watch?v=XdOuJl6RIPc



$cantidad = 7;
$precio = 700;
$total = $cantidad * $precio;

if($cantidad<5){
   $total= $total-($total*0.10);
}elseif($cantidad >=5 && $cantidad < 10){
    $total= $total-($total*0.20);
}elseif($cantidad >=10){
    $total= $total-($total*0.40);
}

echo "El Total a pagar es:  Q".$total;

