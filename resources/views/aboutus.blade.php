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


          <div class="text-center page-banner"
          style="background-image:url(https://bcs.org.bd/theme/newassets/images/background/authentication_bg.png);">
          <div class="banner-color p-5 text-center">

              <h1>About</h1>


          </div> <!-- /.banner-color -->
      </div> <!-- /.banner -->




<section class="aboutSection py-3 pl-5">
<div class="row">
<div class="col-md-9">

    <div class="page-content">
        <div class="page-body event-page mb-2">
            <p
                style="margin: 0in 0in 7.5pt; text-align: justify; line-height: 16.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante nisi, gravida eget nibh ut, euismod vestibulum enim. Donec quis sapien in neque mollis sodales in eget libero. Nulla eu dolor malesuada, interdum dolor sed, condimentum lectus. Vestibulum dolor turpis, egestas non tempor nec, tincidunt non massa. Etiam feugiat arcu pharetra nunc hendrerit, a blandit nibh pellentesque. Morbi sodales nibh et accumsan consequat. Phasellus posuere, nisl eget dignissim molestie, nulla velit congue massa, sed dapibus neque tortor non libero. Praesent ac tortor malesuada elit mattis mollis nec in nisl.

                Duis elementum augue diam, tincidunt suscipit sem congue ac. Aenean et gravida metus, ac dignissim enim. Etiam vitae metus tincidunt, tincidunt erat sed, posuere nunc. Mauris porttitor ligula nec erat vestibulum tempor. Praesent id orci tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In scelerisque purus eros, id feugiat lacus semper sodales. Aliquam erat volutpat. Maecenas tempus eros sed dui fermentum tempus. Sed sit amet consectetur ante. Integer id dignissim quam.

                Vestibulum vitae rutrum risus. Donec metus metus, aliquet at sem eu, suscipit eleifend nunc. Mauris pharetra ex nec magna placerat sollicitudin. Nulla eget urna volutpat, varius nibh vitae, fringilla mi. Nullam bibendum erat quis massa viverra tristique. Ut id nulla vestibulum, tempus enim eu, pulvinar lectus. Ut facilisis faucibus lectus, eget pellentesque mauris gravida a. Fusce efficitur cursus ligula, sed pellentesque neque consectetur quis. Suspendisse auctor augue sed quam sodales lobortis. Donec convallis sapien quis lorem venenatis tincidunt. Donec mauris elit, dignissim at arcu id, pellentesque ullamcorper tellus. Sed luctus orci at justo congue, posuere viverra ligula tristique. Etiam commodo vel diam at laoreet. Sed ac leo eget tellus sollicitudin pulvinar eu vel nunc. Etiam consequat molestie leo, vitae dignissim mauris efficitur a.
                </p>

        </div>
    </div> <!-- /.content -->





</div>
<div class="col-md-3">

    <?php


    $adr = $adr[0]->image;
    $adr = json_decode($adr);

    foreach($adr as $adrlist){

    ?>
    <img width="100%" src="{{ asset(env('FILE_PATH').'ad/'.$adrlist->name) }}" alt="" />

    <?php
    }



    ?>

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
