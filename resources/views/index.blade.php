@extends('layouts.master')
@section('content')
    <main>
        <section class="hero_area">
            <div class="row p-0">
                <div class="col-md-3" style="background: #e6f5fa">
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
