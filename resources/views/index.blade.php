@extends('layouts.master')
@section('content')


<style>

.owl-nav {
    display: none;
}
.owl-carousel .owl-nav button.owl-next, .owl-carousel .owl-nav button.owl-prev, .owl-carousel button.owl-dot {
    background: 0 0;
    color: inherit;
    border: 0;
    padding: 0!important;
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


.swiper-button-next:after, .swiper-button-prev:after {
    font-family: swiper-icons;
    font-size: 30px !important;
    text-transform: none!important;
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
                <div class="col-md-3" style="background: #e6f5fa00;width:200px !important" >
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
                                            {{Str::limit(settings()[0]->About, 200)}}

                                            <a href="{{ url('/about-us') }}">Read More</a>
                                        </p>
                                    </div>
                                </div>
                            </div> <!-- /.row-->
                        </div> <!-- /.container-->
                    </div> <!-- /.about-->



                    <div class="counter-area section-padding-top" style="    padding-top: 50px !important;padding-bottom: 30px !important;">
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


                     <a target="_blank" href="{{ $adbottomlist->url  }}">
                    <img width="100%" src="{{ asset(env('FILE_PATH').'ad/'.$adbottomlist->name) }}" alt="" />
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
                            <div><span style="font-size: 18px; font-family: latoR;">4. ...............................</span></div>
                            <div><span style="font-size: 18px; font-family: latoR;">5. ...............................</span>
                            </div>
                            <div><span style="font-size: 18px; font-family: latoR;">6. ...............................</span></div>
                            <div><span style="font-size: 18px; font-family: latoR;">7. ...............................</span></div>
                            <div><span style="font-size: 18px; font-family: latoR;">8. ...............................</span></div>
                        </div>
                        <div style="line-height: 1.5;">
                            <div></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                    <a class="" href="{{ url('register') }}"><img
                            class=""
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
                                                {!! Str::limit($latest4List->short_description, 80)!!}


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
                {{-- <div class="col-md-3 mt-3">
                    <img width="100%" src="assets/img/ad.png" alt="" />
                </div> --}}
            </div>
        </section>

        <section class="NoticeSeciton">
            <div class="d-flex align-items-center">






                            <div class="noticeHead">Notice <i class="fas fa-bell fa-fw" style="font-size:25px"></i></div>


                            <div class="noticwe">

<marquee behavior="scroll" direction="" onMouseOver="this.stop()" onMouseOut="this.start()">
<?php  $n = 1; ?>
@foreach (notices() as $noticesList)
  * {{ $noticesList->dec }} &nbsp;
    <?php  $n++; ?>
@endforeach

</marquee>



                            </div>





            </div>
        </section>
    </main>


@section('script')

    @if(settings()[0]->popstatus=='On')
    <script type='text/javascript'>
$('#overlay').modal('show');
$("#popupad").html(`
{!! settings()[0]->popupcontent !!}
`);

// setTimeout(function() {
//     $('#overlay').modal('hide');
// }, 5000);
    </script>

@endif

@endsection
@endsection
