<?php

$myArray = array(1,2,2,4,5,6,7,8,8,8);

$arreglo = array_count_values($myArray);

arsort($arreglo);

$frecuencia = reset($arreglo);
$repetido = key($arreglo);

echo "Numero de repeticiones: ".$frecuencia;
echo "<br>";
echo "Número que se repite: ". $repetido;

?>
