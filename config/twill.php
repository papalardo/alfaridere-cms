<?php

return [
    'enabled' => [
        'users-management' => true,
        'media-library' => true,
        'file-library' => true,
        'block-editor' => true,
        'buckets' => true,
        'users-image' => false,
        'settings' => true,
        'dashboard' => true,
        'search' => true,
        'users-description' => false,
        'activitylog' => true,
        'users-2fa' => false,
        'users-oauth' => false,
    ],

    'file_library' => [
        'disk' => 'public',
        'endpoint_type' => 'local', ///<------
        'cascade_delete' => env('FILE_LIBRARY_CASCADE_DELETE', false),
        'local_path' => env('FILE_LIBRARY_LOCAL_PATH'),
        'file_service' => A17\Twill\Services\FileLibrary\Disk::class, ///<------
        'acl' => env('FILE_LIBRARY_ACL', 'public-read'),
        'filesize_limit' => env('FILE_LIBRARY_FILESIZE_LIMIT', 50),
        'allowed_extensions' => ['woff'],
    ],

    'block_editor' => [
        'repeaters' => [
            'competency_item' => [
                'title' => 'Competência',
                'trigger' => 'Adicionar competência',
                'component' => 'a17-block-competency_item'
            ],
            'slider_item' => [
                'title' => 'Slider',
                'trigger' => 'Adicionar slider',
                'component' => 'a17-block-slider_item'
            ],
            'experts_item' => [
                'title' => 'Especialistas',
                'trigger' => 'Adicionar especialista',
            ],
            'treatment_item_specialized' => [
                'title' => 'Tratamento Especializado',
                'trigger' => 'Adicionar tratamento',
            ],
            'treatment_item_aesthetic' => [
                'title' => 'Tratamento Estético',
                'trigger' => 'Adicionar tratamento',
            ],
        ],
        'blocks' => [
            'title_with_shadow' => [
                'title' => 'Título com text-sombra',
                'icon' => 'content-editor',
            ],
            // 'basic/title_with_shadow' => [
            //     'title' => 'Nested basic Título com text-sombra',
            //     'icon' => 'content-editor',
            // ],
            'basic.title_with_shadow' => [
                'title' => 'Nested Título com text-sombra',
                'icon' => 'content-editor',
            ],
            'about_business' => [
                'title' => 'Sobre a empresa',
                'icon' => 'content-editor',
            ],
            'competencies' => [
                'title' => 'Competências',
                'icon' => 'content-editor',
                'component' => 'a17-block-competencies'
            ],
            'competency_item' => [
                'title' => 'Competência',
                'trigger' => 'Adicionar competência',
                'component' => 'a17-block-competency_item'
            ],
            'pre_scheduling' => [
                'title' => 'Pré agendamento',
                'icon' => 'content-editor',
                'component' => 'a17-block-pre_scheduling'
            ],
            'experts' => [
                'title' => 'Especialistas',
                'icon' => 'content-editor',
            ],
            'text_image' => [
                'title' => 'Texto - Imagem',
                'icon' => 'content-editor',
            ],
            'text_button' => [
                'title' => 'Texto - Botão',
                'icon' => 'content-editor',
            ],
            'text_button_download' => [
                'title' => 'Texto - Botão',
                'icon' => 'content-editor',
            ],
            'images_gallery' => [
                'title' => 'Galeria de imagens',
                'icon' => 'content-editor',
            ],
        ],
        'crops' => [
            'image' => [
                'desktop' => [
                    [
                        'name' => 'desktop',
                        'ratio' => 16 / 9,
                    ],
                ],
            ],
            'image_profile' => [
                'desktop' => [
                    [
                        'name' => 'desktop',
                        'ratio' => 3 / 4,
                    ],
                ],
            ],
            'about_business' => [
                'desktop' => [
                    [
                        'name' => 'desktop',
                        'ratio' => 16 / 9,
                        'minValues' => [
                            'width' => 100,
                            'height' => 100,
                        ],
                    ],
                ],
            ],
        ],
    ]
];
