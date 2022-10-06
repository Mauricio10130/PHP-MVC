<?php

function controller_autoload($classname){
    include 'Controllers/' . $classname . '.php'; # CLases q esten en el directorio Controllers
}

spl_autoload_register('controller_autoload');