@extends('layouts.master')
@section('content')

    <style>
        .register-main-form {
            background: #e6e8e7;
            border: 1px solid #b0b0b0;
            border-radius: 5px;
            margin: 0 18px;
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
                    <img width="100%" src="{{ asset(env('FILE_PATH') . 'ad/' . $adllist->name) }}" alt="" />
                    <?php 
                  }
                  ?>
                </div>
                <div class="col-md-9">
                    <div class="register-main-form  p-3 mt-5">
                        <h4>Membership Application</h4>
                        <p>To apply for membership please completed all questions</p>
                        @foreach ($rows as $row)
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method='post'
                                action="{{ route('memeber.register') }}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" id="id" value="{{ $row->id }}">
                                <input type="hidden" name="memberId" id="memberId" value="{{ $row->memberId }}">
                                <input type="hidden" name="status" id="status" value="{{ $row->status }}">
                                <div class="row">
                                    {{-- col-md-6 start --}}
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>ছবি</label>
                                            <input class="form-control" type="file" id="images" required>
                                            <input type="hidden" class="form-control" name="image" id="image"
                                                value="{{ $row->image }}">
                                        </div>
                                    </div>
                                    <div class="col-md-5 mb-3"></div>
                                    <div class="col-md-2 mb-3"><img width="100%" id="imagepreview"
                                            src="{{ $row->image }}" alt=""></div>
                                    <div class="col-md-5 mb-3"></div>
                                    {{-- col-md-6 start --}}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>নাম</label>
                                            <input type="text" class="form-control" name="name" id="name"
                                                value="{{ $row->name }}" required>
                                        </div>
                                    </div>
                                    {{-- col-md-6 start --}}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>বয়স</label>
                                            <input type="text" class="form-control" name="age" id="age"
                                                value="{{ $row->age }}" required>
                                        </div>
                                    </div>
                                    {{-- col-md-6 start --}}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>জন্ম তারিখ</label>
                                            <input type="date" class="form-control" name="dob" id="dob"
                                                value="{{ $row->dob }}" required>
                                        </div>
                                    </div>
                                    {{-- col-md-6 start --}}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>পিতার/স্বামীর নাম</label>
                                            <input type="text" class="form-control" name="father_name" id="father_name"
                                                value="{{ $row->father_name }}" required>
                                        </div>
                                    </div>
                                    {{-- col-md-6 start --}}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>শিক্ষাগত যোগ্যতা</label>
                                            <input type="text" class="form-control" name="education" id="education"
                                                value="{{ $row->education }}" required>
                                        </div>
                                    </div>
                                    {{-- col-md-6 start --}}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>পেশা</label>
                                            <input type="text" class="form-control" name="occupation" id="occupation"
                                                value="{{ $row->occupation }}" required>
                                        </div>
                                    </div>
                                    {{-- col-md-6 start --}}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>ফোন নাম্বর</label>
                                            <input type="text" class="form-control" name="phoneNumber" id="phoneNumber"
                                                value="{{ $row->phoneNumber }}" required>
                                        </div>
                                    </div>
                                    {{-- col-md-6 start --}}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>ইমেইল</label>
                                            <input type="text" class="form-control" name="email" id="email"
                                                value="{{ $row->email }}" >
                                        </div>
                                    </div>
                                    {{-- col-md-6 start --}}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>ওয়েবসাইট</label>
                                            <input type="text" class="form-control" name="website" id="website"
                                                value="{{ $row->phoneNumber }}" >
                                        </div>
                                    </div>
                                    {{-- col-md-6 start --}}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>পেশাগত ঠিকানা</label>
                                            <input type="text" class="form-control" name="pesahgot_address"
                                                id="pesahgot_address" value="{{ $row->pesahgot_address }}" required>
                                        </div>
                                    </div>
                                    {{-- col-md-6 start --}}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>সামজিক উন্নয়ন পূর্ব অভিজ্ঞতা (যদি থাকে)</label>
                                            <input type="text" class="form-control" name="samagik_unoyon"
                                                id="samagik_unoyon" value="{{ $row->samagik_unoyon }}">
                                        </div>
                                    </div>
                                    {{-- col-md-6 start --}}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>বিশেষ সখ (যদি থাকে)</label>
                                            <input type="text" class="form-control" name="hobby" id="hobby"
                                                value="{{ $row->hobby }}">
                                        </div>
                                    </div>
                                    {{-- col-md-6 start --}}
                                    <div class="col-md-6 d-none" >
                                        <div class="form-group">
                                            <label>সদস্য হওয়ার নির্দিষ্ট চাঁদা</label>
                                            <input type="text" class="form-control" name="fee" id="fee"
                                                value="{{ $row->fee }}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <h3>স্থায়ী ঠিকানা</h3>
                                    </div>
                                    {{-- col-md-6 start --}}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>জেলা</label>
                                            <select id="districtid1" onchange="changedistrict(1)" class="form-control" required>
                                                <option value="">জেলা</option>
                                                @foreach ($districts as $dList)
                                                    <option value="{{ $dList->id }}">{{ $dList->bn_name }}</option>
                                                @endforeach
                                            </select>
                                            <input type="hidden" class="form-control" name="pr_dist" id="pr_dist1"
                                                value="{{ $row->pr_dist }}">
                                        </div>
                                    </div>
                                    {{-- col-md-6 start --}}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>থানা/উপজেলা</label>
                                            <select id="upszilaid1" onchange="changethana(1)" class="form-control" required>
                                                <option value="">উপজেলা</option>
                                            </select>
                                            <input type="hidden" class="form-control" name="pr_thana" id="pr_thana1"
                                                value="{{ $row->pr_thana }}">
                                        </div>
                                    </div>
                                    {{-- col-md-6 start --}}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>ডাকঘর</label>
                                            <select id="unionid1" onchange="changeunioun(1)" class="form-control" required>
                                                <option value="">ডাকঘর</option>
                                            </select>
                                            <input type="hidden" class="form-control" name="pr_post" id="pr_post1"
                                                value="{{ $row->pr_post }}">
                                        </div>
                                    </div>
                                    {{-- col-md-6 start --}}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>গ্রাম</label>
                                            <input type="text" class="form-control" name="pr_vill" id="pr_vill"
                                                value="{{ $row->pr_vill }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <h3>বর্তমান ঠিকানা  </h3>
                                        <h5><input style="width: 32px;
                                          height: 19px;" onclick="sameAddress()" type="checkbox" id="same_Address"> <label for="same_Address">একই ঠিকানা হলে টিক দিন</label></h5>
                                    </div>



       {{-- col-md-6 start --}}
       <div class="col-md-6">
        <div class="form-group">
            <label>জেলা</label>

            <select id="districtid2" onchange="changedistrict(2)" class="form-control" required>
              <option value="">জেলা</option>
              @foreach ($districts as $dList)
                  <option value="{{ $dList->id }}">{{ $dList->bn_name }}</option>
              @endforeach
          </select>



            <input type="hidden" class="form-control" name="p_dist" id="pr_dist2"
                value="{{ $row->p_dist }}" required>
        </div>
    </div>

                                    {{-- col-md-6 start --}}
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label>থানা/উপজেলা</label>
                                          <select id="upszilaid2" onchange="changethana(2)" class="form-control" required>
                                              <option value="">উপজেলা</option>
                                          </select>


                                          <input type="hidden" class="form-control" name="p_thana" id="pr_thana2"
                                              value="{{ $row->p_thana }}">
                                      </div>
                                  </div>
                           
                                    {{-- col-md-6 start --}}
                                <div class="col-md-6">
                                      <div class="form-group">
                                        <label>ডাকঘর</label>
                                        <select id="unionid2" onchange="changeunioun(2)" class="form-control" required>
                                            <option value="">ডাকঘর</option>
                                        </select>


                                          <input type="hidden" class="form-control" name="p_post" id="pr_post2"
                                              value="{{ $row->p_post }}">
                                      </div>
                                  </div>

                                    {{-- col-md-6 start --}}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>গ্রাম</label>
                                            <input type="text" class="form-control" name="p_vill" id="p_vill"
                                                value="{{ $row->p_vill }}" required>
                                        </div>
                                    </div>


                                </div>
                                <div class="ln_solid"></div>
                                <div class="item form-group">
                                    <div class="col-md-6 col-sm-6 offset-md-3">
                                        <button type="submit"  id="submitBtn" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
      //getthana
      function changedistrict(id) {
          var district = $('#districtid'+id).val();
          var thana = $('#upszilaid'+id);
          $.ajax({
              type: 'POST',
              url: '/getthana',
              data: {
                  id: district,
                  _token: '<?php echo csrf_token(); ?>'
              },
              success: function(data) {
                  var data = data.split(',,,');
                  var district = $('#pr_dist'+id).val(data[0]);
                  const obj = JSON.parse(data[1]);
                  var length = obj.length;
                  //console.log(obj)
                  var option = '';
                  for (var i = 0; i < length; i++) {
                      option += '<option value="' + obj[i].id + '">' + obj[i].bn_name + '</option>';
                  }
                  thana.html('<option value="">উপজেলা</option>' + option)
              }
          });
      }

      function changethana(id) {
          var thana = $('#upszilaid'+id).val();
          var union = $('#unionid'+id);
          $.ajax({
              type: 'POST',
              url: '/getunioun',
              data: {
                  id: thana,
                  _token: '<?php echo csrf_token(); ?>'
              },
              success: function(data) {
                  var data = data.split(',,,');
                  var thana = $('#pr_thana'+id).val(data[0]);
                  const obj = JSON.parse(data[1]);
                  var length = obj.length;
                  //console.log(obj)
                  var option = '';
                  for (var i = 0; i < length; i++) {
                      option += '<option value="' + obj[i].id + '">' + obj[i].bn_name + '</option>';
                  }
                  union.html('<option value="">ডাকঘর</option>' + option)
              }
          });
      }
      //   getunioun
      function changeunioun(id) {
          var thana = $('#unionid'+id).val();
          $.ajax({
              type: 'POST',
              url: '/gotoUnion',
              data: {
                  id: thana,
                  _token: '<?php echo csrf_token(); ?>'
              },
              success: function(data) {
                  console.log(data);
                  $('#pr_post'+id).val(data);
              }
          });
      }




