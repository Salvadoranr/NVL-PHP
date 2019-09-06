<?php
$newDir = date('Y-m-d G i');
mkdir($newDir);

 $fichero = './el quijote.txt';
 $nuevo_fichero = "./$newDir/el quijote.txt.modificado";
 copy($fichero, $nuevo_fichero);

?>