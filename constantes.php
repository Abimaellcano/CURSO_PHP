<?php 
/*
CONSTANTES:
En programación, una constante es un valor que no puede ser alterado / modificado durante la ejecución de un programa, unicamente puede ser leído.

Una constante corresponde a la longitud fija de un área reservada en la memoria principal del ordenador, donde el programa almacena valores fijos.

REGLAS PARA DEFINIR UNA CONSTANTE:

1. El nombre de una constante sigue las mismas reglas que cualquier variable de PHP. Un nombre de constante válido empieza por una legra o guión bajo, seguido por cualquier número de letras, números o guiones bajos.

2. Por defeco, una constante distingue mayúsculas y minúsculas.

3. Por convención, los identificadores de constantes siempre se declaran en mayúsculas.

CONSTANTES PREDEFINIDAS

1.  LINE - El número de línea actual en el fichero

2.  FILE - Ruta completa y nombre del fichero con enlaces simbólicos resueltos. Si se usa dentro de un include, devolverá el nombre del fichero incluido.

3.  DIR - Directorio de fichero, si se utiliza dentro de un include, devolverá el directorio del fichero incluído, esta constante igual al dirname (FILE)  el nombre del directorio no lleva la barra final a no ser que esté en el directorio root

4.  FUNCTION - Nombre de la función

5. CLASS - Nombre de la clase, el nombre de la clase incluye el namespace declarado, tenga en cuenta que a partir de PHP 5.4 __CLASS__ taien funciona con traits, cuando es usado en un método trait, __CLASS_ en el nombre de la clasedel trait que stá siendo utilizado.

6.  TRAIT - el nombre de trait. El nombre del trait incluye el espacio de nombres e el que fue declarado.

7. METHOD - Nombre del mpetodo de la clase

8.  NAMESPACE - Nombre del espacio de nombres actual

9. ClassName :: class - el nombre de la clase completamente cualificado




https://www.youtube.com/watch?v=iJtNWDcxkPk
*/





//Forma actual
const NOMBRE="Ashley";
echo NOMBRE;

//Arrays ("posición cero", "posición uno", "posición dos", etc....)
define("ALUMNOS", array("Carlos", "Alba","José"));
echo ALUMNOS[2];