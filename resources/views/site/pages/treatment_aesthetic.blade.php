@extends('site.layouts.treatament', ['body_class' => 'fullpage__slideright'])

@section('content')

<section id="section">
    <h2 class="hide main__title">Tratamentos</h2>
    <div class="grid-container full">
        <div class="grid-x">
            <div class="cell medium-6">
                <div id="fullpage_section_two" class="fullpage__theme_two">
                    @foreach($page->treatments as $treatment)
                        <div class="section">
                            <div class="grid-container full-height">
                                <div class="grid-x full-height grid-padding-x align-middle align-center">
                                    <div class="cell medium-10 text-right">
                                        <h2 class="section__title">{{ $treatment->title }}</h2>
                                        <h3 class="section__description">{{ $treatment->subtitle }}</h3>
                                        <a class="section__anchor button rounded-outline" href="#odontologiadosono" >{{ $treatment->btn_title }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="cell medium-6">
                <div id="fullpage">
                    @foreach($page->treatments as $index => $treatment)
                        <div class="section" data-anchor="slide{{ $index }}" data-title="{{ $treatment->title }}">
                            <figure>
                                <img src="{{ $treatment->image('cover', 'desktop') }}" alt="">
                            </figure>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal__element" id="odontologiadosono">
    <div class="grid-container full">
        @foreach($page->treatments as $index => $treatment)
            <div class="grid-x">
                <div class="cell medium-5" style="overflow: hidden">
                    <figure class="modal__figure">
                        <img src="{{ $treatment->image('cover', 'desktop') }}" alt="">
                    </figure>
                </div>
                <div class="cell medium-7 align-self-middle">
                    <div class="modal__body">
                        <div class="grid-container">
                            <div class="grid-x grid-padding-x grid-padding-y grid-margin-y">
                                <div class="cell medium-2" >
                                    <a href="#" class="close__modal">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90.356 63.534">
                                            <path id="right-arrow-2" d="M29.512,5.63a3.2,3.2,0,1,1,4.554,4.508l-23.09,23.09H87.169a3.172,3.172,0,0,1,3.188,3.191,3.207,3.207,0,0,1-3.188,3.234H10.975L34.065,62.7a3.269,3.269,0,0,1,0,4.554,3.19,3.19,0,0,1-4.554,0L.956,38.7a3.136,3.136,0,0,1,0-4.508Z" transform="translate(0 -4.674)" fill="#fff"/>
                                        </svg>
                                    </a>
                                </div>
                                <div class="medium-10 cell">
                                    <h2>{{ $treatment->title }}</h2>
                                    <h3>{{ $treatment->subtitle }}</h3>
                                    {!! $treatment->description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection