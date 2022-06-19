@extends('layouts.master')
@section('content')
    <style>
        div.icon-area {
            background: #ff000000;
            border: 0 !important;
        }

        div.icon-area img {
            width: 72px;
            box-shadow: 0px 0px 15px 8px #00000059;
            border-radius: 50%;
        }

        li.nav-item.mb-4 p {
            font-size: 17px;
            margin-top: 38px;
            font-weight: 600;
            color: #ffffff;
            text-align: center;
            background: #1666b4;
            padding: 2px 10px;
            border-radius: 10px;
        }

        .committee-area.section-padding-top {
            background: #e6f5fa;
        }

        .section-header h2 {
            font-family: "Mulish";
            font-weight: 800;
            font-size: 36px;
            color: #d02804;
        }

        .committee-content {
            color: #d02833;
        }

        div#all-tab {
            background: linear-gradient(176deg, #496e2d, #d80027 99px);
        }
    </style>

    <main>
        <section class="hero_area">
            <div class="row p-0">
                <div class="col-md-3 sidebarmobile">
                    <x-sidebar />
                    <?php


                    $adl = $adl[0]->image;
                    if($adl!=''){
                    $adl = json_decode($adl);

                    foreach($adl as $adllist){

                    ?>
                    <a target="_blank" href="{{ $adllist->url }}">
                        <img width="100%" src="{{ asset(env('FILE_PATH') . 'ad/' . $adllist->name) }}" alt="" />
                    </a>
                    <?php
                    }
                    }



                    ?>
                </div>
                <div class="col-md-9">


                    <?php


                    $adtop = $adtop[0]->image;
                    if($adtop!=''){
                    $adtop = json_decode($adtop);

                    foreach($adtop as $adtoplist){

                    ?>
                    <a target="_blank" href="{{ $adtoplist->url }}">
                        <img width="100%" src="{{ asset(env('FILE_PATH') . 'ad/' . $adtoplist->name) }}"
                            alt="" />
                    </a>
                    <?php
                    }
                    }



                    ?>
                    <section class="committeSection py-3 pl-3">
                        <div class="row">


                            <div class="col-md-12 mt-5">

                                <div class="ourMission">
                                    <h6>Global Committee</h6>
                                </div>
                                <div class="committee">
                                    <p>{{ settings()[0]->globalcommittee }}</p>
                                </div>








                                <!-- Committee area start -->
                                <div class="committee-area  section-padding-top">
                                    <div class="committee-shape"></div>
                                    <div class="container">
                                        <div class="committee">
                                            <div class="section-header text-center mb-4">
                                                <h2>Global Committee</h2>
                                            </div>
                                            <div class="committee-nav">
                                                <ul class="justify-content-around justify-content-between nav nav-pills"
                                                    role="tablist">





                                                    <li class="nav-item mb-4" role="presentation" style="    width: 100%;">

                                                        <div class="icon-area active" data-bs-toggle="pill"
                                                            data-bs-target="#all" type="button" id="all-tab"
                                                            role="tab" aria-controls="all" aria-selected="true">
                                                            <img width="40px"
                                                                src="{{ asset('assets/img/1646132706_Logo.png') }}"
                                                                alt="">
                                                        </div>
                                                        <p
                                                            style="    width: 100px;
                    margin: 36px auto 0px;">
                                                            All</p>


                                                    </li>

                                                    @foreach ($country as $countryList)
                                                        <li class="nav-item mb-4" role="presentation">
                                                            <div class="icon-area" data-bs-toggle="pill"
                                                                data-bs-target="#{{ str_replace(' ', '_', $countryList->country) }}"
                                                                type="button"
                                                                id="tabchange_{{ str_replace(' ', '_', $countryList->country) }}-tab"
                                                                role="tab"
                                                                aria-controls="{{ str_replace(' ', '_', $countryList->country) }}"
                                                                aria-selected="true">
                                                                <img width="40px"
                                                                    src="{{ allcountryflag(str_replace(' ', '_', $countryList->country)) }}"
                                                                    alt="">
                                                            </div>
                                                            <p>{{ $countryList->country }}</p>
                                                        </li>
                                                    @endforeach



                                                </ul>
                                                <div class="tab-content" id="pills-tabContent">



                                                    <?php
                                                    $PDO = \DB::connection()->getPdo();
                                                    $QUERY = $PDO->prepare('SELECT * FROM `global_committees`');
                                                    $QUERY->execute();
                                                    $all = $QUERY->fetchAll(PDO::FETCH_OBJ);
                                                    ?>


                                                    <div class="tab-pane fade show active" id="all" role="tabpanel"
                                                        aria-labelledby="all-tab">
                                                        <div class="committee-member-area">
                                                            <div class="row justify-content-center">


                                                                @foreach ($all as $global_committeesList)
                                                                    <div class="col committee-member-box"
                                                                        onclick="viewdatas('{{ url('/golobal/Committee?view=' . $global_committeesList->id) }}')">
                                                                        <div class="committee-memeber">
                                                                            <div class="committee-member-img mb-3">
                                                                                <img src="{{ $global_committeesList->image }}"
                                                                                    alt="">
                                                                            </div>
                                                                            <div class="committee-content">
                                                                                <h6>{{ $global_committeesList->name }}
                                                                                </h6>
                                                                                <p class="mt-2"> - President</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endforeach

                                                            </div>
                                                        </div>
                                                        <!-- /.committee-member-area -->
                                                    </div>

                                                    @foreach ($country as $countryList)
                                                        <?php
                                                        $PDO = \DB::connection()->getPdo();
                                                        $QUERY = $PDO->prepare("SELECT * FROM `global_committees` WHERE `country`='$countryList->country'");
                                                        $QUERY->execute();
                                                        $global_committees = $QUERY->fetchAll(PDO::FETCH_OBJ);
                                                        ?>

                                                        <div class="tab-pane"
                                                            id="tabchange_{{ str_replace(' ', '_', $countryList->country) }}"
                                                            role="tabpanel"
                                                            aria-labelledby="{{ str_replace(' ', '_', $countryList->country) }}-tab">
                                                            <div class="committee-member-area">
                                                                <div class="row justify-content-center">


                                                                    @foreach ($global_committees as $global_committeesList)
                                                                        <div class="col committee-member-box"
                                                                            onclick="viewdatas('{{ url('/golobal/Committee?view=' . $global_committeesList->id) }}')">
                                                                            <div class="committee-memeber">
                                                                                <div class="committee-member-img mb-3">
                                                                                    <img src="{{ $global_committeesList->image }}"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="committee-content">
                                                                                    <h6>{{ $global_committeesList->name }}
                                                                                    </h6>
                                                                                    <p class="mt-2"> - President</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach

                                                                </div>
                                                            </div>
                                                            <!-- /.committee-member-area -->
                                                        </div>
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
                if($adbottom!=''){
                $adbottom = json_decode($adbottom);

                foreach($adbottom as $adbottomlist){

                ?>

                <div class="col-md-6 mt-3">
                    <a target="_blank" href="{{ $adbottomlist->url }}">
                        <img width="100%" src="{{ asset(env('FILE_PATH') . 'ad/' . $adbottomlist->name) }}"
                            alt="" />
                    </a>
                </div>
                <?php
                }
                }



                ?>
            </div>
        </section>

    </main>
@endsection
