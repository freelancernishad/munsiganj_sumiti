@extends('layouts.master')
@section('content')
    <style>
        .about_head {
            position: absolute;
            background: #00000052;
            z-index: 999999;
            top: 40%;
            left: 39px;
            width: 300px;
            padding: 15px 15px;
            border-bottom-right-radius: 5px;
            border-bottom-left-radius: 5px;
            border-bottom: 5px solid #c12729;
            color: white;
        }
    </style>


    <main>
        <section class="hero_area">
            <div class="row p-0">
                <div class="col-md-3 sidebarmobile" style="">
                    <x-sidebar />

                </div>
                <div class="col-md-9">



                    @foreach ($infoDetails as $list)
                        <div class="about_header position-relative mt-3">
                            <img width="100%" src="{{ asset($list->image) }}" alt="">
                            <div class="about_head">
                                <h5 class="about_title">{{ $list->title }}</h5>
                                <p class="about_sort">{{ $list->short_description }}</p>
                            </div>
                        </div>
                        <section class="aboutSection py-3 pl-3 pr-3">
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="description">
                                        <p>{!! $list->description !!}</p>
                                    </div>


                                </div>
                                <div class="col-md-1"></div>
                            </div>
                        </section>
                    @endforeach

                </div>



            </div>
        </section>

    </main>
@endsection
