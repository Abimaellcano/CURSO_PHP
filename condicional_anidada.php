<!-- Estructuras Condicionales Anidadas

if(condicion){
    if(condicion){
        bloquede códifo a ejecutar si la condición es TRUE 
    }else{
        bloque de códido a ejecutar si la condición es FALSE
    }

}elseif(condicion){
    Bloque de código a ejecutar si la condicion es TRUE 
}else{
    bloquede códifo a ejecutar si la condición es FALSE
} -->

<!-- Ejercicios (Condicionales Anidadas)

1. Pida a usuario la edad y genero, para que la computadora le indique si ya puede jubilarse.

Tome en cuenta que un Hombre se puede jubilar cuando tenga 60 años o más, en cambio, una mujer mayor se jubilará si tiene mas de 54 años.

https://www.youtube.com/watch?v=ctlOyVIwYE0
-->

<?php
$edad = 55;
$genero = "F";

if($genero == "M"){
    if($edad >=60){
        echo "Puede Jubilarse";

    }else{
        echo "No puede Jubilarse";
    }

    }elseif($genero == "F"){
        
    if($edad >54){
        echo "Puede Jubilarse";
    
    }else{
        echo "No puede Jubilarse";
    }


    }else{
        echo "Coloque una opción valida";
    }

