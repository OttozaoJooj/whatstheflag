<?php

namespace app\controllers;

use app\models\FlagModel;
use app\handlers\FileHandler;
use app\handlers\RedirectHandler;
use app\utils\Funcs;

class AddFlagController{
    public function show(){
        $title = 'Add Flag';
        require_once('../app/views/AddFlagView.php');
    }

    public function create($params, $files){
        $flagFile = $files['flag_filename'];

        $name = $params['name'];
        $code = $params['code'];

        $fileHandler = new FileHandler($flagFile); 

        if($fileHandler->isTypeFileAllowed() && $fileHandler->inLimiteOfMB()){
            
            $flagModel = new FlagModel;

            $flagModel->addFlag($name, $code, $fileHandler->getNameFile());            
            
            if(!$fileHandler->moveUploadedFile('C:/xampp/htdocs/blog/app/uploads/'.$fileHandler->getNameFile())){
                die('Erro ao mover arquivo.');
            }
        }

        RedirectHandler::redirect('http://localhost:8000/');

       
        
    }
}