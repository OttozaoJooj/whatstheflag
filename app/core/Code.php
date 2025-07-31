<?php

namespace app\core;

class Code{
    public static function abort($code = 404){

        $title = 'Error 404';
        require_once('../app/views/CodeView.php');
        http_response_code($code);
        die();
    }

    public static function success($code = 200){
        http_response_code($code);
    }

}

?>