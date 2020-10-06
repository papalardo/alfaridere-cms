@extends('site.layouts.main')

@section('content')
    <section id="kids">
        <div class="grid-container full-height">
            <div class="grid-x align-center align-middle full-height" >
                <div class="cell">
                    <div class="parallax">
                        <!-- background parallax layer -->
                        <div class="parallax__layer parallax__layer--bg">
                            <?php foreach ($page->sliders as $slider): ?>
                                <div class="parallax__layer__cell parallax__layer__cell--bg">
                                    <?php if (!empty($slider['link'])): ?>
                                        <a href="<?php echo $slider['link'] ?>" title="<?php echo $slider['link_title'] ?>">
                                            <div class="caption">
                                                <h3>{{ $slider->title }}</h3>
                                                <p>{{ $slider->description }}</p>
                                            </div>
                                        </a>
                                    <?php else: ?>
                                        <div class="caption">
                                            <h3>{{ $slider->title }}</h3>
                                            <p>{{ $slider->description }}</p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="grid-wrap">
                            <div class="grid-item"></div>
                            <div class="grid-item"></div>
                            <div class="grid-item"></div>
                            <div class="grid-item"></div>
                            <div class="grid-item"></div>
                            <div class="grid-item"></div>
                            <div class="grid-item"></div>
                            <div class="grid-item"></div>
                            <div class="grid-item"></div>
                            <div class="grid-item"></div>
                            <div class="grid-item"></div>
                            <div class="grid-item"></div>
                            <div class="grid-item"></div>
                            <div class="grid-item"></div>
                            <div class="grid-item"></div>
                            <div class="grid-item"></div>
                            <div class="grid-item"></div>
                            <div class="grid-item"></div>
                            <div class="grid-item"></div>
                            <div class="grid-item"></div>
                            <div class="grid-item"></div>
                            <div class="grid-item"></div>
                            <div class="grid-item"></div>
                            <div class="grid-item"></div>
                        </div>
                        <div class="carousel">
                            <?php foreach ($page->sliders as $slider): ?>
                                <div class="carousel-cell">
                                    <?php if (!empty($slider['link'])): ?>
                                        <a href="<?php echo $slider['link'] ?>" title="<?php echo $slider['link_title'] ?>">
                                            <div class="image">
                                                <img src="{{ $slider->image('image') }}" alt="<?php echo $slider['image_alt'] ?? '' ?>" />
                                            </div>
                                        </a>
                                    <?php else: ?>
                                        <div class="image">
                                            <img src="{{{ $slider->image('image', 'desktop') }}}" alt="<?php echo $slider['image_alt'] ?? '' ?>" />
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="scroll__down">
                    <a href="#sobre" class="scrollto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="55.718" height="29.828" viewBox="0 0 55.718 29.828">
                        <g id="right-arrow" transform="translate(62.218 -33.4) rotate(90)">
                            <path id="Caminho_31" data-name="Caminho 31" d="M36.762,61.642a1.971,1.971,0,0,1-2.786,0,1.971,1.971,0,0,1,0-2.786l24.5-24.5-24.5-24.5a1.97,1.97,0,1,1,2.786-2.786l25.89,25.89a1.971,1.971,0,0,1,0,2.786Z" transform="translate(0 0)" fill="#5cade3"/>
                        </g>
                    </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="servicos">
        {!! $page->renderBlocks(false) !!}
    </section>
@endsection