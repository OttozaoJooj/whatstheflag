<?php

namespace app\controllers;

use app\utils\Funcs;
use Exception;

class AddFlagController{
    public function show(){
        $title = 'Add Flag';
        require_once('../app/views/AddFlagView.php');
    }

    public function create($params, $files){
        $flagFile = $files['flag_filename'];
        $name = $params['name'];
        $code = $params['code'];

        $filename = $flagFile['name'];
        $pathTemp = $flagFile['tmp_name'];

        $fileTypesAllowed = ['image/png', 'image/jpeg', 'image/webp'];

        throw new Exception('Salada');


        Funcs::dd($filename, $pathTemp );
    }
}