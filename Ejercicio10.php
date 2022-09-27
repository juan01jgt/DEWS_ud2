<?php
/**
 * @author Juan Garcia
 * Ejemplo de uso de la sintaxis heredoc en el manejo de cadenas.
 */

$var = "hola";
$h = <<<HTML
<h3>$var</h3>
<p>Esto es un ejemplo de Heredoc</p>
HTML;

echo $h;

echo "</br>Código <a href='https://github.com/juan01jgt/DWES_ud2/blob/main/Ejercicio10.php'>aqui</a>";
