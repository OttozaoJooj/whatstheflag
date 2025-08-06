<?php

namespace app\handlers;

class RedirectHandler{
    public static function redirect($destination) : void{
        echo '<script>';
        echo "window.location.replace('$destination')";
        echo '</script>';


    }
}