<!-- Estructura Condicional Simple (IF)

https://www.youtube.com/watch?v=_4fbXE0dstA

Permite la ejecución frangmentos de código, la expresión es evaluada a su valor booleano. Si la expresión se evalúa como FALSE la ignorará. 

PHP puro
if(expresion){
    código a ejecutar
}

PHP con HTML 
if(expresion):
    Código a ejecutar
    endif; -->


// PHP puro
// if(1>=0){
//     echo "Expresión Verdadera";
// }

//PHP y HTML
<?php if(9>8){ ?>
    
    <h1> "Expresion verdadera"</h1>
<?php } ?>