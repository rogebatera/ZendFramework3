<?php

namespace Paciente;

use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [
            'paciente' => [
                'type'    => \Zend\Router\Http\Segment::class,
                'options' => [
                    'route' => '/paciente[/:action[/:id]]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+'
                    ],
                    'defaults' => [
                        'controller' => Controller\PacienteController::class,
                        'action'     => 'index'
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            //Controller\PacienteController::class => InvokableFactory::class,
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'paciente' => __DIR__ .'/../view',
        ],
    ],
    'db' => [
        'driver'   => 'Pdo_Mysql',
        'database' => 'flieger',
        'username' => 'root',
        'password' => '',
        'hostname' => 'localhost'
    ],
];