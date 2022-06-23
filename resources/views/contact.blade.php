@extends('layouts.master')

@section('content')
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


                <div class="col-md-9" style="margin-top:30px">




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
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.6985209818745!2d90.38206561434856!3d23.758127894399408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8a61e6a58b7%3A0x63f88aacab1d1a4!2s66%20Indira%20Rd%2C%20Dhaka%201215!5e0!3m2!1sen!2sbd!4v1648052810029!5m2!1sen!2sbd"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    <section class="committeSection py-3 pl-3">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="contact_form">

                                    <h4>Contact Details</h4>

                                    <div class="address" style="margin-top:10px;margin-bottom:20px">
                                        <ul class="list-unstyled">
                                            <li class="" style="    display: block;">
                                                <i style="color: #c12729" class="fas fa-map-marker-alt"></i>
                                                &nbsp; {{ settings()[0]->address }}
                                            </li>
                                            <li class="" style="    display: block;">
                                                <i style="color: #c12729" class="fas fa-envelope"></i>
                                                &nbsp; {{ settings()[0]->email }}
                                            </li>
                                            <li class="" style="    display: block;">
                                                <i style="color: #c12729" class="fas fa-phone-alt"></i>
                                                &nbsp; {{ settings()[0]->phone }}
                                            </li>
                                        </ul>

                                    </div>


                                    <h4>Send an enquiry</h4>

                                    <h5>Your Details </h5>
                                    <form action="{{ route('contact_submit') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label>First Name (Reauired)</label>
                                            <input type="text" name="fname" id="fname" class="form-control"
                                                required>
                                        </div>


                                        <div class="form-group">
                                            <label>Last Name (Reauired)</label>
                                            <input type="text" name="lname" id="lname" class="form-control"
                                                required>
                                        </div>



                                        <div class="form-group">
                                            <label>Email (Reauired)</label>
                                            <input type="email" name="email" id="email" class="form-control"
                                                required>
                                        </div>

                                        <h5>Your enquiry </h5>


                                        <div class="form-group">
                                            <label>Your enquiry (Reauired)</label>
                                            <textarea name="enquiry" id="enquiry" cols="30" rows="4" class="form-control" style="resize:none" required></textarea>
                                        </div>


                                        <h5>Additional Information</h5>


                                        <div class="form-group">
                                            <label>Telephone Number</label>
                                            <input type="text" name="Telephone" id="Telephone" class="form-control">

                                        </div>



                                        <div class="form-group">
                                            <label>Website</label>
                                            <input type="text" name="Website" id="Website" class="form-control">

                                        </div>



                                        <div class="form-group">
                                            <label>Organisation Name</label>
                                            <input type="text" name="Organisation" id="Organisation"
                                                class="form-control">

                                        </div>


                                        <div class="form-group">
                                            <label>Job Title</label>
                                            <input type="text" name="job" id="job" class="form-control">

                                        </div>


                                        <button type="submit" class="contactBtn btn btn-info">Submit</button>


                                    </form>




                                </div>

                            </div>
                            <div class="col-md-3">
                                <?php


    $adr = $adr[0]->image;
    if($adr!=''){
    $adr = json_decode($adr);

    foreach($adr as $adrlist){

    ?>
                                <a target="_blank" href="{{ $adrlist->url }}">
                                    <img width="100%" src="{{ asset(env('FILE_PATH') . 'ad/' . $adrlist->name) }}"
                                        alt="" />
                                </a>
                                <?php
    }
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

    <script>
        @if (session()->has('message'))
            Swal.fire({
                icon: 'success',
                title: 'Thank you!',
                text: '<?php echo session('message'); ?>',
            })
        @endif
    </script>
@endsection
