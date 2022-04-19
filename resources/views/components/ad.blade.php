<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $settings[0]->title }}</title>
    <link rel="icon" href="{{ asset('assets/img/1646132706_Logo.png') }}" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/registers.css') }}" />

    <link href="https://kit-pro.fontawesome.com/releases/v5.15.2/css/pro.min.css" rel="stylesheet"/>

	 <link href="{{ asset('admin_asset/css/dataTables.bootstrap.min.css') }}" rel="stylesheet" >
     <link href="{{ asset('admin_asset/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
     <link href="{{ asset('admin_asset/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
     <link href="{{ asset('admin_asset/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
     <link href="{{ asset('admin_asset/css/scroller.bootstrap.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/owl.slider.min.css') }}" />



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.4.1/swiper-bundle.min.css"
        integrity="sha512-kftIhGv/k/oRHmfDRDEb1MxlaWlW4tiz21rx0yNC2zUWM2n4nxRtX1z3Ijmu54he3Yf9sBX4skJaCe3LTJV1rQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- jQuery -->
    <script src="{{ asset('admin_asset/js/jquery.min.js') }}"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" integrity="sha512-2eMmukTZtvwlfQoG8ztapwAH5fXaQBzaMqdljLopRSA0i6YKM8kBAOrSSykxu9NN9HrtD45lIqfONLII2AFL/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset('newassets/css/all.min.css') }}"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('newassets/css/main.css') }}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('newassets/css/responsive.css') }}">

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.6/dist/sweetalert2.all.min.js"></script>
    <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">
<style>

.modal-backdrop.show {
    opacity: .5;
    display: none !important;
}
.modal-open .modal {
    overflow-x: hidden;
    overflow-y: auto;
    background: #00000085;
}
li.select2-results__option.select2-results__option--selectable {
    width: 100% !important;
    display: block;
}
.ourMission h6 {
    color: red;
    font-weight: 600;
    margin: 19px 0px;
    margin-top: 2px !important;
}

.sticky {
    z-index: 999;
  position: fixed;
  top: 0;
  width: 100%;
}
.ifameVideo iframe {
    width: 100% !important;
    margin-top: 31px;
    height: 206px;
}
.noticeHead {

    position: relative;

}

.noticeHead:after {
    content: '';
    /* background: red; */
    top: 21px;
    right: -16px;
    position: absolute;
    border-top: 19px solid #cbb105;
    border-left: 43px solid transparent;
    border-bottom: 37px solid transparent;
    border-right: 45px solid #cbb10500;
    transform: rotate(450deg);
}
.noticeHead {
    background: #d02804;
    color: white;
    padding: 16px 19px;
    font-size: 36px !important;
    width: 292px;
}
.show_dropdown {
    background: #fdfafa !important;
}

@import url('https://fonts.maateen.me/charu-chandan-3d/font.css');

p{
   font-family: 'SolaimanLipi', sans-serif;
}
footer.footer {
    margin-top: 50px;
}
</style>



<livewire:styles />

</head>

<body style="font-family: 'SolaimanLipi', sans-serif;">




    <div class="modal fade" id="overlay">
        <div class="modal-dialog" style="    max-width: 753px;
        overflow: hidden;">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            </div>
            <div class="modal-body" id="popupad">

            </div>
          </div>
        </div>
      </div>

    <header class="herder">
        <div class="topheader">
            <div class="cus_container">
                <div class="row">
                    <div class="col-md-6" style="font-size: 14px">
                        <p class="welcome mb-0 text-white">
                           {{ $settings[0]->title }}
                        </p>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <div class="text-white" style="font-size: 14px">{{ date('d F Y') }}</div>
                        <div class="ml-3 text-white" style="font-size: 14px">
                            <i class="far fa-envelope"></i> {{ $settings[0]->email }}
                        </div>

                        <div class="ml-3 text-white" style="font-size: 14px">

<?php
    $urlfull = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    ?>

                           <a target="_blank" style="color: white;background: #d02804;padding: 10px 4px;" href="https://www.facebook.com/sharer/sharer.php?u={{ $urlfull }}"> <i class="fas fa-share-alt fa-fw"></i> Share This page</a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="middleheader">
            <div class="cus_container">
                <div class="row">
                    <div class="col-md-3" style="font-size: 14px">

<img width="300px" src="{{ asset(env('FILE_PATH').'logo/'.$settings[0]->logo) }}" style="    padding: 8px 0;" alt="LOGO">


                    </div>


                    <div class="col-md-9">

                        <?php


                        $ad = $ad[0]->image;
                        if($ad!=''){
                        $ad = json_decode($ad);
    //dd($ad);
                        foreach($ad as $adlist){

                        ?>
                        <a target="_blank" href="{{ $adlist->url  }}">
                            <img  width="100%" height="100px" src="{{ asset(env('FILE_PATH').'ad/'.$adlist->name) }}" alt="" />
                         </a>
                        <?php
                        }
                        }



                        ?>


                    </div>




{{--
                    <div class="col-md-3">
                        <form action="" class="d-flex w-100 search_form">
                            <input type="text" id="search" class="w-90" name="search" />
                            <button type="submit" class="search_btn">
                                <i class="fal fa-search"></i>
                            </button>
                        </form>
                    </div> --}}
                </div>
            </div>




