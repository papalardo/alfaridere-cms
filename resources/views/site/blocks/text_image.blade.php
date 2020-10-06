<section id="team">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-7">
                <div class="grid-y">
                    <div class="cell">
                        <h3 class="main__title">{{ $block->input('title') }}</h3>
                    </div>
                    <div class="cell">
                        {{ $block->input('description') }}
                    </div>
                </div>
            </div>
            <a class="cell medium-5 photo_container" href="{{ $block->image('image', 'desktop') }}">
                <img src="{{ $block->image('image', 'desktop') }}" alt="Foto do time">
            </a>
        </div>
    </div>
</section>