<?php

namespace App\Controllers;

use MF\Controller\Action;

use stdClass;

class indexController extends Action {
    
    public function index() {
        $this->view->dados = array("sala 1" => "1AF", "sala 2" => "2AF", "sala 3" => "3AF");
        $this->render('index','layout1');
    }

    public function sobreNos() {
        $this->view->dados = array("sala 4" => "4AF", "sala 5" => "5AF", "sala 6" => "6AF");
        $this->render('sobreNos','layout2');
    }   

    public function loja() {
        $this->view->dados = array("sala 7" => "7AF", "sala 8" => "8AF", "sala 9" => "9AF");
        $this->render('loja','layout3');
    }  
}

?>
