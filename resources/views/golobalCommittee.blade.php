@extends('layouts.master')
@section('content')
    <main>
        <section class="hero_area">
            <div class="row p-0">
                <div class="col-md-3" style="background: #e6f5fa">
                    <x-sidebar />
                    <?php


                    $adl = $adl[0]->image;
                    $adl = json_decode($adl);

                    foreach($adl as $adllist){

                    ?>
                    <img width="100%" src="{{ asset(env('FILE_PATH').'ad/'.$adllist->name) }}" alt="" />

                    <?php
                    }



                    ?>
                </div>
                <div class="col-md-9">

                    <?php


                    $adtop = $adtop[0]->image;
                    $adtop = json_decode($adtop);

                    foreach($adtop as $adtoplist){

                    ?>
                    <img width="100%" src="{{ asset(env('FILE_PATH').'ad/'.$adtoplist->name) }}" alt="" />

                    <?php
                    }



                    ?>
<section class="committeSection py-3 pl-3">
<div class="row">


<div class="col-md-12 mt-5">

 <!-- Committee area start -->
 <div class="committee-area  section-padding-top">
    <div class="committee-shape"></div>
    <div class="container">
        <div class="committee">
            <div class="section-header text-center mb-4">
                <h2>Global Committee</h2>
            </div>
            <div class="committee-nav">
                <ul class="justify-content-around justify-content-between nav nav-pills" role="tablist">


                    <?php $i = 0; ?>
@foreach ($country as $countryList)


@if($i==0)
<li class="nav-item mb-4" role="presentation">
    <div class="icon-area  active " data-bs-toggle="pill" data-bs-target="#{{ $countryList->country }}"
        type="button" id="{{ $countryList->country }}-tab" role="tab" aria-controls="{{ $countryList->country }}" aria-selected="true">
       <img width="40px" src="{{ allcountryflag($countryList->country) }}" alt="">
    </div>
    <button class="nav-link  active " data-bs-toggle="pill" data-bs-target="#{{ $countryList->country }}"
        type="button" id="{{ $countryList->country }}-tab" role="tab" aria-controls="{{ $countryList->country }}"
        aria-selected="true">{{ $countryList->country }}</button>
</li>
@else

<li class="nav-item mb-4" role="presentation">
    <div class="icon-area" data-bs-toggle="pill" data-bs-target="#{{ $countryList->country }}"
        type="button" id="{{ $countryList->country }}-tab" role="tab" aria-controls="{{ $countryList->country }}" aria-selected="true">
       <img width="40px" src="{{ allcountryflag($countryList->country) }}" alt="">
    </div>
    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#{{ $countryList->country }}"
        type="button" id="{{ $countryList->country }}-tab" role="tab" aria-controls="{{ $countryList->country }}"
        aria-selected="true">{{ $countryList->country }}</button>
</li>
                    @endif

                    <?php $i++ ?>

                    @endforeach



                </ul>
                <div class="tab-content" id="pills-tabContent">

<?php $j = 0; ?>
                    @foreach ($country as $countryList)

<?php

$PDO = \DB::connection()->getPdo();
$QUERY = $PDO->prepare("SELECT * FROM `global_committees` WHERE `country`='$countryList->country'");
$QUERY->execute();
$global_committees=$QUERY->fetchAll(PDO::FETCH_OBJ);




?>
                    @if($j==0)
                    <div class="tab-pane fade show  active " id="{{ $countryList->country }}" role="tabpanel"
                        aria-labelledby="{{ $countryList->country }}-tab">
                        <div class="committee-member-area">
                            <div class="row justify-content-center">


                         @foreach ($global_committees as $global_committeesList)
                                <div class="col committee-member-box">
                                    <div class="committee-memeber">
                                        <div class="committee-member-img mb-3">
                                            <img src="{{ $global_committeesList->image }}"
                                                alt="">
                                        </div>
                                        <div class="committee-content">
                                            <h6>{{ $global_committeesList->name }}</h6>
                                            <p class="mt-2"> - President</p>
                                        </div>
                                    </div>
                                </div>

                                @endforeach

                            </div>
                        </div>
                        <!-- /.committee-member-area -->
                    </div>

@else
<div class="tab-pane" id="{{ $countryList->country }}" role="tabpanel"
    aria-labelledby="{{ $countryList->country }}-tab">
    <div class="committee-member-area">
        <div class="row justify-content-center">

            @foreach ($global_committees as $global_committeesList)
            <div class="col committee-member-box">
                <div class="committee-memeber">
                    <div class="committee-member-img mb-3">
                        <img src="{{ $global_committeesList->image }}"
                            alt="">
                    </div>
                    <div class="committee-content">
                        <h6>{{ $global_committeesList->name }}</h6>
                        <p class="mt-2"> - President</p>
                    </div>
                </div>
            </div>

            @endforeach


        </div>
    </div>
    <!-- /.committee-member-area -->
</div>
@endif


                    <?php $j++ ?>
                    @endforeach


                </div>


            </div>
            <!-- /.committee-nav -->

        </div>
    </div>
    <div class="committee-shape1"></div>
</div>
<!-- /.committee-area -->





</div>

</div>
</section>
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

    </main>
    @endsection
