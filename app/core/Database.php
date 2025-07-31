<?php

namespace app\core;

use PDO;

class Database{
    public static function conn(){
        return new PDO("mysql:host=localhost;dbname=flag_db", 'root', '');
    }
}