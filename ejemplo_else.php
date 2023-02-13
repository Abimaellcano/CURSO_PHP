<?php
/* Ejercicio No.1 
Calcular el total que una persona debe pagar en una llantera, el precio de cada llanta es de Q 800 si se compra menos de 5 llantas, y de Q700 si se compran de 5 o más
*/


    // $cantidad = 4;

    // if($cantidad < 5){
    //     $total = $cantidad * 800;
    // }else{
    //     $total = $cantidad * 700;

    // }

    // echo "El total a pagar es de Q" .$total;

/* Ejercicio No.2 
Determinar si un alumno aprueba o reprueba un curso, sabiendo que aprobará si su promedio de tres calificiaciones es mayor o igual a 7.0; reprueba en caso contrario

https://www.youtube.com/watch?v=Mywmp88L2VQ
*/


$calificacion_1 = 7;
$calificacion_2 = 8;
$calificacion_3 = 10;

$promedio = ($calificacion_1 + $calificacion_2 + $calificacion_3)/3;

if($promedio >= 7){
    echo "Estudiante Aprobado con calificación:"  .$promedio;
}else{
    echo "Estudiante Reprobado con calificación:" .$promedio;
}



