<?php
/**
 * @author Juan Garcia
 * Muestro por pantalla un radio y calculo y muestro su perimetro y su area, por último dibujo el circulo
 */

$radio = 40;
const PI = 3.1415 ;

$perimetro = $radio*PI*2;
$area = PI*$radio*$radio;
echo "Radio: ".$radio;
echo "</br> Perimetro de la circunferencia: ".$perimetro;
echo "</br> Area de la circunferencia: ".$area;
echo "</br> <svg height='".($radio*2+20)."' width='".($radio*2+20)."'><circle cx='".($radio+10)."' cy='".($radio+10)."' r='".$radio."'/></svg>";


echo "</br>Código <a href='https://github.com/juan01jgt/DWES_ud2/blob/main/Ejercicio3.php'>aqui</a>";
