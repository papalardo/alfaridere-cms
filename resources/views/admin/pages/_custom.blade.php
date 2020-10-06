@extends('twill::layouts.form')

@section('contentFields')
    @formField('block_editor', [
        'label' => 'Elementos',
        'blocks' => ['competencies', 'pre_scheduling', 'experts', 'text_image', 'text_button', 'images_gallery', 'about_business', 'title_with_shadow']
    ])
    
@stop
