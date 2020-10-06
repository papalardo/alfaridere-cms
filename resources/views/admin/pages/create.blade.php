@formField('input', [
    'name' => 'title',
    'label' => 'title',
    'maxlength' => 100
])

@formField('select', [
    'name' => 'template',
    'label' => 'Template',
    'options' => [
        [
            'value' => 'home',
            'label' => 'Página inicial'
        ],
        [
            'value' => 'treatment_specialized',
            'label' => 'Tratamento especializado'
        ],
        [
            'value' => 'treatment_aesthetic',
            'label' => 'Tratamento estético'
        ],
        [
            'value' => 'kids',
            'label' => 'Kids'
        ],
        [
            'value' => 'custom',
            'label' => 'Personalizado'
        ],
    ]
])

@formField('input', [
    'name' => 'slug',
    'label' => 'Slug',
    'maxlength' => 100
])