<?php

namespace Paciente\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class PacienteController extends AbstractActionController{

    private $table;

    public function __construct($table){
        //$this->table = new PacienteTable();
        $this->table = $table;
    }

    public function indexAction()
    {
        return new ViewModel(['pacientes' => $this->table->getPacientes()]);
    }

}