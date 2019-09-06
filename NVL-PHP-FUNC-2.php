<?php

function cuentaLetra($string,$char){
    echo substr_count($string, strtoupper($char)) + substr_count($string, strtolower($char));
}

cuentaLetra("Upgrade Hub",'u');