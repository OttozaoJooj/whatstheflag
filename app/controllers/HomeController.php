<?php 
namespace app\controllers;

use app\models\FlagModel;
use app\utils\Funcs;

class HomeController{
    public function show($params){
        $title = 'Home';
        require_once('../app/views/HomeView.php');
    }
}


?>