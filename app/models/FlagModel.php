<?php 
namespace app\models;

use app\core\Database;
use app\utils\Funcs;
use PDO;

class FlagModel{
    
    public function getAllFlags(){
        $conn = Database::conn();
        $stmt = $conn->query('SELECT * FROM flags;');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addFlag($name, $code, $nameFile) : bool{
        $conn = Database::conn();
        
        $stmt = $conn->prepare('INSERT INTO flags(country_name, code, flag_filename, fk_users) VALUES (? , ? , ?, 1);');

        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $code);
        $stmt->bindParam(3, $nameFile);

        if(!$stmt->execute()){
            die('Erro ao executar o SLQ');
        }

        return true;








    }
    

    
}


?>