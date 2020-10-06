<?php

return [
    // 'homePages' => [
    //     'title' => 'Página Inicial',
    //     'module' => true
    // ],
    'pages' => [
        'title' => 'Páginas',
        'raw' => true,
        'route' => '/pages/1/edit',
        'primary_navigation' => [
            'home_page' => [
                'raw' => true,
                'title' => 'Página inicial',
                'route' => '/pages/1/edit'
            ],
            'treatment_specialized' => [
                'raw' => true,
                'title' => 'Tratamentos especializados',
                'route' => '/pages/2/edit'
            ],
            'treatment_aesthetic' => [
                'raw' => true,
                'title' => 'Tratamentos estéticos',
                'route' => '/pages/3/edit'
            ],
        ]
    ],

    

    // 'treatment' => [
    //     'title' => 'Tratamentos',
    //     'route' => 'admin.template.index',
    //     //'module' => true,
    //     'primary_navigation' => [
    //         'localities' => [
    //             'title' => 'Localities',
    //             //'module' => true,
    //             'route' => 'admin.localities.index',
    //             'params' => ['section' => 'localities'],
    //         ],
    //         'stores' => [
    //             'title' => 'Stores',
    //             //'module' => true,
    //             'route' => 'admin.stores.index',
    //             'params' => ['section' => 'template'],
    //         ],
    //     ],
    // ],
];
