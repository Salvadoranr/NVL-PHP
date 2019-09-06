<?php

function cuentaLetraA($string){
    echo substr_count($string, 'A') + substr_count($string, 'a');
}

cuentaLetraA("Upgrade Hub");