<?php

declare(strict_types=1);
//----DECLARACION DE VARIABLES----//

$Int = 17;

$Float = 17.0;

$String = "hola 123";

$boolean = true;

$boolean = false;



$ArraysIndexados = array (12,"hola",18);
print $ArraysIndexados[1];



$vector2 = array("numero1" => 12 , "numero2" => 16 , "numero3" => 18 );
print $vector2["numero2"];




//expresion

//es todo aquello que tenga : un nombre , un operador y un valor ejm.



 // $nombre  =     "valor";
//  ^        ^        ^
//  |        |        |
// Nombre  Operador  Valor


 //$suma     =      (2+2);
//  ^        ^        ^
//  |        |        |
// Nombre  Operador  Valor


 //   $x     +        +;
//  ^        ^        ^
//  |        |        |
// Nombre  Operador  Valor

echo "<br />";
echo "<br />";

$multidimensiones = array(
  "contenido" => array("Manzanas " , "Piñas" , "uva"),
  "precios" => array(1500,2000,400));

print "frutas: <br /> {$multidimensiones["contenido"][0]} <br />
precio:{$multidimensiones["precios"][0]}.";

echo "<br />";

print " <br /> {$multidimensiones["contenido"][1]} <br />
precio:{$multidimensiones["precios"][1]}." ;

echo "<br />";
echo "<br />";

$bien = "no es lo mismo una bola negra que";
$mal = " una negra en bola";

echo $bien.$mal;
echo "<br />";
echo "<br />";






//--------comentarios------//

// comentario de una sola linea

/* comentario 
       de 
     varias
     lineas
*/


# comentario al estilo consola 


//--Aritmeticos---

$positivo = 1;

$negativo = -1;

$suma = (5 + 5);

$resta = (6-15);

$multiplicacion = (5*5);

$divicion = (25 / 5);

$modulo = (25 % 11000);

$potencia = (5 ** 2);

echo "suma : $suma <br /> resta : = $resta <br /> multiplicacion  : = $multiplicacion <br /> 
divicion  : = $divicion <br /> modulo  : = $modulo <br /> potencia  : = $potencia .";

echo "<br />";
echo "<br />";

//--Aritmeticos--- 

$a = 5;

$b = &$a;

echo "a: $a  <br /> b: $b ";

echo "<br />";
echo "<br />";

//--compararcion--- 
/*
$a == $b // igual

$a === $b // identico 

$a != $b // diferente

$a <> $b // diferente

$a !== $b // no identico

$a < $b // menor que

$a > $b // mayor que 

$a <= $b // menor o igual que

$a >= $b // mayor o igual que


//--incremento/decremento--

--$a;  // decrementa $a en uno y lo retorna

$a--; // retorna y despues decrementa

++$a; // aumenta y despues retorna

$a++; // retorna y despues aumenta



$a = "Hello ";
$b = $a . "World!"; // ahora $b contiene "Hello World!"

$a = "Hello ";
$a .= "World!";     // ahora $a contiene "Hello World!"


//--Array--

$a + $b	//Unión

$a == $b	//Igualdad

$a === $b	//Identidad

$a != $b	//Desigualdad

$a <> $b	//Desigualdad

$a !== $b	//No-identidad

*/

$var1 = 5;

$var2 = 3;

$var3 = 2;

function primera_funcion( $var1,$var2,$var3){

  $suma = $var1 + $var2 + $var3;

  echo " la suma de las variables es : $suma";


}


echo primera_funcion( $var1,$var2,$var3);

echo "<br />";
echo "<br />";


function incrementa(&$valor){

  $valor++;

  return $valor;

}

$valor = 10;

echo incrementa($valor). "<br>";

echo $valor ;

echo "<br />";


function quien_soy($nombre = "Diego"){

return "Mi nombre es : $nombre ";

}

echo quien_soy();

echo "<br />";

echo quien_soy(null);

echo "<br />";

echo quien_soy("Alejandro");



?>