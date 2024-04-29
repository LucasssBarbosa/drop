<?php
spl_autoload_register(function ($class_name) {
    include str_replace('test','', __DIR__).$class_name . '.php';
});
use test\Teste;


$obj  = new Teste();
$obj ->teste();