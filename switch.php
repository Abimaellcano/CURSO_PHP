<!-- SWITCH 

La sentencia switch es similar a una serie de sentencia IF en la misma expresión.

En muchas ocasiones, es posible que se quiera comparar la misma variable (o expresión) con muchos valores diferentes, y ejecutar una parte de código distinta dependiendo de a que valor es igual.

Para esto es exactamente la expresión switch.

La comparación es una comprobación de igualdad débil (==)

Switch(variable){
    case valor1:
        código a ejecutar
    break;

    case valor2:
        código a ejecutar
    break;

    default:
        código a ejecutar 
} -->

<?php

// $fruta = "piña";

// switch($fruta){
//     case "Fresa";
//         echo "Eres una Fresa";
//     break;

//     case "Pera":
//         echo "Eres una Pera";
//     break;

//     default:
//         echo "No eres ni Fresa ni Pera";

// }

$dia = 7;

switch($dia){
    case 1:
        echo "Lunes";
    break;

    case 2:
        echo "Martes";
    break;

    case 3:
        echo "Miércoles";
    break;

    case 4:
        echo "Jueves";
    break;

    case 5:
        echo "Viernes";
    break;

    case 6:
        echo "Sábado";
    break;

    case 7:
        echo "Domingo";
    break;

    default:
        echo "Introduce un valor válido";

}