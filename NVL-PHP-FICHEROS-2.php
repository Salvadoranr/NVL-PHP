<?php
reemplazar('el quijote.txt', 'quijote-modificado.txt', 'Sancho', 'Morty');
function reemplazar($file, $newFile, $name, $newName)
{
    $descriptor = fopen("./$file", 'r');
    $descriptorM = fopen("./$newFile", 'w');
  
    while (($line = fgets($descriptor)) !== false) {
        $newPhrase =  str_replace($name, $newName, $line);
        fwrite($descriptorM, $newPhrase . "\n");
    }
    fclose($descriptorM);
}
