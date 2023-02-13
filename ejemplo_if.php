
<?php
// $edad = 17;

// if($edad>=18){
//     echo "Eres Mayor de edad";
// }

 
    // 1 Realizar un programa en donde se pide la edad del usuario; si es mayor de edad debe aparecer un mensaje indicándolo.
    // 2. En un almacen se hace un 20% de descuento a los clientes cuya compra supere los $100 ¿cuál será la cantidad que pagará un persona por su compra?

$total = 120;

if($total>100){

    $total = $total - ($total *0.20);

}

echo "El total a pagar es de: $ ".$total;