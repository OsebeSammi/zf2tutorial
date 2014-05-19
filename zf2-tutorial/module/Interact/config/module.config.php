<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Interact\Controller\Interact' => 'Interact\Controller\InteractController',
        ),
    ),


    'router' => array(
        'routes' => array(
            'interact' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/interact',
                    'defaults' => array(
                        'controller' => 'Interact\Controller\Interact',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),



    'view_manager' => array(
        'template_path_stack' => array(
            'interact' => __DIR__ . '/../view',
        ),
    ),
);