<?php
function allVocals($string){
    $vocals= ['a','e','i','o','u'];
    foreach ($vocals as $value) {
        $count = substr_count($string, strtoupper($value)) + substr_count($string, strtolower($value));
        if($count === 0){
            return false;
        }
    }
    return true;
}
function printMessage($str){
   
    if(allVocals($str)){
      echo 'LA PALABRA CONTIENE LAS 5 VOCALES';
    } else{
        echo 'NO CONTIENE TODAS LAS VOCALES';
    }
 
 }
 printMessage("upgrade hubio");