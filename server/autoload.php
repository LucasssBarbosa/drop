<?php
function autoload($class) {
    try{
        require_once __DIR__.str_replace('\\',DIRECTORY_SEPARATOR,'\\'.$class).'.php';
    }catch(\Throwable $e){
        die($e);
    }
    
}
spl_autoload_register('autoload');