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
                {{ settings()[0]->About }}
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

    </main>

    @endsection
