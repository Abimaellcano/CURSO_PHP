<?php

/* Arrays 
Un Array en PHP es un tipo especial de datos que represnta los llamados mapas ordenados de datos. Un mapa es un tipo de datos que asocia valores con claves, tambien llamado 'array asociativo'

Los valores que almacenamos en un Array no tienen por qué ser del mismo tipo como ocurre en otros lenguajes de programación.

la posibilidad de utilizar como valores de un array otros arrays, árboles, les permite la defición de arrays multidimensionales.

PHP soporta tanto ARRYS ESCALARES (índice númerico), ARRAYS ASOCIATIVOS (índice por clave ) y ARRAYS MULTIDIMENSIONALES.

Para acceder a los elementos de un array se utilizn corchetes [] dentro de los cuales se indicará un ÍNDICE o CLAVE de localización.

A diferencia de otros lenguajes en PHP no hace falta definir el array antes de utilizarlo.  Cuando se definen elementos de un array, PHP reconoce automáticamente que se trata de un array sin necesidar de declaración previa.

Tipos de Arrays

- ESCALARES: Los arrays escalares son aquellos en los que para acceder a los elementos utilizamos un índice que representa la posiciónn del valor dentro del array comenzando desde el índice 0

ASOCIATIVOS: Para acceder a los elementos del array utilizacmos la clave asociada con el elemento, donde este toma un cierto número de parejas utilizando la sintaxis clave => valor como argumentos.

MULTIDIMENCIONALES: Un array multidimencional es aquel cuyos valores son otros arrays. Para acceder a sus elementos se tienen que indicar los índices de cada una de sus dimensiones, utilizando tantos pares de corchetes [array][array][array] como dimensiones se definan en el array: [] [] -> 2 dimensiones, [][][] -> 3 dimensiones, etc ....
https://www.youtube.com/watch?v=VOGeWOKAnE4
*/

# Arrays Escalares:

$estudiantes=array("Carlos","José","Vanessa","Katy",7);
//para modificar el valor de un array
$estudiantes[3]="Claudia";

// echo $estudiantes[" "];

//Array Asociativo:

$tutor=[
    "nombre"=>"Carlos",
    "apellido"=>"Alfaro",
    "edad"=>27];

    
// echo $tutor["nombre"];

//Arrays de Multidimenciones
$tutor_2=[
    "nombre"=>"Vanessa",
    "apellido"=>"Calles",
    "edad"=>"20",
    "cursos"=>["PHP","Python","CSS"]
];
$tutor_2["pais"]= "El Salvador";
echo $tutor_2["pais"];