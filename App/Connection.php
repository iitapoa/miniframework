<?php

namespace App;

use PDO;
use PDOException;

class Connection {
    
    public function getDb() {
        try {

            $conn = new PDO(
                "mysql:host=192.168.0.4;dbname=alunos;charset=utf8",
                'aluno',
                'AbCd2024'
            );

            return $conn;

        } catch (PDOException $e) {
            //.. tratar o erro de alguma forma ..//
        }
    }
}