<?php

namespace app\controllers;

use app\models\FlagModel;

class SearchFlagController{
    public function show($params = null){
        $title = 'Search Flag';
        if(!$params){
            $flagModel = new FlagModel;
            $allFlags = $flagModel->getAllFlags();

            require_once('../app/views/SearchFlagView.php');


        }
    }
}