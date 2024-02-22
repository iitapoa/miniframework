<?php

namespace App\Controllers;

use MF\Controller\Action;
use App\Models\Aluno;
use App\Models\Info;
use MF\Model\Container;
use stdClass;

class indexController extends Action {
    
    public function index() {

        $aluno = Container::getModel('Aluno');
       
        $alunos = $aluno->getAlunos();

        $this->view->dados = $alunos;

        $this->render('index','layout1');
    }

    public function sobreNos() {
        $info = Container::getModel('Info');
       
        $mat = $info->getInfo();

        $this->view->dados = $mat;

        $this->render('sobreNos','layout2');
    }   

    public function loja() {
        $this->view->dados = array("sala 7" => "7AF", "sala 8" => "8AF", "sala 9" => "9AF");
        $this->render('loja','layout3');
    }  
}

?>
