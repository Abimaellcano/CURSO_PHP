<!-- Estructura condicional Doble (IF - ELSE)
Con frecuencia se desea ejecutar una sentencia si una determinada condición se cumple y una sentencia diferente si a condición no se cumple. Esto es para lo que sirve ELSE.

El else extiende un sentencia if para ejecutar una sentencia en caso que la expresión en la sentencia if se evalúe como FALSE.

PHP puro                                    
if(expresión){
    escriba el código a ejecutar si la expresión es verdadera
}else{
    escriba el código a ejecutar si la expresión es falsa 
}

PHP - HTML 
if(expresión):
    escriba el código a ejecutar si la expresión es verdadera 

else:
    escriba el código a ejecutar si la expresión es falsa 

endif;

https://www.youtube.com/watch?v=4X1mqyx4AjA -->

<?php 

if(9>7){
    echo "Condición Verdadera";


}else{
    echo "Condición Falsa";

}
