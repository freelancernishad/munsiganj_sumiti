@extends('layouts.master')
@section('content')
    <style>
        .register-main-form {
            background: #e6e8e7;
            border: 1px solid #b0b0b0;
            border-radius: 5px;
            margin: 0 18px;
        }

        li.select2-results__option.select2-results__option--selectable {
            width: 100% !important;
            display: block;
        }


        #step {
            border-radius: 50%;
            height: 80px;
            width: 80px;
            text-align: center;
            padding: 18px;
            font-size: 27px;
            border: 2px solid #888888;
        }

        hr {
            width: 33%;
            height: 2px;
            position: relative;
            top: 26px;
        }
#bank{
    display: none;
}

#mobleBank{
    display: none;
}

    </style>


                <?php
                if ($step==1){
                ?>
                <style>
                .first {
                    border: 2px solid #0d6efd !important;
                    color: #0d6efd;
                }
                </style>
                <?php
                }else if($step==2){
                ?>
                <style>
                .first,.second {
                    border: 2px solid #0d6efd !important;
                    color: #0d6efd;
                }
                </style>

                <?php
                }else if($step==3){
                ?>
                <style>
                        .first,.second,.third {
            border: 2px solid #0d6efd !important;
            color: #0d6efd;
        }
                </style>

                <?php
                }
                ?>


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
                    <img width="100%" src="{{ asset(env('FILE_PATH') . 'ad/' . $adllist->name) }}" alt="" />
                    <?php
                  }
                  ?>
                </div>
                <div class="col-md-9" style="margin: 50px 0px;">






                    <div class="">
                        <h4 class="bg-primary text-white p-2 rounded-3" style="    margin-bottom: 22px;">Membership
                            Application</h4>
                        <div class="d-flex mb-3 justify-content-center">
                            <div>
                                <p id="step" class="first">1</p>
                                <p>Company</p>
                            </div>
                            <hr class="hr_1">
                            <div>
                                <p id="step" class="second ">2</p>
                                <p>Referances</p>
                            </div>
                            <hr class="hr_2">
                            <div>
                                <p id="step" class="third ">3</p>
                                <p>Payment</p>
                            </div>
                        </div>
                        <p>To apply for membership please completed all questions</p>


                        @if ($step==1)



                        @foreach ($rows as $row)
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left row"
                                method='post' action="{{ route('memeber.register') }}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" id="id" value="{{ $row->id }}">
                                <input type="hidden" name="memberId" id="memberId" value="{{ $row->memberId }}">
                                <input type="hidden" name="status" id="status" value="Unpaid">
                                <input type="hidden" name="step" id="status" value="2">


                                <label>Memeber Image</label>


                                <input class="form-control mx-2" type="file" id="images">
                                <input type="hidden" class="form-control" name="image" id="image"
                                    value="{{ $row->image }}">


                                <div class="col-md-5 mb-3"></div>
                                <div class="col-md-2 mb-3"><img width="100%" id="imagepreview" src="{{ $row->image }}"
                                        alt=""></div>
                                <div class="col-md-5 mb-3"></div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="mt-2">
                                        <label>Name</label>
                                        <input type="text" name="name" id="name" value="{{ $row->name }}" required
                                            class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="mt-2">
                                        <label>Age</label>
                                        <input type="text" name="age" id="age" value="{{ $row->age }}" required
                                            class="form-control">
                                    </div>
                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="mt-2">
                                        <label>Birthday</label>
                                        <input type="date" name="dob" id="dob" value="{{ $row->dob }}" required
                                            class="form-control">
                                    </div>
                                </div>



                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="mt-2">
                                        <label>Father's Name</label>
                                        <input type="text" name="father_name" id="father_name"
                                            value="{{ $row->father_name }}" class="form-control">
                                    </div>
                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="mt-2">
                                        <label>Spouse Name</label>
                                        <input type="text" name="Spouse_name" id="Spouse_name"
                                            value="{{ $row->Spouse_name }}" required class="form-control">
                                    </div>
                                </div>






                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="mt-2">
                                        <label>Educational Qualifications</label>
                                        <input type="text" name="education" id="education" value="{{ $row->education }}"
                                            required class="form-control">
                                    </div>
                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="mt-2">
                                        <label>Occupation</label>
                                        <input type="text" name="occupation" id="occupation"
                                            value="{{ $row->occupation }}" required class="form-control">
                                    </div>
                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="mt-2">
                                        <label>Contact Number 1</label>
                                        <input type="text" name="phoneNumber" id="phoneNumber"
                                            value="{{ $row->phoneNumber }}" required class="form-control">
                                    </div>
                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="mt-2">
                                        <label>Contact Number 2</label>
                                        <input type="text" name="phoneNumber2" id="phoneNumber2"
                                            value="{{ $row->phoneNumber2 }}" class="form-control">
                                    </div>
                                </div>




                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="mt-2">
                                        <label>Email</label>
                                        <input type="email" name="email" id="email" value="{{ $row->email }}"
                                            class="form-control">
                                    </div>
                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="mt-2">
                                        <label>Website</label>
                                        <input type="text" name="website" id="website" value="{{ $row->website }}"
                                            class="form-control">
                                    </div>
                                </div>



                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="mt-2">
                                        <label>Professional address</label>
                                        <input type="text" id="pesahgot_address" value="{{ $row->pesahgot_address }}"
                                            required class="form-control">
                                    </div>
                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="mt-2">
                                        <label>Blood group</label>
                                        <select class="form-control" name="blood_group" id="blood_group" required>
                                            <option value="">Select Blood Group</option>
                                            <option>A+</option>
                                            <option>A-</option>
                                            <option>B+</option>
                                            <option>B-</option>
                                            <option>AB+</option>
                                            <option>AB-</option>
                                            <option>O+</option>
                                            <option>O-</option>
                                        </select>

                                        <script>
                                            document.getElementById('blood_group').value = "{{ $row->blood_group }}";
                                        </script>
                                    </div>
                                </div>









                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="mt-2">
                                        <label>National ID NO.</label>
                                        <input type="text" name="nid" id="nid" value="{{ $row->nid }}" required
                                            class="form-control">
                                    </div>
                                </div>


                                {{-- col-md-6 start --}}
                                <div class="col-md-6 d-none">
                                    <div class="form-group">
                                        <label>Related social working details (optional)</label>
                                        <input type="text" class="form-control" name="samagik_unoyon" id="samagik_unoyon"
                                            value="{{ $row->samagik_unoyon }}">
                                    </div>
                                </div>
                                {{-- col-md-6 start --}}
                                <div class="col-md-6 d-none">
                                    <div class="form-group">
                                        <label>বিশেষ সখ (যদি থাকে)</label>
                                        <input type="text" class="form-control" name="hobby" id="hobby"
                                            value="{{ $row->hobby }}">
                                    </div>
                                </div>
                                {{-- col-md-6 start --}}
                                <div class="col-lg-6 col-md-6 col-sm-12 d-none">
                                    <div class="form-group">
                                        <label>Membership Fee</label>
                                        <input type="text" class="form-control" name="fee" id="fee"
                                            value="{{ $row->fee }}">
                                    </div>
                                </div>









                                <div class="col-md-12">
                                    <h3>Permanent address</h3>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>District</label>
                                        <select id="districtid1" onchange="changedistrict(1)" class="form-control"
                                            required>
                                            <option value="">District</option>
                                            {{-- @foreach ($districts as $dList) --}}
                                                <option value="48">Munshiganj</option>
                                            {{-- @endforeach --}}
                                        </select>
                                        <input type="hidden" class="form-control" name="pr_dist" id="pr_dist1"
                                            value="{{ $row->pr_dist }}">
                                    </div>
                                </div>
                                {{-- col-md-6 start --}}
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Thana/Upazila</label>
                                        <select id="upszilaid1" onchange="changethana(1)" class="form-control" required>
                                            <option value="">Thana/Upazila</option>
                                        </select>
                                        <input type="hidden" class="form-control" name="pr_thana" id="pr_thana1"
                                            value="{{ $row->pr_thana }}">
                                    </div>
                                </div>
                                {{-- col-md-6 start --}}
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Union</label>
                                        <select id="unionid1" onchange="changeunioun(1)" class="form-control" required>
                                            <option value="">Union</option>
                                        </select>
                                        <input type="hidden" class="form-control" name="pr_post" id="pr_post1"
                                            value="{{ $row->pr_post }}">
                                    </div>
                                </div>
                                {{-- col-md-6 start --}}
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Village</label>
                                        <input type="text" class="form-control" name="pr_vill" id="pr_vill"
                                            value="{{ $row->pr_vill }}" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h3>Present address </h3>
                                    <h5 style="display:none"><input style="width: 32px;
    height: 19px;" onclick="sameAddress()" type="checkbox" id="same_Address"> <label for="same_Address">একই ঠিকানা হলে টিক
                                            দিন</label></h5>
                                </div>
                                {{-- col-md-6 start --}}
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="Present_address" id="Present_address" class="form-control"
                                            cols="30" rows="4" style="resize:none"
                                            required>{{ $row->Present_address }}</textarea>
                                    </div>
                                </div>
                                {{-- col-md-6 start --}}
                                <div class="col-md-6 d-none">
                                    <div class="form-group">
                                        <label>জেলা</label>
                                        <select id="districtid2" onchange="changedistrict(2)" class="form-control">
                                            <option value="">জেলা</option>
                                            @foreach ($districts as $dList)
                                                <option value="{{ $dList->id }}">{{ $dList->bn_name }}</option>
                                            @endforeach
                                        </select>
                                        <input type="hidden" class="form-control" name="p_dist" id="pr_dist2"
                                            value="{{ $row->p_dist }}">
                                    </div>
                                </div>
                                {{-- col-md-6 start --}}
                                <div class="col-md-6 d-none">
                                    <div class="form-group">
                                        <label>থানা/উপজেলা</label>
                                        <select id="upszilaid2" onchange="changethana(2)" class="form-control">
                                            <option value="">উপজেলা</option>
                                        </select>
                                        <input type="hidden" class="form-control" name="p_thana" id="pr_thana2"
                                            value="{{ $row->p_thana }}">
                                    </div>
                                </div>
                                {{-- col-md-6 start --}}
                                <div class="col-md-6 d-none">
                                    <div class="form-group">
                                        <label>ডাকঘর</label>
                                        <select id="unionid2" onchange="changeunioun(2)" class="form-control">
                                            <option value="">ডাকঘর</option>
                                        </select>
                                        <input type="hidden" class="form-control" name="p_post" id="pr_post2"
                                            value="{{ $row->p_post }}">
                                    </div>
                                </div>
                                {{-- col-md-6 start --}}
                                <div class="col-md-6 d-none">
                                    <div class="form-group">
                                        <label>গ্রাম</label>
                                        <input type="text" class="form-control" name="p_vill" id="p_vill"
                                            value="{{ $row->p_vill }}">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <input type="checkbox" id="agree" required> <label for="agree">Accept </label>
                                 </div>
                                <button type="submit" class="btn btn-primary w-25 mx-auto mt-3" type="submit">Next</button>
                            </form>
                        @endforeach
                        @elseif($step==2)


                        @foreach ($rows as $row)
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left row"
                                method='post' action="{{ route('memeber.register') }}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" id="id" value="{{ $id }}">
                                <input type="hidden" name="status" id="status" value="Unpaid">
                                <input type="hidden" name="step" id="status" value="3">

                          {{-- col-md-6 start --}}
                          <div class="col-md-12">
                            <div class="form-group">
                                <label>Reference Id</label>
                                <select name="Reference" id="Reference" class="form-control" onchange="referencechange(this.value)" required>
                                    <option value="">Reference Id</option>
                                    @foreach ($member as $memberList)
                                        <option value="{{ $memberList->memberId }}">
                                            {{ $memberList->name }} ( {{ $memberList->memberId }}) </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

             {{-- col-md-6 start --}}
                          <div class="col-md-12" id="referDetails">

                        </div>


                                <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary w-25 mx-auto mt-3" type="submit">Next</button>
                            </div>
                            </form>
                            @endforeach

                            @elseif($step==3)


                        @foreach ($rows as $row)
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left row"
                                method='post' action="{{ route('memeber.register') }}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" id="id" value="{{ $id }}">
                                <input type="hidden" name="memberid" id="memberid" value="{{ $id }}">
                                <input type="hidden" name="status" id="status" value="Pending">
                                <input type="hidden" name="step" id="status" value="4">

                          {{-- col-md-6 start --}}
                          <div class="col-md-6">
                            <div class="form-group">
                                <label>Payment Method</label>
                                <select name="method" id="method" class="form-control" onchange="bankDetail(this.value)" required>
                                    <option value="">Select Payment Method</option>
                                    <option value="Bank">Bank</option>
                                    <option value="Bkash">Bkash</option>
                                    <option value="Rocket">Rocket</option>
                                    <option value="Nogod">Nogod</option>
                                    <option value="Upay">Upay</option>

                                </select>
                            </div>
                        </div>

