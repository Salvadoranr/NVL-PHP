<?php
$descriptor = fopen('./el quijote.txt', 'r');
$words=0;
while (($line = fgets($descriptor)) !== false) {
     $words += countWord($line);
 }
 echo $words;
 function countWord($string){
    return substr_count($string, 'molino') + 
    substr_count($string, 'MOLINO')+
    substr_count($string, 'Molino');
}
