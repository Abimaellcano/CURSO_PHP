<!-- Asignación por Referencia
Significa que ambas variables terminan apuntando a los mismos datos y nada es copiado en ninguna parte. 



-->
<?php 
$texto= "Guatemala";
$variable_1= $texto;
$variable_2= &$texto;

echo $variable_1;

$texto= "Puerto Rico";
echo $variable_2;

?>