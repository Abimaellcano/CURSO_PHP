<!-- Ejercicio (Operador Ternario)
Hacer un programa que calcule el total a pagar por la compra de camisas. Si se compran tres camisas o mas se aplica un descuento del 20% sobre el total de la compra y si son menos de tres camisas un descuento del 10%.

https://www.youtube.com/watch?v=UPdBmqmd-3k -->

<?php

$camisas = 7; //cantidad
$precio = 10; //precio de cada una

$total = ($camisas * $precio);
//Primera forma
$total= ($camisas >=3) ? $total-($total*0.20) : $total-($total*0.20);

// Segunda forma
// ($camisas >=3) ? $total= $total-($total*0.20) : $total= $total-($total*0.20);

echo "Total a pagar: Q ".$total;


