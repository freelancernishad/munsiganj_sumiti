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
                <div class="col-md-9 mb-5">


                    @if($singleData=='')
                    <div class="about_header position-relative mt-3">
                        <img width="100%" src="{{ asset('assets/img/ProminentPersons.png') }}" alt="">
                        <div class="about_head">
                            <h5 class="about_title">Prominent Persons</h5>
                            <p class="about_sort"></p>
                        </div>
                    </div>






<div class="row">

    <div class="col-md-6">

        <h5 class="proHead mt-3">বিক্রামপুরের পুরুষ ব্যক্তিত্ব</h5>


        <div class="prolist">

            <?php $i=1; ?>
            @foreach ($rowsMale as $rowsMaleLIst)

            <div class="proItem d-flex justify-content-between">
                <div class="item1">{{ int_en_to_bn(str_pad($i, 2, '0', STR_PAD_LEFT)) }}।</div>
                <div class="item2">
                    <h6>{{ $rowsMaleLIst->name }}</h6>
                    <p>{{ int_en_to_bn($rowsMaleLIst->dm)  }}</p>
                    <p>{{ $rowsMaleLIst->pd  }}</p>
                </div>
                <div class="item3"><a href="{{ url('ProminentPersons?i='.$rowsMaleLIst->id) }}" class="details">বিস্তারিত</a></div>
            </div>


<?php $i++; ?>
            @endforeach

        </div>

    </div>


    <div class="col-md-6">

        <h5 class="proHead mt-3">বিক্রামপরের নারী ব্যক্তিত্ব</h5>


        <div class="prolist">



            <?php $i=1; ?>
            @foreach ($rowsFemale as $rowsFemaleLIst)

            <div class="proItem d-flex justify-content-between">
                <div class="item1">{{ int_en_to_bn(str_pad($i, 2, '0', STR_PAD_LEFT)) }}।</div>
                <div class="item2">
                    <h6>{{ $rowsFemaleLIst->name }}</h6>
                    <p>{{ int_en_to_bn($rowsFemaleLIst->dm)  }}</p>
                    <p>{{ $rowsFemaleLIst->pd  }}</p>
                </div>
                <div class="item3"><a href="{{ url('ProminentPersons?i='.$rowsFemaleLIst->id) }}" class="details">বিস্তারিত</a></div>
            </div>


<?php $i++; ?>
            @endforeach



        </div>

    </div>



</div>























@else

@foreach ($rows as $row)


<div class="about_header position-relative mt-3">
    <img width="100%" src="{{ asset('assets/img/ProminentPersons.png') }}" alt="">
    <div class="about_head">
        <h5 class="about_title">{{ $row->name }}</h5>
        <p class="about_sort"></p>
    </div>
</div>



<section class="aboutSection py-3 pl-3 pr-3">
    <div class="row">
        <div class="col-md-11">
            <div class="description">
                <p>{!! $row->info !!}</p>
            </div>


        </div>
  <div class="col-md-1"></div>
    </div>
</section>




@endforeach
@endif



                </div>



            </div>
        </section>

    </main>
@endsection
