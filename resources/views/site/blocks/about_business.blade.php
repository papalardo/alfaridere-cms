<section id="sobre" class="block_body">
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-center">
            <div class="cell small-10 small-text-center medium-7">
                <h2>A Alfa Ridere</h2>
                <h1>{{ $block->input('title') }}</h1>
                <p><span>{{ $block->input('subtitle') }}</span></p>
                {!! $block->input('description') !!}
            </div>
            <div class="cell medium-5 text-right">
                <figure>
                    <img src="{{ $block->image('image', 'desktop') }}" alt="A Alfa Ridere">
                </figure>
            </div>
        </div>
    </div>
</section>