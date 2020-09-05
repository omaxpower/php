<?php

echo 'holamundo';
echo '<br/> <h1>hola perla</h1>';
//variables
$nombre="omax";
$Nombre="power";

//concatenacion de cadenas y variables
echo $nombre."&nbsp;".$Nombre;
echo "<br />";
$num1=4;
$num2=67;

$suma=$num1+$num2;

echo $suma;
echo "<br />";

echo "la variable \$suma tiene el valor de $suma";
echo "<br />";

$modulo = $num2%2; 
if($modulo==0){
    echo "el n&uacute;mero es par";
}else{
    echo "el n&uacute;mero es impar";
}
echo "<br />";

for($i=0;$i<=10;$i++){
    echo $i. "<br />";
}

?>