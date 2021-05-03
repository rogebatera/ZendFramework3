<?php

namespace Paciente;

use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;
use Paciente\Controller\PacienteController;

class Module implements ConfigProviderInterface {

    public function getConfig()
    {
        return include __DIR__."/../config/module.config.php";     
    }

    public function getServiceConfig(){
        return [
            'factories' => [
                Model\PacienteTable::class => function($container){
                    $tableGateway = $container->get(Model\PacienteTableGateway::class);
                    return new Model\PacienteTable($tableGateway); 
                },
                Model\PacienteTableGateway::class => function($container){
                    $dbAdapter = $container->get(AdapterInterface::class);
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new Model\Paciente());
                    return new TableGateway('paciente',$dbAdapter,null,$resultSetPrototype);
                },
            ]
        ];
    }
    public function getControllerConfig(){
        return [
            'factories' => [
                PacienteController::class => function($container){
                    $tableGateway = $container->get(Model\PacienteTable::class);
                    return new PacienteController($tableGateway);
                },
            ]
        ];
    }

}