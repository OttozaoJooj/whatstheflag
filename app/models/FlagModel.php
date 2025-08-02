<?php 
namespace app\models;

use app\core\Database;
use app\utils\Funcs;
use PDO;

class FlagModel{
    
    public function getAllCodeFlags(){
        $conn = Database::conn();
        $stmt = $conn->query('SELECT * FROM users;');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addFlag(){
        
        
    }
    

    
}


?>