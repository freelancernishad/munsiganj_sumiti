@extends('layouts.master')
@section('content')
    <main>
        <section class="hero_area">
            <div class="row p-0">
                <div class="col-md-3" style="background: #e6f5fa00">
                    <x-sidebar />
                </div>
                <div class="col-md-9">
                    <div class="owl-carousel">

                        @foreach ($brand as $brandList)
                        <div class="item">
                            <img width="100%" src="{{ $brandList->image }}" alt="" />
                        </div>
                        @endforeach


                    </div>




                    <?php


                    $adtop = $adtop[0]->image;
                    $adtop = json_decode($adtop);

                    foreach($adtop as $adtoplist){

                    ?>
                    <img width="100%" src="{{ asset(env('FILE_PATH').'ad/'.$adtoplist->name) }}" alt="" />

                    <?php
                    }



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
                </div>
            </div>
        </section>



        <div class="about-us-area section-padding-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="heading mb-4">
                            <h5>About Us</h5>
                        </div>
                    </div>
                    <div class="col-xl-8 ">
                        <div class="description">
                            <p>
                                Bangladesh Computer Samity (BCS) is the
                                apex ICT business and trade industry association of Bangladesh. It represents
                                the industry that comprises of distributors, dealers, resellers of computer and
                                allied products, locally assembled computer vendo
                                <a href="{{ url('/about-us') }}">Read More</a>
                            </p>
                        </div>
                    </div>
                </div> <!-- /.row-->
            </div> <!-- /.container-->
        </div> <!-- /.about-->


        <div class="counter-area section-padding-top">
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
                                            <h5>Total Member</h5>
                                            <p>2143</p>
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
                                            <h5>Central Member</h5>
                                            <p>1800</p>
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
                                            <h5>Branch Member</h5>
                                            <p>343</p>
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







        <section class="adsection">
            <div class="row">




                <?php


                $adbottom = $adbottom[0]->image;
                $adbottom = json_decode($adbottom);

                foreach($adbottom as $adbottomlist){

                ?>

                <div class="col-md-6 mt-3">
                    <img width="100%" src="{{ asset(env('FILE_PATH').'ad/'.$adbottomlist->name) }}" alt="" />
                </div>
                <?php
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
                                    Subsidized Rental and other Facilities.</span></div>
                            <div style="line-height: 1.5;"><span style="font-size: 18px; font-family: latoR;">2.
                                    National Exhibition&nbsp;and Conference.</span></div>
                            <div style="line-height: 1.5;"><span style="font-size: 18px; font-family: latoR;">3. Joining
                                    International Exhibition and Conferences.</span></div>
                            <div><span style="font-size: 18px; font-family: latoR;">4. Training&nbsp;Facility for
                                    Employees.</span></div>
                            <div><span style="font-size: 18px; font-family: latoR;">5. Seminars and Workshops.</span>
                            </div>
                            <div><span style="font-size: 18px; font-family: latoR;">6. Market Analysis.</span></div>
                            <div><span style="font-size: 18px; font-family: latoR;">7. Ensure Government&nbsp;Facilities
                                    for Business.</span></div>
                            <div><span style="font-size: 18px; font-family: latoR;">8. Support on 'Made in
                                    Bangladesh'.</span></div>
                        </div>
                        <div style="line-height: 1.5;">
                            <div></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                    <a class="" href=""><img
                            class=""
                            src="https://bcs.org.bd/theme/assets/images/member/member.png.gif" alt=""></a>
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




                            <div class="col-lg-6 news-box mx-auto mt-5">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="news-img">
                                            <img class="news-img1"
                                                src="uploads/page_logo/page_banner_rsz_1raw_4336___1640620230.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="news-content">
                                            <h5 class="mb-4">{{ $latest4List->title }}</h5>
                                            <p>


                                                {{ $latest4List->short_description }}
                                            </p>
                                            <a href="{{ url('blogs?blog='.$latest4List->postid) }}" class="btn rounded-pill mt-4">Read
                                                More →</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            @endforeach



                        </div>
                        <div class="news-all text-center mb-2 mt-5">
                            <a href="{{ url('blogs') }}"
                                class="btn btn-outline-light rounded-pill mt-5 py-1 px-3">View All News
                                →</a>
                        </div>
                    </div> <!-- /.news-border -->
                </div> <!-- /.container -->
            </div> <!-- /.news-bg-color -->
        </div> <!-- /.news-room -->




















        <section class="committeeSeciton">
            <div class="row">
                <div class="col-md-9 mt-3 committeeBox">
                    <div class="cus_container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h4 class="committeeTitlw">Executive Committee</h4>
                            </div>
                            <div class="col-md-5">
                                <div class="d-flex">
                                    <img width="120px" src="assets/img/committee.png" alt="" />
                                    <div class="committeeDetails">
                                        <h6>Committee Name</h6>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Maiores et perspiciatis architecto,
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="d-flex">
                                    <img width="120px" src="assets/img/committee.png" alt="" />
                                    <div class="committeeDetails">
                                        <h6>Committee Name</h6>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Maiores et perspiciatis architecto,
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="committeeMore">
                                    <a href="#"> More Details >> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-3">
                    <img width="100%" src="assets/img/ad.png" alt="" />
                </div>
            </div>
        </section>
    </main>
@endsection
