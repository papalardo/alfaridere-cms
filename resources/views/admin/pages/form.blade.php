@if(in_array($item->template, ['home', 'treatment_specialized', 'treatment_aesthetic', 'kids']))
    @php 
        $view = "admin/pages/_{$item->template}"; 
        throw_if(!View::exists($view), new Exception("Template [{$view}] not exists", 500))
    @endphp
    @include($view)
@else 
    
    @formField('input', [
        'name' => 'slug',
        'label' => 'Slug',
        'maxlength' => 100
    ])

    @include("admin/pages/_custom")
@endif
    