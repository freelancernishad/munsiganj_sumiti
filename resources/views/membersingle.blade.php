@extends('layouts.master')
@section('content')

<style>

.select2-selection {
  -webkit-box-shadow: 0;
  box-shadow: 0;
  background-color: #fff;
  border: 0;
  border-radius: 0;
  color: #555555;
  font-size: 14px;
  outline: 0;
  min-height: 38px;
  text-align: left;
}

.select2-selection__rendered {
  margin: 5px;
}

.select2-selection__arrow {
  margin: 5px;
}
</style>


    <main>
        <section class="hero_area">
            <div class="row p-0">
                <div class="col-md-3">
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
                <div class="col-md-9" style="padding-top:50px;padding-bottom:50px">
                    <div class="memberlist">

                        <div class="membertable">



                            @foreach ($single as $singleList)



                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4"><img src="{{ $singleList->image }}" alt=""></div>
                                <div class="col-md-4"></div>


                                <div class="col-md-6 mt-3"><b>Reference Id : </b> {{ $singleList->Reference }}</div>

                                <div class="col-md-6 mt-3"><b>Name : </b> {{ $singleList->name }}</div>
                                <div class="col-md-6 mt-3"><b>Age : </b> {{ $singleList->age }}</div>
                                <div class="col-md-6 mt-3"><b>Date of birth : </b> {{ $singleList->dob }}</div>

                                <div class="col-md-6 mt-3"><b>Father's Name : </b> {{ $singleList->father_name }}</div>
                                <div class="col-md-6 mt-3"><b>Spouse Name : </b> {{ $singleList->Spouse_name }}</div>
                                <div class="col-md-6 mt-3"><b>Educational Qualifications : </b> {{ $singleList->education }}</div>


                                <div class="col-md-6 mt-3"><b>Occupation : </b> {{ $singleList->occupation }}</div>
                                <div class="col-md-6 mt-3"><b>Contact Number 1 : </b> {{ $singleList->phoneNumber }}</div>
                                <div class="col-md-6 mt-3"><b>Contact Number 2 : </b> {{ $singleList->phoneNumber2 }}</div>



                                <div class="col-md-6 mt-3"><b>Email : </b> {{ $singleList->email }}</div>
                                <div class="col-md-6 mt-3"><b>Website : </b> {{ $singleList->website }}</div>
                                <div class="col-md-6 mt-3"><b>Professional address : </b> {{ $singleList->pesahgot_address }}</div>



                                <div class="col-md-6 mt-3"><b>Blood group : </b> {{ $singleList->blood_group }}</div>
                                <div class="col-md-6 mt-3"><b>National ID NO. : </b> {{ $singleList->nid }}</div>
                                <div class="col-md-6 mt-3"><b>Membership Fee : </b> {{ $singleList->fee }}</div>



                                <div class="col-md-6 mt-3"><b>Permanent address : </b> {{ $singleList->pr_dist }}, {{ $singleList->pr_thana }}, {{ $singleList->pr_post }}, {{ $singleList->pr_vill }}</div>
                                <div class="col-md-6 mt-3"><b>Present address : </b> {{ $singleList->Present_address }}</div>





                            </div>



                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>



@endsection
