@formField('input', [
    'name' => 'title',
    'label' => 'Título',
    'maxlength' => 200
])

@formField('wysiwyg', [
    'name' => 'description',
    'label' => 'Descrição',
    'toolbarOptions' => [ [ 'header' => [1, 2, false] ], 'list-ordered', 'list-unordered', [ 'indent' => '-1'], [ 'indent' => '+1' ] ],
    'placeholder' => 'Descrição',
])
