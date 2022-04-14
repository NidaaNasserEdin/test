<?php

return [
    'dashboard' => [
        'title' => 'Dashboard',
        'icon' => 'far fa-circle nav-icon',
        'route' => '/dashboard',
    ],
    'page' => [
        'title' => 'Page',
        'icon' => 'far fa-circle nav-icon',
        'route' => '/dashboard/page',
    ],
    'users' => [
        'title' => 'Users',
        'icon' => 'far fa-circle nav-icon',
        'route' => '/dashboard/users',
    ],
    'boxes' => [
        'title' => 'Boxes',
        'icon' => 'far fa-circle nav-icon',
        'route' => '/dashboard/boxes',
    ],
    'packages' => [
        'title' => 'Packages',
        'icon' => 'far fa-circle nav-icon',
        'route' => '/dashboard/packages',
        'badge' => [
            'class' => 'primary',
            'label' => 'New'
        ]
    ],
    'settings' => [
        'title' => 'Settings',
        'icon' => 'far fa-circle nav-icon',
        'route' => '/dashboard/settings',
        'badge' => null,
    ]
];
