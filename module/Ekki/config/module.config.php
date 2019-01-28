<?php
/**
 * Created by PhpStorm.
 * User: Suellen
 * Date: 26/01/2019
 * Time: 19:30
 */

namespace Ekki;
use Zend\Router\Http\Segment;
use function PHPSTORM_META\type;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'controllers' => [
        'factories' => [
            Controller\EkkiController::class => InvokableFactory::class
        ],
    ],

    'router' => [
        'routes' => [
            'ekki' => array(
                'type'    => Segment::class,
                'options' => array(
                    'route'    => '/ekki[/:action[/:id]]',
                    'constrains' => [
                        'action' => '[a-zA-z][a-zA-z0-9_-]*',
                        'id' => '[0-9]+'
                    ],
                    'defaults' => array(
                        'controller'    => Controller\EkkiController::class,
                        'action'        => 'index',
                    ),
                ),
            ),
        ]
    ],

    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ]
    ]
];
