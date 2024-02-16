<?php

namespace App\Controllers;

use stdClass;

class indexController {

    private $classe;
    private $view;

    public function __construct() {
        $this->view = new \stdClass();
    }
    
    public function index() {
        $this->view->dados = array("sala 1" => "1AF", "sala 2" => "2AF", "sala 3" => "3AF");
        $this->render('index');
    }

    public function sobreNos() {
        $this->view->dados = array("sala 4" => "4AF", "sala 5" => "5AF", "sala 6" => "6AF");
        $this->render('sobreNos');
    }

    public function render($view) {
        $this->setClassAtual();
        require_once "../App/Views/".$this->getClassAtual()."/".$view.".phtml";
    }

    public function setClassAtual() {
        $classeAtual = get_class($this);
        $classeAtual = str_replace('App\\Controllers\\','', $classeAtual);
        $classeAtual = strtolower(str_replace('Controller','', $classeAtual));
        $this->classe = $classeAtual;
    }

    public function getClassAtual() {
        return $this->classe;
    }

}

