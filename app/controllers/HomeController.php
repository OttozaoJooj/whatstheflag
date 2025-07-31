<?php 
namespace app\controllers;

use app\models\FlagModel;
use app\utils\Funcs;

class HomeController{
    public function show(){
        $title = 'Home';
        $flagModel  = new FlagModel;
        Funcs::dd($flagModel->getAllCodeFlags());
        require_once('../app/views/HomeView.php');
    }
}


?>