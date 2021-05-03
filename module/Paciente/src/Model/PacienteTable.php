<?php

namespace Paciente\Model;

use Zend\Db\TableGateway\TableGatewayInterface;
use RuntimeException;

class PacienteTable {
    
    private $tableGateway;

    public function __construct(TableGatewayInterface $tableGateway){
        $this->tableGateway = $tableGateway;
    }

    public function getAll(){
        return $this->tableGateway->select();
    }

    public function getPacientes(){
        $sqlSelect = $this->tableGateway->getSql()->select();
        /*$sqlSelect->columns(array(
            'nome', 'id'
        ));*/
        $sqlSelect->join('contato_paciente', 'contato_paciente.paciente_id = paciente.id', '*', 'left');   
        $resultSet = $this->tableGateway->selectWith($sqlSelect);
        return $resultSet;
    }

}