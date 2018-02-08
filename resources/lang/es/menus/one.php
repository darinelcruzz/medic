<?php

return [
    'example1' => [
        'title' => 'Ejemplo 1',
        'icon' => 'fa fa-user',
        'route' => 'home'
    ],

    'example2' => [
        'title' => 'Ejemplo 2',
        'icon' => 'fa fa-plus',
        'submenu' => [
            'submenu1' => [
                'title' => 'Submenu 1',
                'route' => 'home'
            ],
            'submenu2' => [
                'title' => 'Submenu 2',
                'route' => 'home'
            ]
        ]
    ],

    'example3' => [
        'title' => 'Ejemplo 3',
        'icon' => 'fa fa-minus',
        'submenu' => [
            'submenu1' => [
                'title' => 'Submenu 3',
                'route' => 'home'
            ],
            'submenu2' => [
                'title' => 'Submenu 4',
                'route' => 'home'
            ]
        ]
    ],
];
