<section class="section section-story section-story-right section-story-19">
    <header class="el-heading el-heading-2">
        <h2 class="el-big-title">
            <div>

                @for ($i = 1; $i < 10; $i++)
                    <div>
                        <span>{{$title}}</span>
                    </div>
                @endfor
            </div>
        </h2>
    </header>
    <div>
        <!--Item-->


        @foreach($items as $key => $item)
            <article class="el-item story-item">
                <div class="display-center">
                    <div class="container">
                        <div class="row row-0">
                            <div class="col-12 col-12 col-md-6 col-lg-6 col-story">
                                <div class="detail">
                                    <header class="el-heading el-heading-1">
                                        <h3>
                                            @foreach($item['title'] as $title)
                                                <span>{{$title}}</span><br/>
                                            @endforeach
                                        </h3>
                                        <p class="mb-50">{{$item['body']}}</p>
                                        <a href="#" class="button button-xl button-radius button-light">
                                            <span class="text">LEARN MORE</span>
                                        </a>
                                    </header>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="image bg-color-{{$key}}">
                    <div class="el-shape">
                        <div class="circle">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 377.06 377.06">
                                <g id="Layer_2" data-name="Layer 2">
                                    <g id="Layer_1-2" data-name="Layer 1">
                                        <circle class="cls-1" cx="188.53" cy="188.53" r="188.53"/>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </article>
    @endforeach




    <!--/-->
        <!--Item-->


    </div>
</section>
