@extends('layouts.master')
@section('content')
    @include('sections.hero.web')
    <x-portfolio/>

    <section class="section section-story section-story-19">
        <header class="el-heading el-heading-2">
            <h2 class="el-big-title">
                <div>

                    @for ($i = 1; $i < 10; $i++)
                        <div>
                            <span>فرآیند توسعه</span>
                        </div>
                    @endfor

                    <div>
                        <span>Why</span>
                        <span>Choose</span>
                        <span>Us</span>
                    </div>
                    <div>
                        <span>Why</span>
                        <span>Choose</span>
                        <span>Us</span>
                    </div>
                    <div>
                        <span>Why</span>
                        <span>Choose</span>
                        <span>Us</span>
                    </div>
                    <div>
                        <span>Why</span>
                        <span>Choose</span>
                        <span>Us</span>
                    </div>
                </div>
            </h2>
        </header>
        <div>
            <!--Item-->
            <article class="el-item story-item">
                <div class="display-center">
                    <div class="container">
                        <div class="row row-0">
                            <div class="col-12 col-12 col-md-6 col-lg-6 col-lg-6">
                                <div class="detail">
                                    <header class="el-heading el-heading-1">
                                        <h3><span>Monitor Reps</span><br /><span>in Real Time</span></h3>
                                        <p class="mb-50">From your web browser, perform live call monitoring and provide feedback during or after calls, for ongoing training and constant growth. Regardless of where your remote reps are located, you’re always in control.</p>
                                        <a href="#" class="button button-xl button-radius button-light">
                                            <span class="text">LEARN MORE</span>
                                        </a>
                                    </header>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="image bg-secondary-1">
                    <div class="el-shape">
                        <div class="circle">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 377.06 377.06">
                                <g id="Layer_2" data-name="Layer 2">
                                    <g id="Layer_1-2" data-name="Layer 1">
                                        <circle class="cls-1" cx="188.53" cy="188.53" r="188.53" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </article>
            <!--/-->
            <!--Item-->
            <article class="el-item story-item">
                <div class="display-center">
                    <div class="container">
                        <div class="row row-0">
                            <div class="col-12 col-12 col-md-6 col-lg-6 offset-md-6 offset-lg-6">
                                <div class="detail">
                                    <header class="el-heading el-heading-1">
                                        <h3><span>Monitor Reps</span><br /><span>in Real Time</span></h3>
                                        <p class="mb-50">From your web browser, perform live call monitoring and provide feedback during or after calls, for ongoing training and constant growth. Regardless of where your remote reps are located, you’re always in control.</p>
                                        <a href="#" class="button button-xl button-radius button-light">
                                            <span class="text">LEARN MORE</span>
                                        </a>
                                    </header>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="image bg-primary-1">
                    <div class="el-shape">
                        <div class="circle">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 377.06 377.06">
                                <g id="Layer_2" data-name="Layer 2">
                                    <g id="Layer_1-2" data-name="Layer 1">
                                        <circle class="cls-1" cx="188.53" cy="188.53" r="188.53" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </article>
            <!--/-->
            <!--Item-->
            <article class="el-item story-item">
                <div class="display-center">
                    <div class="container">
                        <div class="row row-0">
                            <div class="col-12 col-12 col-md-6 col-lg-6 col-lg-6">
                                <div class="detail">
                                    <header class="el-heading el-heading-1">
                                        <h3><span>Monitor Reps</span><br /><span>in Real Time</span></h3>
                                        <p class="mb-50">From your web browser, perform live call monitoring and provide feedback during or after calls, for ongoing training and constant growth. Regardless of where your remote reps are located, you’re always in control.</p>
                                        <a href="#" class="button button-xl button-radius button-light">
                                            <span class="text">LEARN MORE</span>
                                        </a>
                                    </header>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="image bg-color-1">
                    <div class="el-shape">
                        <div class="circle">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 377.06 377.06">
                                <g id="Layer_2" data-name="Layer 2">
                                    <g id="Layer_1-2" data-name="Layer 1">
                                        <circle class="cls-1" cx="188.53" cy="188.53" r="188.53" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </article>
            <!--/-->
        </div>
    </section>


    @include('sections.cta.call')
@endsection
