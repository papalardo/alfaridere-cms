<section id="unicos">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell small-10 small-text-center ">
                <h3 class="main__title">{{ $block->input('title') }}</h3>
            </div>
        </div>
        <div class="grid-x grid-padding-x grid-margin-y medium-up-2 unicos__grid align-center">
            @foreach($block->children as $child)
                @include('site.blocks.competency_item', ['block' => $child])
            @endforeach
        </div>
    </div>
</section>