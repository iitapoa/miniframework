<?php 

namespace App\Models;

use PDO;

class Aluno {

    protected $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function getAlunos() {
        $query = "SELECT Matricula, Nome, DataNasc FROM N_Alunos LIMIT 0,20";
        return $this->db->query($query)->fetchAll();
    }
}