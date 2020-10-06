<div class="grid-x grid-padding-x grid-margin-y medium-padding-collapse">
    <div class="cell small-6">
        <figure class="card--effect">
            <img data-depth="-0.5" src="{{ $block->image('image_profile', 'desktop') }}" alt="Dra. Leticia Renhe">
            <span data-depth="0.1" class="layer"></span>
            <span data-depth="0.3" class="layer"></span>
            <span data-depth="0.4" class="layer"></span>
            <span data-depth="0.6" class="layer"></span>
            <span data-depth="0.8" class="layer"></span>
        </figure>
    </div>
    <div class="cell small-6" style="position: relative">
        <div class="especialista__information">
            <div class="name">
                <h4>{{ $block->input('doctor_name') }}</h4>
            </div>
            <div class="details">
                <h5>{{ $block->input('doctor_license') }}</h5>
                {!! $block->input('doctor_description') !!}
            </div>
        </div>
    </div>
</div>