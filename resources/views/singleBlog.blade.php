@extends('layouts.master')
@section('content')
    <main>
        <section class="hero_area">
            <div class="row p-0">
                <div class="col-md-3" style="background: #e6f5fa">
                    <x-sidebar />
              
                </div>
                <div class="col-md-9">


@foreach ($posts as $list)
    


             
                    <div class="about_header position-relative mt-3">
                        <img width="100%" src="{{ $list->image }}" alt="">
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
