<?php
return [
    'controlWindow' => [
        'type' => 2,
        'description' => 'Управление окном',
    ],
    'viewAdminPage' => [
        'type' => 2,
        'description' => 'Просмотр страницы админа',
    ],
    'operator' => [
        'type' => 1,
        'children' => [
            'ControlWindow',
            'window',
            'Index'
        ],
    ],
    'admin' => [
        'type' => 1,
        'children' => [
            'viewAdminPage',
            'operator',
            'Index',
            'Create'
        ],
    ],
    'createTicket' => [
        'type' => 2,
        'description' => 'Создание билета',
    ],
    'window' => [
        'type' => 1,
        'children' => [
            'createTicket',
        ],
    ],
];
