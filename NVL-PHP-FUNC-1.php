<?php

function cuentaLetraA($string){
    echo substr_count($string, 'A');
}

cuentaLetraA("Upgrade Hub");