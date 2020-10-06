@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'maxlength' => 100
    ])
    
@stop

@section('fieldsets')
    <a17-fieldset title="Sliders" id="sliders" :open="false">
        @formField('repeater', ['type' => 'slider_item'])
    </a17-fieldset>

    <a17-fieldset title="Elementos" id="elements" :open="false">
        @formField('block_editor', [
            'label' => 'Elementos',
            'blocks' => ['competencies', 'pre_scheduling', 'experts', 'text_image', 'text_button', 'images_gallery', 'about_business']
        ])
    </a17-fieldset>
@endsection