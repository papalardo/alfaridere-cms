<section id="especialistas">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell">
                <h3 class="main__title">{{ $block->input('title') }}</h3>
            </div>
        </div>
        <div class="grid-x grid-padding-x">
            @foreach($block->children as $child)
                <div class="cell small-4">
                    @include('site.blocks.experts_item', ['block' => $child])
                </div>
            @endforeach
        </div>
    </div>
</section>
