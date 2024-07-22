<?php

// VARIABLES Y CONSTANTES
/* - Variables: Para declarar una variable en PHP utilizamos
                el nombre que le queramos dar a la variable
                precedido por el símbolo del dólar ($).
                Podemos dejar una variable sin inicializar o
                darle el valor null. */
$var = 'Manolo';
$var1 = null;

/* - Constantes: En PHP tenemos dos formas de declarar una constante,
                 la primera de ellas es la palabra const seguido del
                 nombre de nuestra constante y su valor.
                 También las podemos declarar con el método define(),
                 que recibe 2 parámetros: un string con el nombre de la
                 constante y un valor.
                 Por convención, las constantes deben declararse con mayúsculas. */
const MI_CONSTANTE = 33;

define ('MI_CONSTANTE', 4)


/*TIPOS DE VARIABLES*/ 

/* PHP soporta varios tipos de datos primitivos entre ellos:
      *Escalares
          -boleanos (boolean)
          -enteros (integer)
          -punto flotante (float)
          -cadena (string)
      *Compuestos:
          -arreglos (array)
          -objetos (object)
      *Especiales:
          -null
  */

$Integer = 12; // Integer: Almacena números enteros.
$Float = 12.64; // Float: Almacena números con decimales.
$Boolean = true; // Boolean: Sirve para valores lógicos (true o false).
$Null = null; // Null: Almacena un dato nulo -sin valor-.
$String = 'Esto es una cadena'; // String: Sirve para cadenas de texto o caracteres únicos.
$Arrays = array('a', 'b', 'c'); // Array: Sirve para almacenar varios datos en un mismo lugar.


//Declaracion de una clase
class Objeto {
    // Declaración de una propiedad
    public $nombre = 'un valor predeterminado';
    public $tipo = 'un valor';
}   

//Creacion de un objeto de la clase previamente declarada
$objeto = new Objeto();

// echo
echo "¡Hola ".$lenguaje."!\n"; // Salida: ¡Hola PHP!

// print
print "¡Hola ".$lenguaje."!\n"; // Salida: ¡Hola PHP!

// printf (formateo)
printf("¡Hola %s!\n", $lenguaje); // Salida: ¡Hola PHP!

// sprintf (parecido a printf, pero devuelve en una variable la cadena formateada)
$cadena_formateada = sprintf("¡Hola %s!\n", $lenguaje);
echo $cadena_formateada; // Salida: ¡Hola PHP!

?>