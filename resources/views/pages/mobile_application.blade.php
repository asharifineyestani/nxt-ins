@extends('layouts.master')
@section('content')
    @include('sections.hero.mobile')


    <section class="section section-features section-features-1">
        <header class="el-heading el-heading-2">
            <h2 class="el-big-title">
                <div>

                    @for ($i = 1; $i < 10; $i++)
                        <div>
                            <span>تعهد ما</span>
                        </div>
                    @endfor
                </div>
            </h2>
        </header>

        <div class="pb-space">
            <div class="container">
                <div class="row row-0">
                    <!--Item-->
                    <div class="el-hover col-lg-4">
                        <a href="#">
                        </a><div class="el-feature bg-light-2"><a href="#">
                                <div class="icon aos-init aos-animate" data-aos="fade-in" data-aos-duration="1000">
                                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" class="o-icon o-icon--grow">
                                        <circle fill="#FFDA54" cx="40.5" cy="50" r="20.5" class="part--3" data-svg-origin="40.5 70.5" transform="matrix(1,0,0,1,0,0)" style="transform-origin: 0px 0px;"></circle>
                                        <circle fill="#0099FF" cx="40.5" cy="56" r="14.5" class="part--2" data-svg-origin="40.5 70.5" transform="matrix(1,0,0,1,0,0)" style="transform-origin: 0px 0px;"></circle>
                                        <circle fill="#F9B8C4" cx="40.5" cy="62" r="8.5" class="part--1" data-svg-origin="40.5 70.5" transform="matrix(1,0,0,1,0,0)" style="transform-origin: 0px 0px;"></circle>
                                    </svg>
                                </div>
                                <h3><span>تحویل</span><br><span>سریع</span></h3>
                                <p>ما با مجموعه ابزارهایی که در دست داریم می دانیم که در هر یک از مراحل بک-اند , فرانت-اند و تجربه کاربری, چگونه پروژه ی خود را در کمترین زمان ایجاد نماییم.</p>
                            </a><a href="#" class="button button-circle button-circle-lg">
                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.67822 6.22341L11.1497 6.2234M11.1497 6.2234L6.14743 11.2819M11.1497 6.2234L6.14743 1.08191" stroke="#1E2432" stroke-width="2" stroke-linecap="round"></path>
                                </svg>
                            </a>
                        </div>

                    </div>
                    <!--/-->
                    <!--Item-->
                    <div class="el-hover col-lg-4">
                        <a href="#">
                        </a><div class="el-feature"><a href="#">
                                <div class="icon aos-init aos-animate" data-aos="fade-in" data-aos-duration="1000">
                                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" class="o-icon o-icon--exchange">
                                        <path fill="#37C99E" d="M51.8,43.2L24.3,59.1V27.4L51.8,43.2z" class="part--1" data-svg-origin="24.299999237060547 43.249999046325684" transform="matrix(1,0,0,1,0,0)" style="transform-origin: 0px 0px;"></path>
                                        <path fill="#FFDA54" d="M40.3,61.2l27.5,15.9V45.4L40.3,61.2z" class="part--2" data-svg-origin="67.80000305175781 61.25" transform="matrix(1,0,0,1,0,0)" style="transform-origin: 0px 0px;"></path>
                                    </svg>
                                </div>
                                <h3><span>رابط کاربری </span><br><span>انعطاف پذیر</span></h3>
                                <p>تمرکز ما بر روی تجربه کاربری native است. طراحی ماژولار و معماری لایه ای ما اجازه می دهد تا تغییرات را بسیار سریع انجام دهیم که منجر به طراحی های رسا و قابل توجه تر می شود.</p>
                            </a><a href="#" class="button button-circle button-circle-lg">
                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.67822 6.22341L11.1497 6.2234M11.1497 6.2234L6.14743 11.2819M11.1497 6.2234L6.14743 1.08191" stroke="#1E2432" stroke-width="2" stroke-linecap="round"></path>
                                </svg>
                            </a>
                        </div>

                    </div>
                    <!--/-->
                    <!--Item-->
                    <div class="el-hover col-lg-4">
                        <a href="#">
                        </a><div class="el-feature bg-light-2"><a href="#">
                                <div class="icon aos-init aos-animate" data-aos="fade-in" data-aos-duration="1000">
                                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" class="o-icon o-icon--magnifying-glass" style="transform-origin: 39.22% 47.02%; transform: translate(0px, 0px);">
                                        <defs>
                                            <mask id="o-icon__mask__magnifying-glass--2">
                                                <path fill="#fff" d="M43.2,57l7.1-7l15.1,15l-7.1,7L43.2,57z" class="part--1" data-svg-origin="39.22 47.02" transform="matrix(1,0,0,1,0,0)" style="transform-origin: 0px 0px;"></path>
                                            </mask>
                                        </defs>
                                        <path fill="#FFDA54" d="M43.2,57l7.1-7l15.1,15l-7.1,7L43.2,57z" class="part--1" data-svg-origin="39.22 47.02" transform="matrix(1,0,0,1,0,0)" style="transform-origin: 0px 0px;"></path>
                                        <path fill="#0099FF" d="M25.9,33.2c7.7-7.7,20.2-7.7,28,0c7.7,7.7,7.7,20.1,0,27.7c-7.7,7.7-20.2,7.7-28,0C18.2,53.2,18.2,40.8,25.9,33.2z" class="part--2" data-svg-origin="39.22 47.02" transform="matrix(1,0,0,1,0,0)" style="transform-origin: 0px 0px;"></path>
                                        <g mask="url(#o-icon__mask__magnifying-glass--2)">
                                            <path fill="#1A49BA" d="M25.9,33.2c7.7-7.7,20.2-7.7,28,0c7.7,7.7,7.7,20.1,0,27.7c-7.7,7.7-20.2,7.7-28,0C18.2,53.2,18.2,40.8,25.9,33.2z" class="part--2" data-svg-origin="39.22 47.02" transform="matrix(1,0,0,1,0,0)" style="transform-origin: 0px 0px;"></path>
                                        </g>
                                    </svg>
                                </div>
                                <h3><span>کارایی</span><br><span>فوق العاده</span></h3>
                                <p>ما برای رسیدن به بالاترین کارایی native حتی به کوچکترین وجوه تمایز هر یک از پلتفرم های IOS و اندروید نظیر اسکرول, نویگیشن و جلوه های بصری توجه می کنیم.</p>
                            </a><a href="#" class="button button-circle button-circle-lg">
                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.67822 6.22341L11.1497 6.2234M11.1497 6.2234L6.14743 11.2819M11.1497 6.2234L6.14743 1.08191" stroke="#1E2432" stroke-width="2" stroke-linecap="round"></path>
                                </svg>
                            </a>
                        </div>

                    </div>
                    <!--/-->
                </div>
            </div>
        </div>
    </section>


    <x-storyMobile/>




    @include('sections.cta.call')
@endsection