function sameAddress(){




var same_Address = document.getElementById('same_Address');
var districtid1 = document.getElementById('districtid1');
var districtid2 = document.getElementById('districtid2');
var upszilaid1 = document.getElementById('upszilaid1');
var upszilaid2 = document.getElementById('upszilaid2');
var unionid1 = document.getElementById('unionid1');
var unionid2 = document.getElementById('unionid2');
var p_vill = document.getElementById('p_vill');
var submitBtn = document.getElementById('submitBtn');
submitBtn.disabled=true;
if (same_Address.checked == true){

  districtid2.value = districtid1.value;
  changedistrict(2);
  setTimeout(function(){  
    upszilaid2.value = upszilaid1.value;
    
    changethana(2);

setTimeout(function(){

unionid2.value = unionid1.value;

changeunioun(2)
submitBtn.disabled=false;
}, 700);
p_vill.value = pr_vill.value;



}, 1000);


  


} else {
  districtid2.value = '';
  upszilaid2.value = '';
  unionid2.value = '';
  p_vill.value = '';
  submitBtn.disabled=false;

}

}



 @if(session()->has('msg'))

 
Swal.fire({
  icon: 'success',
  title: 'Success!',
  text: 'Registration successfully completed',
 
})
@endif


  </script>
@endsection
