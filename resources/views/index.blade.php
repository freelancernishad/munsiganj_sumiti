@extends('layouts.master')
@section('content')
    <link href="{{ asset('admin_asset/ticker-style.css') }}" rel="stylesheet" type="text/css" />
    <style>
        .owl-nav {
            display: none;
        }

        .owl-carousel .owl-nav button.owl-next,
        .owl-carousel .owl-nav button.owl-prev,
        .owl-carousel button.owl-dot {
            background: 0 0;
            color: inherit;
            border: 0;
            padding: 0 !important;
            font: inherit;
            width: 10px;
            height: 10px;
            background: gray;
            margin: 3px;
            border-radius: 10px;
        }

        .owl-dots {
            text-align: center;
            padding: 2px 0px 9px 7px;
        }

        button.owl-dot.active {
            background: #e8292c;
        }

        .swiper-button-next:after,
        .swiper-button-prev:after {
            font-family: swiper-icons;
            font-size: 30px !important;
            text-transform: none !important;
            letter-spacing: 0;
            text-transform: none;
            font-variant: initial;
            line-height: 1;
            font-weight: 700 !important;
            color: black !important;
        }

        .committeeMore a:hover {
            color: #bebbbb;
        }

        .NoticeSeciton {
            background: #cbb105;
            /* padding: 25px 0px; */
            margin: 20px 0px;
            margin-top: 30px !important;
        }

        .noticeHead {
            background: #d02804;
            color: white;
            padding: 16px 19px;
            font-size: 45px;
        }

        .noticwe {
            font-size: 30px;
            color: white;
            display: flex;
            width: 100%;
        }
    </style>
    <main>
        <section class="hero_area">
            <div class="row p-0">
                <div class="col-md-3 sidebarmobile" style="">
                    <x-sidebar />
                </div>
                <div class="col-md-9" style="    margin-top: 15px;">
                    <div class="owl-carousel">
                        @foreach ($brand as $brandList)
                            <div class="item">
                                <img width="100%" src="{{ $brandList->image }}" alt="" />
                            </div>
                        @endforeach
                    </div>
                    <?php
                    // $adtop = $adtop[0]->image;
                    // $adtop = json_decode($adtop);
                    // foreach($adtop as $adtoplist){
                    ?>
                    <?php
                    //}
                    ?>
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            @foreach ($main as $mainList)
                                <div class="swiper-slide">
                                    <img width="100%" src="{{ $mainList->image }}" alt="" />
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-scrollbar"></div>
                    </div>
                    <div class="about-us-area section-padding-top" style="    padding-top: 30px !important;  ">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-3">
                                    <div class="heading mb-4">
                                        <h5>About Us</h5>
                                    </div>
                                </div>
                                <div class="col-xl-9 ">
                                    <div class="description">
                                        <p style="font-family: 'SolaimanLipi', sans-serif;">
                                            {{ Str::limit(settings()[0]->About, 200) }}
                                            <a href="{{ url('/about-us') }}">Read More</a>
                                        </p>
                                    </div>
                                </div>
                            </div> <!-- /.row-->
                        </div> <!-- /.container-->
                    </div> <!-- /.about-->
                    <div class="counter-area section-padding-top"
                        style="    padding-top: 50px !important;padding-bottom: 30px !important;">
                        <div class="container">
                            <div class="counter-shado">
                                <div class="row">
                                    <div class="col-xl-4 mb-3">
                                        <div class="counter">
                                            <div class="row g-0">
                                                <div class="col-xl-3">
                                                    <div class="counter-icon">
                                                        <i class="fas fa-users"></i>
                                                    </div>
                                                </div>
                                                <div class="col-xl-9">
                                                    <div class="counter-content">
                                                        <h5>LIVE <br> MEMBER</h5>
                                                        <p>5000</p>
                                                    </div>
                                                    <!-- /.counter-content -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.counter -->
                                    </div>
                                    <div class="col-xl-4 mb-3">
                                        <div class="counter">
                                            <div class="row g-0">
                                                <div class="col-xl-3">
                                                    <div class="counter-icon">
                                                        <i class="fas fa-users"></i>
                                                    </div>
                                                </div>
                                                <div class="col-xl-9">
                                                    <div class="counter-content">
                                                        <h5>CENTRAL <br> COMMITTEE</h5>
                                                        <p>{{ $membercommittee }}</p>
                                                    </div>
                                                    <!-- /.counter-content -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.counter -->
                                    </div>
                                    <div class="col-xl-4 mb-3">
                                        <div class="counter">
                                            <div class="row g-0">
                                                <div class="col-xl-3">
                                                    <div class="counter-icon">
                                                        <i class="fas fa-users"></i>
                                                    </div>
                                                </div>
                                                <div class="col-xl-9">
                                                    <div class="counter-content">
                                                        <h5>GLOBAL <br> COMMITTEE</h5>
                                                        <p>{{ $memberGlobalCommittee }}</p>
                                                    </div>
                                                    <!-- /.counter-content -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.counter -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="adsection">
            <div class="row">
                <?php
                $adbottom = $adbottom[0]->image;
                if($adbottom!=''){
                $adbottom = json_decode($adbottom);
                foreach($adbottom as $adbottomlist){
                ?>
                <div class="col-md-6 mt-3">
                    <a target="_blank" href="{{ $adbottomlist->url }}">
                        <img width="100%" src="{{ asset(env('FILE_PATH') . 'ad/' . $adbottomlist->name) }}" alt="" />
                    </a>
                </div>
                <?php
                }
            }
                ?>
            </div>
        </section>
        <div class="container" style="    padding: 50px 0px;">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 py-3 pt-3">
                    <h1 class="text-primary">Member Facilities</h1>
                    <div style="line-height: 1.5;">
                        <div style="line-height: 1.5;">
                            <div style="line-height: 1.5;"><span style="font-size: 18px; font-family: latoR;">1.
                                    ..............................</span></div>
                            <div style="line-height: 1.5;"><span style="font-size: 18px; font-family: latoR;">2.
                                    ..............................</span></div>
                            <div style="line-height: 1.5;"><span style="font-size: 18px; font-family: latoR;">3.
                                    ..............................</span></div>
                            <div><span style="font-size: 18px; font-family: latoR;">4.
                                    ...............................</span></div>
                            <div><span style="font-size: 18px; font-family: latoR;">5.
                                    ...............................</span>
                            </div>
                            <div><span style="font-size: 18px; font-family: latoR;">6.
                                    ...............................</span></div>
                            <div><span style="font-size: 18px; font-family: latoR;">7.
                                    ...............................</span></div>
                            <div><span style="font-size: 18px; font-family: latoR;">8.
                                    ...............................</span></div>
                        </div>
                        <div style="line-height: 1.5;">
                            <div></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                    <a class="" href="{{ url('register') }}"><img class=""
                            src="{{ asset('assets/img/member.png.gif') }}" alt=""></a>
                </div>
            </div>
        </div>
        <!-- news room -->
        <div class="news-room" style="background-image: url(https://bcs.org.bd/theme/assets/images/news/bg-news.png);">
            <div class="news-bg-color py-5">
                <div class="container">
                    <div class="news-border py-3">
                        <h4 class="text-center mt-2 mb-3">News Room</h4>
                        <div class="row">
                            @foreach ($latest4 as $latest4List)
                                <div class="col-lg-3 news-box mx-auto mt-5">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="news-content">
                                                <h5 class="mb-4">{{ $latest4List->title }}</h5>
                                                <p>
                                                    {!! Str::limit($latest4List->short_description, 80) !!}
                                                </p>
                                                <a href="{{ url('blogs?blog=' . $latest4List->postid) }}"
                                                    class="btn rounded-pill mt-4">Read
                                                    More →</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="news-all text-center mb-2 mt-5">
                            <a href="{{ url('blogs') }}" class="btn btn-outline-light rounded-pill mt-5 py-1 px-3">View
                                All News
                                →</a>
                        </div>
                    </div> <!-- /.news-border -->
                </div> <!-- /.container -->
            </div> <!-- /.news-bg-color -->
        </div> <!-- /.news-room -->


        <style>
            .committeeTitle {
                width: 250px;
                margin: 0 auto;
                border-bottom: 1px solid black;
                position: relative;
            }

            .committeeTitle:after {
                content: '';
                position: absolute;
                background: #ffffff00;
                top: -3px;
                left: 42px;
                border: 3px solid black;
                width: 100%;
                height: 41px;
                border-left: 0;
            }

            .committeeTitle:before {
                content: '';
                position: absolute;
                bottom: -8px;
                left: 42px;
                width: 3px;
                height: 7px;
                background: black;
            }

            .executiveT.text-center {
                height: 59px;
                display: flex;
                justify-content: center;
                align-items: center;
                margin: 29px 0;
            }

            h4.committeeTitlea:after {
                content: '';
                position: absolute;
                top: -3px;
                left: 42px;
                width: 71px;
                height: 3px;
                background: #ffffff;
                z-index: 9;
            }

            h4.committeeTitlea:before {
                content: '';
                position: absolute;
                top: -5px;
                left: 112px;
                width: 17px;
                height: 3px;
                background: #ffffff;
                z-index: 999;
                transform: rotate(-18deg);
            }

            img.cImage {
                border-radius: 50%;
                height: 150px;
                width: 150px;
                border: 3px solid silver;
                box-shadow: -12px -16px 0px 0px #d02804;
                left: 30px;
            }



            .committeeDetail {
                border: 2px solid #d02804;
                padding: 25px 0px 6px 37px;
                border-left: 0;
                position: relative;
            }

            .commTitle {
                position: absolute;
                top: -18px;
                left: 0px;
                background: #d02804;
                color: white;
                font-size: 19px;
                padding: 4px 19px;
                border-top-right-radius: 7px;
                border-bottom-right-radius: 7px;
            }



            .committeeDetail h6 {
                font-size: 22px;
            }

            .committeeimage {
                position: relative;
                width: 333px;
                height: 150px;
                z-index: 9;
            }

            img.cImage {
                position: absolute;
            }

            .commTitle:after {
                content: '';
                position: absolute;
                top: 0;
                left: -55px;
                width: 55px;
                height: 28px;
                background: #d02804;
            }



            img.cImager {
                border-radius: 50%;
                height: 150px;
                width: 150px;
                border: 3px solid silver;
                box-shadow: 9px -16px 0px 0px #d02804;
            }

            .committeeDetailr {
                border: 2px solid #d02804;
                padding: 25px 29px 6px 6px;
                border-right: 0;
                position: relative;
                text-align: right;
            }

            /*
            .committeeTitle:before {position: absolute;top: -18px;right: 0px;background: #d02804;color: white;font-size: 19px;padding: 4px 19px;border-top-left-radius: 7px;border-bottom-left-radius: 7px;} */

            .committeeDetailr h6 {
                font-size: 22px;
            }

            .committeeimager {
                position: relative;
                width: 266px;
                height: 150px;
                z-index: 9;
                left: -20px;
            }

            img.cImager {
                position: absolute;
            }

            .commTitler:after {
                content: '';
                position: absolute;
                top: 0;
                right: -55px;
                width: 55px;
                height: 28px;
                background: #d02804;
            }

            .commTitler {
                position: absolute;
                top: -18px;
                right: -8px;
                background: #d02804;
                color: white;
                font-size: 19px;
                padding: 4px 19px;
                border-top-left-radius: 7px;
                border-bottom-left-radius: 7px;
            }



            a.allcommiittee {
                border: 2px solid #e03318;
                text-decoration: none;
                padding: 10px 41px;
                border-radius: 17px;
                background: linear-gradient(90deg, #df3317 0%, transparent 16%, transparent 86%, #db3116 101%);
                color: #d93015;
                font-size: 20px;
                font-weight: 700;
                -webkit-transition: all 1s;
                -o-transition: all 1s;
                transition: all 1s;
                position: relative;
            }

            .allcommiittee:after {
                border-radius: inherit;
                display: block;
                width: 100%;
                height: 100%;
                content: '';
                position: absolute;
                top: 0;
                left: -5px;
                /* background: linear-gradient(135deg, #21d4fd 25%, #b721ff 75%); */
                /* background: -webkit-gradient(linear, left top, right top, from(#df3317), color-stop(16%, transparent), color-stop(86%, transparent),color-stop(101%, #db3116));
                background: -o-linear-gradient(left, #df3317 0%, transparent 16%, transparent 86%,#db3116 101%);
                background: linear-gradient(90deg, #df3317 0%, transparent 16%, transparent 86%,#db3116 101%); */
                -webkit-transition: all 1s;
                -o-transition: all 1s;
                background: #d02804;
                transition: all 0.5s;
                transform: scaleX(0);
                transform-origin: right;
                /* transform: translate(-25%, -25%); */
                z-index: -1;
                border-top-left-radius: 0;
                border-bottom-left-radius: 0;

            }


            .allcommiittee:before {

                border-radius: inherit;
                display: block;
                height: 100%;
                width: 100%;
                content: '';
                position: absolute;
                top: 0;
                left: 5px;
                background: #d02804;
                transition: all 0.5s;
                transform: scaleX(0);
                transform-origin: left;
                z-index: -1;

                border-top-right-radius: 0;
                border-bottom-right-radius: 0;

            }

            .allcommiittee:hover:before {

                transform: scaleX(0.5);
                left: 0px;

            }

            .allcommiittee:hover:after {

                transform: scaleX(0.5);
                left: 0px;

            }

            .allcommiittee:hover {
                /* -webkit-box-shadow: 0 0 35px rgba(0,0,0,0.3);
             box-shadow: 0 0 35px rgba(0,0,0,0.3); */
                color: white;
            }
        </style>

        <section class="committeeSeciton">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="executiveT text-center">
                            <div class="committeeTitle">
                                <h4 class="committeeTitlea">Executive Committee</h4>
                            </div>
                        </div>
                    </div>
                    @php
                        $i = 0;
                    @endphp
                    @foreach ($committee as $committeeList)
                        @if ($i == 0)
                            <div class="col-md-6 mt-5">
                                <div class="d-flex">
                                    <div class="committeeimage">
                                        <img class="cImage" width="120px" src="{{ $committeeList->image }}"
                                            alt="" />
                                    </div>
                                    <div class="committeeDetail">
                                        <div class="commTitle">{{ $committeeList->Designation }}</div>
                                        <h6>{{ $committeeList->name }}</h6>
                                        <p>{{ $committeeList->shortbio }}</p>
                                        <p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="col-md-6 mt-5">
                                <div class="d-flex">

                                    <div class="committeeDetailr">
                                        <div class="commTitler">{{ $committeeList->Designation }}</div>
                                        <h6>{{ $committeeList->name }}</h6>
                                        <p>{{ $committeeList->shortbio }}</p>
                                        <p>
                                        </p>
                                    </div>
                                    <div class="committeeimager">
                                        <img class="cImager" width="120px" src="{{ $committeeList->image }}"
                                            alt="" />
                                    </div>

                                </div>
                            </div>
                        @endif


                        @php
                            $i++;
                        @endphp
                    @endforeach


                    <div class="col-md-12 text-center mt-5 mb-5">

                        <a class="allcommiittee" href="{{ url('Committee') }}">Click for View All Committee Members</a>

                    </div>




                </div>
            </div>
        </section>





        {{-- <section class="committeeSeciton">
        <div class="row">
            <div class="col-md-12 mt-3 committeeBox">
                <div class="cus_container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h4 class="committeeTitlw">Executive Committee</h4>
                        </div>
                        @foreach ($committee as $committeeList)
                        <div class="col-md-5">
                            <div class="d-flex">
                                <img width="120px" src="{{ $committeeList->image }}" alt="" />
                                <div class="committeeDetails">
                                    <h6>{{ $committeeList->name }}</h6>
                                    <p>
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="col-md-2">
                            <div class="committeeMore">
                                <a href="{{ url('/Committee') }}"> More Details >> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section> --}}
        <section class="NoticeSeciton">
            <style>
                .news {
                    width: 204px;
                    padding: 27px 0 !important;
                    font-size: 25px;
                }

                .nab {
                    width: 159px;
                    padding: 27px 0 !important;
                    font-size: 25px;
                }

                .news-scroll a {
                    text-decoration: none;
                    font-size: 25px;
                }

                .dot {
                    height: 6px;
                    width: 6px;
                    margin-left: 3px;
                    margin-right: 3px;
                    margin-top: 2px !important;
                    background-color: rgb(207, 23, 23);
                    border-radius: 50%;
                    display: inline-block
                }

                .d-flex.justify-content-between.align-items-center.breaking-news.bg-white {
                    background: #cbb105 !important;
                }

                .d-flex.flex-row.flex-grow-1.flex-fill.justify-content-center.bg-danger.py-2.text-white.px-1.news,
                .d-flex.flex-row.flex-grow-1.flex-fill.justify-content-center.bg-danger.py-2.text-white.px-1.nab {
                    position: relative;
                    background: linear-gradient(to bottom, #d93015, #ff4324);
                    border-radius: 6px;
                }

                marquee.news-scroll {
                    border: 2px solid #da2e13;
                    padding: 17px 0;
                }

                .d-flex.flex-row.flex-grow-1.flex-fill.justify-content-center.bg-danger.py-2.text-white.px-1.news:after {
                    position: absolute;
                    top: -6px;
                    right: -7px;
                    background: #da2e13;
                    width: 15px;
                    height: 6px;
                    content: '';
                    border-top-right-radius: 10px;
                }

                .d-flex.flex-row.flex-grow-1.flex-fill.justify-content-center.bg-danger.py-2.text-white.px-1.news:before {
                    position: absolute;
                    bottom: -6px;
                    right: -7px;
                    background: #b31a01;
                    width: 17px;
                    height: 6px;
                    content: '';
                    border-bottom-right-radius: 10px;
                }

                .d-flex.justify-content-between.align-items-center.breaking-news.bg-white {
                    background: #ffffff !important;
                    /* margin: 0px; */
                }

                marquee.news-scroll {
                    border: 2px solid #da2e13;
                    border-left: 0;
                    border-right: 0;
                    padding: 25px 0;
                }

                .rainbowGradient {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    padding: 6px 0 6px 6px;
                    border-radius: 0px;
                    /* box-shadow: inset 0 0 3px 0px white, inset 0 0 0px 0px white; */
                    background: linear-gradient(to bottom, #da2e13, #b31a01);
                    border-top-left-radius: 9px;
                    border-bottom-left-radius: 9px;
                }

                .rainbowGradient2 {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    padding: 6px;
                    border-radius: 9px;
                    /* box-shadow: inset 0 0 3px 0px white, inset 0 0 0px 0px white; */
                    background: linear-gradient(to bottom, #da2e13, #b31a01);
                    /* border-top-left-radius: 9px;
                    border-bottom-left-radius: 9px; */
                }

                .fal.fa-bars.fa-fw {
                    transform: rotate(90deg)
                }

                div#newsTicker-249 {
                    display: flex;
                    background: white;
                    height: auto !important;
                    line-height: 0 !important;
                }

                .bn-news {
                    width: 74%;
                    line-height: 2.7;
                    font-size: 26px;
                    height: 80px;
                    border: 2px solid red;
                    margin-top: 6px;
                    border-left: 0;
                    border-right: 0;
                    overflow: hidden;
                }

                button.abtn {
                    background: transparent;
                    border: 0;
                    color: white;
                }
            </style>
            <div class="row">
                <div class="col-md-12">
                    <script src="https://d30fl32nd2baj9.cloudfront.net/js/new/breaking-news-ticker.min.js"></script>
                    <div class="breaking-news-ticker" id="newsTicker-249">
                        <div class="bn-label">
                            <div class="rainbowGradient">
                                <div
                                    class="d-flex flex-row flex-grow-1 flex-fill justify-content-center bg-danger py-2 text-white px-1 news">
                                    <span class="d-flex align-items-center">&nbsp;Notice <i class="fas fa-bell fa-fw"
                                            style="font-size:25px"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="bn-news">
                            <ul>
                                <?php $n = 1; ?>
                                @foreach (notices() as $noticesList)
                                    <li><span class="dot"></span>
                                        <a href="javascript:void(0)">{{ $noticesList->dec }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="bn-controls">
                            <div class="rainbowGradient2">
                                <div
                                    class="d-flex flex-row flex-grow-1 flex-fill justify-content-center bg-danger py-2 text-white px-1 nab">
                                    <span class="d-flex align-items-center">&nbsp;
                                        <button class="abtn"><span class="bn-prev"><i
                                                    class="fas fa-caret-left fa-fw"
                                                    style="font-size:25px"></i></span></button>
                                        <button class="abtn"><span class="bn-action"><i
                                                    class="fal fa-bars fa-fw" style=""></i></span></button>
                                        <button class="abtn"><span class="bn-next"><i
                                                    class="fas fa-caret-right fa-fw"
                                                    style="font-size:25px"></i></span></button>
                                    </span>
                                </div>
                            </div>
                            {{-- <button><span class="bn-prev">pre</span></button>
                        <button><span class="bn-action">puse</span></button>
                        <button><span class="bn-next">next</span></button> --}}
                        </div>
                    </div>
                    <script type="text/javascript">
                        $(document).ready(function($) {
                            $('#newsTicker-249').breakingNews();
                        });
                    </script>
                    {{-- <div class="d-flex justify-content-between align-items-center breaking-news bg-white">
                    <div class="rainbowGradient">
                        <div
                            class="d-flex flex-row flex-grow-1 flex-fill justify-content-center bg-danger py-2 text-white px-1 news">
                            <span class="d-flex align-items-center">&nbsp;Notice <i class="fas fa-bell fa-fw"
                                    style="font-size:25px"></i></span>
                        </div>
                    </div>
                    <marquee class="news-scroll" id="marquee1" behavior="scroll" direction="left">
                        <?php //$n = 1;
                        ?>
                        @foreach (notices() as $noticesList)
                        <span class="dot"></span> <a href="#">{{ $noticesList->dec }} </a> &nbsp;
                        <?php //$n++;
                        ?>
                        @endforeach
                    </marquee>
                    <div class="rainbowGradient2">
                        <div
                            class="d-flex flex-row flex-grow-1 flex-fill justify-content-center bg-danger py-2 text-white px-1 nab">
                            <span class="d-flex align-items-center">&nbsp;
                                <i class="fas fa-caret-left fa-fw" onclick="mfast()" style="font-size:25px"></i>
                                <span id="togglemarquee" class="run" onClick="togglemarquee('togglemarquee')"><i
                                        class="fal fa-bars fa-fw" style=""></i></span>
                                <i class="fas fa-caret-right fa-fw" onclick="mslow()" style="font-size:25px"></i>
                            </span>
                        </div>
                    </div>
                </div> --}}
                </div>
            </div>
        </section>
        {{-- <section class="NoticeSeciton">
        <div class="d-flex align-items-center">
            <div class="noticeHead">Notice <i class="fas fa-bell fa-fw" style="font-size:25px"></i></div>
            <div class="noticwe">
                <marquee behavior="scroll" direction="" onMouseOver="this.stop()" onMouseOut="this.start()">
                    <?php //$n = 1;
                    ?>
                    @foreach (notices() as $noticesList)
                    * {{ $noticesList->dec }} &nbsp;
                    <?php //$n++;
                    ?>
                    @endforeach
                </marquee>
            </div>
        </div>
    </section> --}}
    </main>
    <script src="{{ asset('admin_asset/breaking-news-ticker.min.js') }}" type="text/javascript"></script>
    {{-- <script src="{{ asset('admin_asset/site.js') }}" type="text/javascript"></script> --}}
@section('script')
    @if (settings()[0]->popstatus == 'On')
        <script type='text/javascript'>
            $('#overlay').modal('show');
            $("#popupad").html(`
{!! settings()[0]->popupcontent !!}
`);
            // setTimeout(function() {
            //     $('#overlay').modal('hide');
            // }, 5000);
            // function togglemarquee(id) {
            //     // fas fa-play fa-fw
            //     var classname = document.getElementById(id).classList;
            // if(classname=='run'){
            //     document.getElementById(id).classList.remove('run');
            //     document.getElementById(id).classList.add('pause');
            //     document.getElementById(id).innerHTML='<i class="fas fa-play fa-fw" style=""></i>';
            //     document.getElementById('marquee1').stop();
            // }else{
            //     document.getElementById(id).classList.add('run');
            //     document.getElementById(id).classList.remove('pause');
            //     document.getElementById(id).innerHTML='<i class="fal fa-bars fa-fw" style=""></i>';
            //     document.getElementById('marquee1').start();
            // }
            // }
            //     function mfast() {
            //         document.getElementById('marquee1').setAttribute('scrollamount', 3, 0);
            //     }
            //     function mslow() {
            //         document.getElementById('marquee1').setAttribute('scrollamount', 10, 0);
            //     }
        </script>
    @endif
@endsection
@endsection
