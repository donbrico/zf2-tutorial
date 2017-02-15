<?php

namespace Album;

use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
		'controller' => [
			'classes' => [
				'album/album' => 'Album\Controller\AlbumController',
			],
		],
		'router' => [
			'routes' => [
				'album' => [
					'type'    => 'segment',
					'options' => [
						'route'    => '/album[/:action][/:id]',
						'constraints' => [
							'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
							'id' => '[0-9]+',
						],
						'defaults' => [
							'controller' => 'album',
							'action'     => 'index',
						],
					],
				],
			],
		],
		'view_manager' => [
			'template_path_stack' => [
					__DIR__ . '/../view',
			],
		],
];
