<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
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

</style>
<livewire:styles />

</head>

<body style="font-family: Arial, Helvetica, sans-serif">
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
                    </div>
                </div>
            </div>
        </div>
        <div class="middleheader">
            <div class="cus_container">
                <div class="row">
                    <div class="col-md-3" style="font-size: 14px">

<img width="200px" src="{{ asset(env('FILE_PATH').'logo/'.$settings[0]->logo) }}" style="    padding: 23px 0;" alt="LOGO">


                    </div>


                    <div class="col-md-9">

                        <?php


                        $ad = $ad[0]->image;
                        $ad = json_decode($ad);

                        foreach($ad as $adlist){

                        ?>
                        <img width="100%" height="100px" src="{{ asset(env('FILE_PATH').'ad/'.$adlist->name) }}" alt="" />

                        <?php
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




