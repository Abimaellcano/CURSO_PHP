<?php
/* 
REGLAS PARA DEFINIR UNA VARIABLE EN PHP
1. En PHP las variable se representan con un signo de dólar $ seguido por el nombre de la variable.

2. Un nombre de variable válido tiene que empezar con una letra o un carácter de subrayado (guión bajo), seguido de cualquier número de letras, números y caracteres de subrayado. 
NO PUEDE EMPEZAR CON UN NÚMERO

3. El nombre de la variable es sensible a minúsculas y mayúsculas.
se puede usar el estándar de nomenclatura Camel Case.

Ejemplos de variables válidas:
$_PRUEBA
$_N1223456
$PRUEBA
$prueba

Estándares de Nomenclatura
Es un conjunto de normas (un staándar de nomenclartura) para un lenguaje de programación que se recomienda usar como buenas prácticas para facilitar la lectura del código y este sa facilmente más entendible y mantenible

1. Camel Case: Este nombre viene porque se asemeja a las dos jorobas de un camello, y se puede dividir en dos tipos.

- Upper Camel Case: cuando la primera letra de cada una de las palabas es mayúscula, tambien denominado Pascal Case, ejemmplo: EjemploDeNomenclatura


-  Lower Camel Case:  igual que la anterior con la excepción de que la primera letra es minúscula. Ejemplo: ejemploDeNomenclatura

2. Upper Case: Todas las letras del identificador se encuentran en mayúsculas por ejemplo: EJEMPLODENOMENCLATURA es usado por ejemplo para las CONSTANTES definidas en PHP

3. Snake Case: Cuando cada una de las palabras, se separa por un guión bajo, es común en los nombre de varables y funciones de leguajes como C, aunque tambien Ruby y Phyton lo han adoptado. Como el Camel Case existen variedades como todas las letras en mayúsculas, denominado SREAMING_SNAKE-CASE,  que se utiliza para definir constantes.



VARIABLES PREDEFINIDAS

1. $GLOBALS - Hace referencia a todas las variables disponibles en el ámbito global.

2. $_SERVER - Información del entorno del servidor y de ejecución

3. $_GET - Variables HTTP GET

4. $_POST - Variables POST de HTTP

5. $_FILES - Variables de subida de ficheros HTTP

6. $_REQUEST - Variables HTTP Request

7. $_SESSION - Varable de sesión

8. $_ENV - Variable de entorno

9. $_COOKIE - Cookies HTTP

10. $php_errormsg - El mensaje de error anterior

11. $HTTP_RAW_POST_DATA - Datos POST sin tratar

12. $http_response_header - Encabezados de respuesta HTTP

13. $argc - El número de argumentos pasados a un script

14. $argv - Array de argumentos pasados a un script

15. $this - Palabra reservada utilizada en programación orientada a objetos.





*/

$Nombre="Carlos";
echo $Nombre;

$nombre_completo ="Carlos Mejía";
echo $nombre_completo; 