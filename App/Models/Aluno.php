<?php 

namespace App\Models;

use MF\Model\Model;
use PDO;

class Aluno extends Model{

    public function getAlunos() {
        $query = "SELECT Matricula, Nome, DataNasc FROM N_Alunos LIMIT 0,20";
        return $this->db->query($query)->fetchAll();
    }
}