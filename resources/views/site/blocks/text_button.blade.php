<section id="odontology-of-sleep">
    <div class="grid-container">
        <div class="content">
            <div class="grid-x">
                <div class="cell medium-8">
                    <div class="grid-y">
                        <div class="cell">
                            <h3 class="main__title">{{ $block->input('title') }}</h3>
                        </div>
                        <div class="cell text-white">
                            {!! $block->input('description') !!}
                        </div>
                    </div>
                </div>
                <div class="cell medium-4 flex-center ebook-container">
                    <a href="{{ $block->input('btn_url') }}" class="button default" target="_blank">
                        {{ $block->input('btn_title') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>