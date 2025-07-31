<?php

namespace app\utils;

class Funcs{
    public static function dd($value){
        echo '<pre>';
        var_dump($value);
        echo '</pre>';
        die();
    }

    public static function displayErrors(){
        ini_set('display_errors',1);
        ini_set('display_startup_erros',1);
        error_reporting(E_ALL);
    }
}