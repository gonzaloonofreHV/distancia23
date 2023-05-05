<?php
/** 
* Función que devuelve el cuadrado de un número
*
* Esta función multiplica el número dado por sí mismo
* para obtener el número elevado al cuadrado
*
* @version 1.0.0
* @author Gonzalo Hernández
* @copyright Gonzalo Hernández 2023
* @todo Crear otra función para elevar al cubo
* @param integer $num número a elevar al cuadrado
* @return integer el resultado de elevar al cuadrado
*
*/
function cuadrado($num) {
  return $num * $num;
}
 
/** 
* Función que verifica si una cadena es un palíndromo
*
* Esta función toma una cadena, la invierte
* y te dice si es igual hacia delante y hacia atrás
*
* @version 1.0.0
* @author Gonzalo Hernández
* @copyright Gonzalo Hernández 2023
* @todo Crear otra función que cree palíndromos! Eso es muy difícil….
* @param string $cadena El texto que queremos comprobar
* @return boolean el resultado de comprobar si es palíndromo
*
*/
function esPalindromo($cadena) {
  $cadena = str_replace(' ', '', strtolower($cadena));
  $inversa = strrev($cadena);
  return $cadena === $inversa;
}
