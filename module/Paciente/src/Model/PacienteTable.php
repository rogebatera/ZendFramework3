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

}