<div class="col-md-12 row" id="bank">




                          {{-- col-md-6 start --}}
                          <div class="col-md-12">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic excepturi fuga, nesciunt qui similique quod enim accusantium magni dolorem ut in illo, necessitatibus aperiam? Error quod officiis asperiores doloremque dolor?
                        </div>



                          {{-- col-md-6 start --}}
                          <div class="col-md-6">
                            <div class="form-group">
                                <label>Bank Name </label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                        </div>



                          {{-- col-md-6 start --}}
                          <div class="col-md-6">
                            <div class="form-group">
                                <label>Branch</label>
                                <input type="text" name="brance_name" id="brance_name" class="form-control">
                            </div>
                        </div>


                          {{-- col-md-6 start --}}
                          <div class="col-md-6">
                            <div class="form-group">
                                <label>Account Name</label>
                                <input type="text" name="account_name" id="account_name" class="form-control">
                            </div>
                        </div>



                          {{-- col-md-6 start --}}
                          <div class="col-md-6">
                            <div class="form-group">
                                <label>Account Number</label>
                                <input type="text" name="account_Number" id="account_Number" class="form-control">
                            </div>
                        </div>



                          {{-- col-md-6 start --}}
                          <div class="col-md-6">
                            <div class="form-group">
                                <label>Amount </label>
                                <input type="text" name="amount" id="amount1" class="form-control">
                            </div>
                        </div>




                          {{-- col-md-6 start --}}
                          <div class="col-md-6">
                            <div class="form-group">
                                <label>Payment Date</label>
                                <input type="date" name="Payment_Date" id="Payment_Date" class="form-control">
                            </div>
                        </div>

               {{-- col-md-6 start --}}
               <div class="col-md-6">
                <div class="form-group">
                    <label>Deposit slip upload</label>
                    <input type="file" name="Slip_Upload" id="Slip_Upload" class="form-control">
                </div>
            </div>

              {{-- col-md-6 start --}}
               <div class="col-md-6">
                <div class="form-group">
                    <label>Emergency Contact Number</label>
                    <input type="text" name="Emergency" id="Emergency" class="form-control">
                </div>
            </div>




                    </div>


