@extends('layouts.master')
@section('content')
    <main>
        <section class="hero_area">
            <div class="row p-0">
                <div class="col-md-3" style="background: #e6f5fa">
                    <x-sidebar />
                    <img width="100%" src="assets/img/Ad1.png" alt="">
                </div>
                <div class="col-md-9">


@foreach ($infoDetails as $list)
    


                    <img width="100%" src="{{ asset('assets/img/big_ad.png') }}" alt="" />
                    <div class="about_header position-relative mt-3">
                        <img width="100%" src="{{ $list->image }}" alt="">
                        <div class="about_head">
                            <h5 class="about_title">{{ $list->title }}</h5>
                            <p class="about_sort">{{ $list->short_description }}</p>
                        </div>
                    </div>
                    <section class="aboutSection py-3 pl-5">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="description">
                                    <p>{!! $list->description !!}</p>
                                </div>
                               
                               
                            </div>
                            <div class="col-md-3">
                                <img width="100%" src="{{ asset('assets/img/Ad1.png') }}" alt="">
                            </div>
                        </div>
                    </section>

                    @endforeach

                </div>

               

            </div>
        </section>
        <section class="adsection">
            <div class="row">
                <div class="col-md-6 mt-3">
                    <img width="100%" src="{{ asset('assets/img/small_ad.png') }}" alt="" />
                </div>
                <div class="col-md-6 mt-3">
                    <img width="100%" src="{{ asset('assets/img/small_ad.png') }}" alt="" />
                </div>
                <div class="col-md-6 mt-3">
                    <img width="100%" src="{{ asset('assets/img/small_ad.png') }}" alt="" />
                </div>
                <div class="col-md-6 mt-3">
                    <img width="100%" src="{{ asset('assets/img/small_ad.png') }}" alt="" />
                </div>
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
