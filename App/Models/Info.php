<?php 

namespace App\Models;

use PDO;

class Info {

    protected $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function getInfo() {
        $query = "SELECT count(Matricula) as numAlunos, Ano FROM N_Matricula GROUP BY Ano";
        return $this->db->query($query)->fetchAll();
    }
}