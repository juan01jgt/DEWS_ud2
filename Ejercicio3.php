<?php
/**
 * @author Juan Garcia
 * Muestro por pantalla un Hola mundo y el enlace al código
 */

 $radio = 40;
 const PI = 3.1415 ;

echo "Radio: ".$radio;
echo "</br> Perimetro de la circunferencia: ".$radio*PI*2;
echo "</br> Area de la circunferencia: ".PI*$radio*$radio;
echo "</br> <svg height='".($radio*2+20)."' width='".($radio*2+20)."'><circle cx='".($radio+10)."' cy='".($radio+10)."' r='".$radio."'/></svg>";


echo "</br>Código <a href='https://github.com/juan01jgt/DWES_ud2/blob/main/Ejercicio3.php'>aqui</a>";