<div class="col-md-12 row" id="mobleBank">
                          {{-- col-md-6 start --}}
                          <div class="col-md-6">
                            <div class="form-group">
                                <label>Payment Number</label>
                                <input type="text" name="number" id="number" class="form-control">
                            </div>
                        </div>



                          {{-- col-md-6 start --}}
                          <div class="col-md-6">
                            <div class="form-group">
                                <label>Payment Amount</label>
                                <input type="text" name="amount" id="amount2" class="form-control">
                            </div>
                        </div>


                          {{-- col-md-6 start --}}
                          <div class="col-md-6">
                            <div class="form-group">
                                <label>Transaction ID (TRXID)</label>
                                <input type="text" name="TRXID" id="TRXID" class="form-control">
                            </div>
                        </div>

                    </div>


                                <div class="col-sm-12 text-center">
                                    <div class="g-recaptcha"  data-sitekey="{{ env('GOOGLE_CAPTCHA_SITEKEY') }}"></div>
                            </div>



                                <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary w-25 mx-auto mt-3" type="submit">Next</button>
                            </div>
                            </form>
                            @endforeach

                        @endif
                    </div>




                </div>
            </div>
        </section>
    </main>
    <script>
        @if ($rows[0]->id == '')
            $('#districtid1').val(48);
            changedistrict(1);
        @endif
        //getthana
        function changedistrict(id) {
            var district = $('#districtid' + id).val();
            var thana = $('#upszilaid' + id);
            $.ajax({
                type: 'POST',
                url: '/getthana',
                data: {
                    id: district,
                    _token: '<?php echo csrf_token(); ?>'
                },
                success: function(data) {
                    var data = data.split(',,,');
                    var district = $('#pr_dist' + id).val(data[0]);
                    const obj = JSON.parse(data[1]);
                    var length = obj.length;
                    //console.log(obj)
                    var option = '';
                    for (var i = 0; i < length; i++) {
                        option += '<option value="' + obj[i].id + '">' + obj[i].name + '</option>';
                    }
                    thana.html('<option value="">Thana/Upazila</option>' + option)
                }
            });
        }

        function changethana(id) {
            var thana = $('#upszilaid' + id).val();
            var union = $('#unionid' + id);
            $.ajax({
                type: 'POST',
                url: '/getunioun',
                data: {
                    id: thana,
                    _token: '<?php echo csrf_token(); ?>'
                },
                success: function(data) {
                    var data = data.split(',,,');
                    var thana = $('#pr_thana' + id).val(data[0]);
                    const obj = JSON.parse(data[1]);
                    var length = obj.length;
                    //console.log(obj)
                    var option = '';
                    for (var i = 0; i < length; i++) {
                        option += '<option value="' + obj[i].id + '">' + obj[i].name + '</option>';
                    }
                    union.html('<option value="">Union</option>' + option)
                }
            });
        }
        //   getunioun
        function changeunioun(id) {
            var thana = $('#unionid' + id).val();
            $.ajax({
                type: 'POST',
                url: '/gotoUnion',
                data: {
                    id: thana,
                    _token: '<?php echo csrf_token(); ?>'
                },
                success: function(data) {
                    console.log(data);
                    $('#pr_post' + id).val(data);
                }
            });
        }
        //   getunioun
        function referencechange(refid) {

// alert(id)



            $.ajax({
                type: 'get',
                url: '/refdata?id='+refid,
                success: function(data) {


document.getElementById('referDetails').innerHTML=data;

                    console.log(data);
                }
            });
        }

        function sameAddress() {
            var same_Address = document.getElementById('same_Address');
            var districtid1 = document.getElementById('districtid1');
            var districtid2 = document.getElementById('districtid2');
            var upszilaid1 = document.getElementById('upszilaid1');
            var upszilaid2 = document.getElementById('upszilaid2');
            var unionid1 = document.getElementById('unionid1');
            var unionid2 = document.getElementById('unionid2');
            var p_vill = document.getElementById('p_vill');
            var submitBtn = document.getElementById('submitBtn');
            submitBtn.disabled = true;
            if (same_Address.checked == true) {
                districtid2.value = districtid1.value;
                changedistrict(2);
                setTimeout(function() {
                    upszilaid2.value = upszilaid1.value;
                    changethana(2);
                    setTimeout(function() {
                        unionid2.value = unionid1.value;
                        changeunioun(2)
                        submitBtn.disabled = false;
                    }, 700);
                    p_vill.value = pr_vill.value;
                }, 1000);
            } else {
                districtid2.value = '';
                upszilaid2.value = '';
                unionid2.value = '';
                p_vill.value = '';
                submitBtn.disabled = false;
            }
        }



        @if (session()->has('msg'))
            Swal.fire({
            icon: "{{ session('icon') }}",
            title: "{{ session('iconstatus') }}",
            text: "{{ session('msg') }}",
            })
        @endif




        $(document).ready(function() {
            $('#Reference').select2();
        });


        function bankDetail(value){

            var bank = document.getElementById('bank');
            var mobleBank = document.getElementById('mobleBank');
            var amount1 = document.getElementById('amount1');
            var amount2 = document.getElementById('amount2');

           if(value==''){
            bank.style.display="none"
            mobleBank.style.display="none"
           }else if(value=='Bank'){
            bank.style.display="flex"
            mobleBank.style.display="none"
            amount1.disabled = false
            amount2.disabled = true
           }else{
            bank.style.display="none"
            mobleBank.style.display="flex"
            amount2.disabled = false
            amount1.disabled = true
           }
        }

    </script>
@endsection
