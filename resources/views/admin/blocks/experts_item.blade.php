@formField('input', [
    'name' => 'doctor_name',
    'label' => 'Nome',
    'maxlength' => 100
])

@formField('input', [
    'name' => 'doctor_license',
    'label' => 'Nr. Registro',
    'maxlength' => 100
])

@formField('input', [
    'name' => 'doctor_description',
    'type' => 'textarea',
    'label' => 'Descrição',
    'maxlength' => 250,
    'rows' => 4
])

@formField('medias', [
    'name' => 'image_profile',
    'label' => 'Foto',
])