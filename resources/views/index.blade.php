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

        <!-- Committee area start -->
        <div class="committee-area  section-padding-top">
            <div class="committee-shape"></div>
            <div class="container">
                <div class="committee">
                    <div class="section-header text-center mb-4">
                        <h2>Executive Committee</h2>
                    </div>
                    <div class="committee-nav">
                        <ul class="justify-content-around justify-content-between nav nav-pills" role="tablist">

                            <li class="nav-item mb-4" role="presentation">
                                <div class="icon-area  active " data-bs-toggle="pill" data-bs-target="#pills-1"
                                    type="button" id="pills-1-tab" role="tab" aria-controls="pills-1" aria-selected="true">
                                    <i class="fas fa-users"></i>
                                </div>
                                <button class="nav-link  active " data-bs-toggle="pill" data-bs-target="#pills-1"
                                    type="button" id="pills-1-tab" role="tab" aria-controls="pills-1"
                                    aria-selected="true">Central</button>
                            </li>
                            <li class="nav-item mb-4" role="presentation">
                                <div class="icon-area " data-bs-toggle="pill" data-bs-target="#pills-2" type="button"
                                    id="pills-2-tab" role="tab" aria-controls="pills-2" aria-selected="true">
                                    <i class="fas fa-users"></i>
                                </div>
                                <button class="nav-link " data-bs-toggle="pill" data-bs-target="#pills-2" type="button"
                                    id="pills-2-tab" role="tab" aria-controls="pills-2" aria-selected="true">Sylhet</button>
                            </li>
                            <li class="nav-item mb-4" role="presentation">
                                <div class="icon-area " data-bs-toggle="pill" data-bs-target="#pills-3" type="button"
                                    id="pills-3-tab" role="tab" aria-controls="pills-3" aria-selected="true">
                                    <i class="fas fa-users"></i>
                                </div>
                                <button class="nav-link " data-bs-toggle="pill" data-bs-target="#pills-3" type="button"
                                    id="pills-3-tab" role="tab" aria-controls="pills-3" aria-selected="true">Khulna</button>
                            </li>
                            <li class="nav-item mb-4" role="presentation">
                                <div class="icon-area " data-bs-toggle="pill" data-bs-target="#pills-4" type="button"
                                    id="pills-4-tab" role="tab" aria-controls="pills-4" aria-selected="true">
                                    <i class="fas fa-users"></i>
                                </div>
                                <button class="nav-link " data-bs-toggle="pill" data-bs-target="#pills-4" type="button"
                                    id="pills-4-tab" role="tab" aria-controls="pills-4"
                                    aria-selected="true">Rajshahi</button>
                            </li>
                            <li class="nav-item mb-4" role="presentation">
                                <div class="icon-area " data-bs-toggle="pill" data-bs-target="#pills-5" type="button"
                                    id="pills-5-tab" role="tab" aria-controls="pills-5" aria-selected="true">
                                    <i class="fas fa-users"></i>
                                </div>
                                <button class="nav-link " data-bs-toggle="pill" data-bs-target="#pills-5" type="button"
                                    id="pills-5-tab" role="tab" aria-controls="pills-5"
                                    aria-selected="true">Mymensingh</button>
                            </li>
                            <li class="nav-item mb-4" role="presentation">
                                <div class="icon-area " data-bs-toggle="pill" data-bs-target="#pills-6" type="button"
                                    id="pills-6-tab" role="tab" aria-controls="pills-6" aria-selected="true">
                                    <i class="fas fa-users"></i>
                                </div>
                                <button class="nav-link " data-bs-toggle="pill" data-bs-target="#pills-6" type="button"
                                    id="pills-6-tab" role="tab" aria-controls="pills-6"
                                    aria-selected="true">Comilla</button>
                            </li>
                            <li class="nav-item mb-4" role="presentation">
                                <div class="icon-area " data-bs-toggle="pill" data-bs-target="#pills-7" type="button"
                                    id="pills-7-tab" role="tab" aria-controls="pills-7" aria-selected="true">
                                    <i class="fas fa-users"></i>
                                </div>
                                <button class="nav-link " data-bs-toggle="pill" data-bs-target="#pills-7" type="button"
                                    id="pills-7-tab" role="tab" aria-controls="pills-7"
                                    aria-selected="true">Barisal</button>
                            </li>
                            <li class="nav-item mb-4" role="presentation">
                                <div class="icon-area " data-bs-toggle="pill" data-bs-target="#pills-8" type="button"
                                    id="pills-8-tab" role="tab" aria-controls="pills-8" aria-selected="true">
                                    <i class="fas fa-users"></i>
                                </div>
                                <button class="nav-link " data-bs-toggle="pill" data-bs-target="#pills-8" type="button"
                                    id="pills-8-tab" role="tab" aria-controls="pills-8"
                                    aria-selected="true">Chittagong</button>
                            </li>
                            <li class="nav-item mb-4" role="presentation">
                                <div class="icon-area " data-bs-toggle="pill" data-bs-target="#pills-9" type="button"
                                    id="pills-9-tab" role="tab" aria-controls="pills-9" aria-selected="true">
                                    <i class="fas fa-users"></i>
                                </div>
                                <button class="nav-link " data-bs-toggle="pill" data-bs-target="#pills-9" type="button"
                                    id="pills-9-tab" role="tab" aria-controls="pills-9"
                                    aria-selected="true">Jessore</button>
                            </li>

                        </ul>
                        <div class="tab-content" id="pills-tabContent">

                            <div class="tab-pane fade show  active " id="pills-1" role="tabpanel"
                                aria-labelledby="pills-1-tab">
                                <div class="committee-member-area">
                                    <div class="row justify-content-center">
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_405_2_(2)___1633326327.jpg"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MD. SHAHID-UL-MUNIR</h6>
                                                    <p class="mt-2"> - President</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_405_2-1___1633326356.jpg"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MD. JABEDUR RAHMAN SHAHEEN</h6>
                                                    <p class="mt-2"> - Vice President</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_405_2-2___1633324717.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MOHAMMED MONIRUL ISLAM</h6>
                                                    <p class="mt-2"> - Secretary General</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_4___1633328167.jpg"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>Md. Muzahid Al Beruni</h6>
                                                    <p class="mt-2"> - Joint Secretary General</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_member4___1633328487.jpg"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>Kamruzzaman Bhuiyan</h6>
                                                    <p class="mt-2"> - Treasurer</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_6___1633329069.jpg"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>Mosaraf Hossain Sumon</h6>
                                                    <p class="mt-2"> - Director</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_7___1633329231.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>Md. Rashed Ali Bhuiyan</h6>
                                                    <p class="mt-2"> - Director</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_man___1646042781.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MR. MD. SHAHID-UL-MUNIR</h6>
                                                    <p class="mt-2"> - President</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_man___1646042856.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MR. YOUSUF ALI SHAMIM</h6>
                                                    <p class="mt-2"> - Vice President</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_man___1646042938.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MR. MOSHARAF HOSSAIN SUMON</h6>
                                                    <p class="mt-2"> - Secretary General</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_man___1646043022.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MR. MD. JABEDUR RAHMAN SHAHEEN</h6>
                                                    <p class="mt-2"> - Treasurer</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_man___1646043125.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>ENGR. SUBRATA SARKER</h6>
                                                    <p class="mt-2"> - Director</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_man___1646043222.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MR. MD. ASUB ULLAH KHAN JEWEL</h6>
                                                    <p class="mt-2"> - Director</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_man___1646043301.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MR. MD. MUSTAFIZUR RAHMAN</h6>
                                                    <p class="mt-2"> - Director</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_man___1646043395.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>ENGR. SUBRATA SARKER</h6>
                                                    <p class="mt-2"> - President</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_man___1646043815.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MR. YOUSUF ALI SHAMIM</h6>
                                                    <p class="mt-2"> - Vice President</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_man___1646043908.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MR. MOSHARAF HOSSAIN SUMON</h6>
                                                    <p class="mt-2"> - Secretary General</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_man___1646043998.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MR. MD. JABEDUR RAHMAN SHAHEEN</h6>
                                                    <p class="mt-2"> - Treasurer</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_man___1646044069.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MR. MD. SHAHID-UL-MUNIR</h6>
                                                    <p class="mt-2"> - Director</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_man___1646044142.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MR. MD. ASUB ULLAH KHAN JEWEL</h6>
                                                    <p class="mt-2"> - Director</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_man___1646044201.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MR. MD. MUSTAFIZUR RAHMAN</h6>
                                                    <p class="mt-2"> - Director</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_man___1646044343.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MR. ALI ASHFAK</h6>
                                                    <p class="mt-2"> - President</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_man___1646044468.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MR. YOUSUF ALI SHAMIM</h6>
                                                    <p class="mt-2"> - Vice President</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_man___1646044607.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>ENGR. SUBRATA SARKAR</h6>
                                                    <p class="mt-2"> - Secretary General</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_man___1646044666.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MR. NAZMUL ALAM BHUIYAN (JEWEL)</h6>
                                                    <p class="mt-2"> - Joint Secretary General</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_man___1646044723.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MR. MD. SHAHID-UL-MUNIR</h6>
                                                    <p class="mt-2"> - Director</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_man___1646044782.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MR. MD. SHAHID-UL-MUNIR</h6>
                                                    <p class="mt-2"> - Director</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_man___1646044849.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MR. A. T. SHAFIQUE UDDIN AHMED</h6>
                                                    <p class="mt-2"> - Director</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_man___1646044922.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MR. S.M WAHIDUZZAMAN</h6>
                                                    <p class="mt-2"> - Director</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_man___1646045040.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MR. ABU HANIF MD. MAHFUZUL ARIF</h6>
                                                    <p class="mt-2"> - President</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_man___1646045103.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MR. MAZIBUR RAHMAN SAWPON</h6>
                                                    <p class="mt-2"> - Vice President</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_man___1646045168.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MR. NAZRUL ISLAM MILON</h6>
                                                    <p class="mt-2"> - Secretary General</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.committee-member-area -->
                            </div>
                            <div class="tab-pane fade show " id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                                <div class="committee-member-area">
                                    <div class="row justify-content-center">
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_s1___1633338090.jpg"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>Anamul Quddus Chowdhury</h6>
                                                    <p class="mt-2"> - Chairman</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_s2___1633338281.jpg"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MUHAMMED BIN ABDUR RASHID</h6>
                                                    <p class="mt-2"> - Vice Chairman</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_s3___1633338484.jpg"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>A S M G Kibria</h6>
                                                    <p class="mt-2"> - Secretary</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_s4___1633338604.jpg"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>TAREQUE HASSAN</h6>
                                                    <p class="mt-2"> - Joint Secretary</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_s5___1633338764.jpg"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>PARTHA CHOWDHURY</h6>
                                                    <p class="mt-2"> - Treasurer</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_s6___1633339095.jpg"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MD. MOSNOUL KARIM CHOWDHURY</h6>
                                                    <p class="mt-2"> - Member</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_s7___1633339379.jpg"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MD. SULAIMAN AHSAN TANVIR</h6>
                                                    <p class="mt-2"> - Member</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.committee-member-area -->
                            </div>
                            <div class="tab-pane fade show " id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab">
                                <div class="committee-member-area">
                                    <div class="row justify-content-center">
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_km1___1633406467.jpg"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MD. NAZMUL AHSAN</h6>
                                                    <p class="mt-2"> - Chairman</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_km2___1633406696.jpg"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MD. ZIAUR RAHMAN</h6>
                                                    <p class="mt-2"> - Vice Chairman</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_km3___1633406813.jpg"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>SK. SHAHIDUL HAQUE SOHEL</h6>
                                                    <p class="mt-2"> - Secretary</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_km4___1633406989.jpg"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MOHAMMAD SHAMSUZZAMAN</h6>
                                                    <p class="mt-2"> - Joint Secretary</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_km5___1633407094.jpg"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MUNSHI ARIFUZZAMAN</h6>
                                                    <p class="mt-2"> - Treasurer</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_km6___1633407195.jpg"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>SHEIKH SHAHINUR ALAM SIDDIQUE</h6>
                                                    <p class="mt-2"> - Member</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_km7___1633407324.jpg"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>SAYED BAYZID HOSSAIN LAVELU</h6>
                                                    <p class="mt-2"> - Member</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.committee-member-area -->
                            </div>
                            <div class="tab-pane fade show " id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab">
                                <div class="committee-member-area">
                                    <div class="row justify-content-center">
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_rm1___1633407619.jpg"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>S. M. MUSFEQ-US-SHALAHEEN</h6>
                                                    <p class="mt-2"> - Chairman</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_rm2___1633407703.jpg"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>SYED ABDUL MOYEZ DOLLAR</h6>
                                                    <p class="mt-2"> - Vice Chairman</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_rm3___1633407847.jpg"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>S. M. LATIFUL BARI</h6>
                                                    <p class="mt-2"> - Secretary</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_rm4___1633407960.jpg"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>N. M. ATIQUL HAQUE</h6>
                                                    <p class="mt-2"> - Joint Secretary</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_rm5___1633408061.jpg"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>KH. JAHANGIR SIRAJ RANA</h6>
                                                    <p class="mt-2"> - Treasurer</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_rm6___1633408214.jpg"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>ASHRAF SIDDIQUEE NOOR</h6>
                                                    <p class="mt-2"> - Member</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_rm7___1633408378.jpg"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MD. ARIF HOSSAIN</h6>
                                                    <p class="mt-2"> - Member</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.committee-member-area -->
                            </div>
                            <div class="tab-pane fade show " id="pills-5" role="tabpanel" aria-labelledby="pills-5-tab">
                                <div class="committee-member-area">
                                    <div class="row justify-content-center">
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_mm1___1633409247.jpg"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MD. MUKHLESUR RAHMAN</h6>
                                                    <p class="mt-2"> - Chairman</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_mm2___1633409738.jpg"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MOTTALIB DARBARI</h6>
                                                    <p class="mt-2"> - Vice Chairman</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_mm4___1633410539.jpg"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MD. ANOWER HOSSAIN (RONY</h6>
                                                    <p class="mt-2"> - Joint Secretary</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_mm5___1633411185.jpg"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>RABINDRA CHANDRA TALUKDER (CHAYO)</h6>
                                                    <p class="mt-2"> - Treasurer</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_mm-6___1633411288.jpg"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MOHAMMED ISMAIL HOSSAIN</h6>
                                                    <p class="mt-2"> - Member</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_mm7___1633411388.jpg"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MD. JOHIR ULLAH</h6>
                                                    <p class="mt-2"> - Member</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_449___1635915385.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MOHAMMAD JAMAL HOSSAIN</h6>
                                                    <p class="mt-2"> - Secretary</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.committee-member-area -->
                            </div>
                            <div class="tab-pane fade show " id="pills-6" role="tabpanel" aria-labelledby="pills-6-tab">
                                <div class="committee-member-area">
                                    <div class="row justify-content-center">
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_co1___1633414204.jpg"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MD. FARHAD ULLAH</h6>
                                                    <p class="mt-2"> - Chairman</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_co2___1633414289.jpg"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MOHAMMED NASHIR UDDIN SUMON</h6>
                                                    <p class="mt-2"> - Vice Chairman</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_428___1635915865.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>M A BATEN</h6>
                                                    <p class="mt-2"> - Secretary</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_429___1635916133.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MD. SULTAN MAHMUD TUTUL</h6>
                                                    <p class="mt-2"> - Joint Secretary</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_430___1635916343.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MD. FARDOUS SAYEM BHUIYAN</h6>
                                                    <p class="mt-2"> - Treasurer</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_431___1635916472.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MD. NAYMUL HASAN BHUIYAN</h6>
                                                    <p class="mt-2"> - Member</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_432___1635916775.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MD. JAMAL KHAN</h6>
                                                    <p class="mt-2"> - Member</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.committee-member-area -->
                            </div>
                            <div class="tab-pane fade show " id="pills-7" role="tabpanel" aria-labelledby="pills-7-tab">
                                <div class="committee-member-area">
                                    <div class="row justify-content-center">
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_412___1635917102.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>SYED MD. RAIS UDDIN</h6>
                                                    <p class="mt-2"> - Chairman</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_413___1635917364.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>ABDULLAH AL FARID</h6>
                                                    <p class="mt-2"> - Vice President</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_414___1635917488.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>ZAHID HASAN</h6>
                                                    <p class="mt-2"> - Secretary</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_415___1635917625.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>ZILLUR RAHMAN</h6>
                                                    <p class="mt-2"> - Joint Secretary</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_416_(1)___1635917752.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MOHAMMAD SHAHIDUL ISLAM</h6>
                                                    <p class="mt-2"> - Treasurer</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_417___1635918099.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MD. KHORSED ALAM</h6>
                                                    <p class="mt-2"> - Member</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_418___1635918194.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MD. ENAMUL HUQE KHAN</h6>
                                                    <p class="mt-2"> - Member</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.committee-member-area -->
                            </div>
                            <div class="tab-pane fade show " id="pills-8" role="tabpanel" aria-labelledby="pills-8-tab">
                                <div class="committee-member-area">
                                    <div class="row justify-content-center">
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_ct1___1633412252.jpg"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MD. SUFIAN ALI</h6>
                                                    <p class="mt-2"> - Chairman</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_ct2___1633413261.jpg"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>HM SHAH NEWAZ</h6>
                                                    <p class="mt-2"> - Vice Chairman</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_ct3___1633413362.jpg"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MD. DIDARUL ALAM CHY</h6>
                                                    <p class="mt-2"> - Secretary</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_ct4___1633413495.jpg"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>SADEQUE MOHAMMED IMTIAZ</h6>
                                                    <p class="mt-2"> - Joint Secretary</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_ct5___1633413584.jpg"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>SADEQUE MOHAMMED IMTIAZ</h6>
                                                    <p class="mt-2"> - Treasurer</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_ct6___1633413704.jpg"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MUHAMMAD NURUL AMIN</h6>
                                                    <p class="mt-2"> - Member</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_ct7___1633413790.jpg"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MOHAMMAD DIDARUL ISLAM</h6>
                                                    <p class="mt-2"> - Member</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.committee-member-area -->
                            </div>
                            <div class="tab-pane fade show " id="pills-9" role="tabpanel" aria-labelledby="pills-9-tab">
                                <div class="committee-member-area">
                                    <div class="row justify-content-center">
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_433___1635919230.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>PARTHO PROTIM DEB NATH (ROTY)</h6>
                                                    <p class="mt-2"> - Chairman</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_434___1635919510.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>REAJ HOSSAIN</h6>
                                                    <p class="mt-2"> - Vice President</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_435___1635919667.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>K M AKTARUZZAMAN</h6>
                                                    <p class="mt-2"> - Secretary</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_436___1635919791.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>PROSENJIT DAS</h6>
                                                    <p class="mt-2"> - Joint Secretary</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_437___1635919912.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>ASHU TOSH PAUL</h6>
                                                    <p class="mt-2"> - Treasurer</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_438___1635920012.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>MD. TAMIM AHMED</h6>
                                                    <p class="mt-2"> - Member</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col committee-member-box">
                                            <div class="committee-memeber">
                                                <div class="committee-member-img mb-3">
                                                    <img src="uploads/committee_photo/committee_photo_439___1635920114.png"
                                                        alt="">
                                                </div>
                                                <div class="committee-content">
                                                    <h6>SHOHEL RANA</h6>
                                                    <p class="mt-2"> - Member</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.committee-member-area -->
                            </div>
                        </div>


                    </div>
                    <!-- /.committee-nav -->

                </div>
            </div>
            <div class="committee-shape1"></div>
        </div>
        <!-- /.committee-area -->


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
