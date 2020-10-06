@formField('input', [
    'name' => 'title',
    'label' => 'Título',
    'maxlength' => 200
])

@formField('input', [
    'name' => 'description',
    'type' => 'textarea',
    'label' => 'Descrição',
    'rows' => 4
])

@formField('files', [
    'name' => 'file',
    'label' => 'File para download',
])