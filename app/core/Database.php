<?php

namespace app\core;

use Exception;
use PDO;

class Database{
    public static function conn(){
        try{
            return new PDO("mysql:host=localhost;dbname=flag_db", 'root', '');

        } catch(Exception $e){
            die($e->getMessage());
        }
    }
}