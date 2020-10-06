@formField('input', [
    'name' => 'title',
    'label' => 'Nome',
    'maxlength' => 100
])

@formField('input', [
    'name' => 'subtitle',
    'type' => 'textarea',
    'label' => 'Subtítulo',
    'maxlength' => 250,
    'rows' => 4
])

@formField('input', [
    'name' => 'description',
    'type' => 'textarea',
    'label' => 'Descrição',
    'maxlength' => 250,
    'rows' => 4
])

@formField('medias', [
    'name' => 'cover',
    'label' => 'Imagem',
])

@formField('input', [
    'name' => 'btn_title',
    'label' => 'Título do botão',
    'maxlength' => 100,
])

@formField('hidden', [
    'name' => 'type',
    'value' => \App\Models\TreatmentType::SPECIALIZED
])