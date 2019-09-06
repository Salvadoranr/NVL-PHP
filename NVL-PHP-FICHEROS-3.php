<?php
$algo = date('Y-m-d G i');
mkdir($algo);

 $fichero = './el quijote.txt';
 $nuevo_fichero = "./$algo/el quijote.txt.modificado";
 copy($fichero, $nuevo_fichero);

?>