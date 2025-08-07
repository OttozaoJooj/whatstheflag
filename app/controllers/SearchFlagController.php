<?php

namespace app\controllers;

use app\models\FlagModel;
use app\utils\Funcs;

class SearchFlagController{
    public function show(){
        $title = 'Search Flag';
        
        $flagModel = new FlagModel;
        $allFlags = $flagModel->getAllFlags();

        require_once('../app/views/SearchFlagView.php');
    }

    public function search($params){
        
    }
}