<?php 

namespace App\Models;

use PDO;

class Aluno {

    protected $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function getAlunos() {
        $query = "SELECT matricula, nome, data_nasc FROM alunos LIMIT 0,10";
        return $this->db->query($query)->fetchAll();
    }
}