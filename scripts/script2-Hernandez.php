<?php
/**
* Clase Cadena tiene métodos para usar con cadenas
*
* Clase Cadena tiene dos métodos para usar con cadenas,
* uno que cuenta los caracteres y otro para convertir a 
* mayúsculas
*
* @version 2.0.0
* @author Gonzalo Hernández Viciana
* @copyright Gonzalo Hernández Viciana 2023
* @todo implementar más métodos, como convertir a minúsculas
*
*/
class Cadena {
  
  /**
  * Método que cuenta el número de caracteres de una cadena
  *
  * Método al que damos una cadena determinada y mediante magia
  * negra, nos devuelve el número de caracteres.
  *
* @param string $cadena la cadena que vamos a contar
* @return integer el número de caracteres de la cadena
*
*/
  public function contarCaracteres($cadena) {
    return strlen($cadena);
  }
  
  /**
  * Método que convierte una cadena a mayúsculas
  *
  * Método que toma una cadena y, usando los últimos
  * avances en IA, nos ofrece una maravilla, la misma 
  * cadena, pero ojo, en MAYÙSCULAS
  *
  * @param string $cadena la cadena que vamos a convertir
  * @return string a cadena en mayúsculas
  *
  */
  public function aMayusculas($cadena) {
    return strtoupper($cadena);
  }
  
}
