<?php 

namespace MF\Controller;

abstract class Action {
    
    protected $view;
    private $classeAtual;

    public function __construct() {
        $this->view = new \stdClass();
    }

    protected function render($view) {
        $this->setClassAtual();
        require_once "../App/Views/".$this->getClassAtual()."/".$view.".phtml";
    }

    protected function setClassAtual() {
        $classeAtual = get_class($this);
        $classeAtual = str_replace('App\\Controllers\\','', $classeAtual);
        $classeAtual = strtolower(str_replace('Controller','', $classeAtual));
        $this->classeAtual = $classeAtual;
    }

    protected function getClassAtual() {
        return $this->classeAtual;
    }
}