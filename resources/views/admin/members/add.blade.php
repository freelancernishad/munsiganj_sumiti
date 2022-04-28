@extends('admin/layout.layout')
@section('page_title','Manage Members')

@section('container')


            <div class="page-title">
              <div class="title_left">
                <h3>Manage Members</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                  <div class="input-group">

                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">

                  <div class="x_content">
                    <br />


@foreach ($rows as $row)




         <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method='post' action="{{ route('members.store')}}" enctype="multipart/form-data">
						@csrf
						<input type="hidden" name="id" id="id" value="{{ $row->id }}">



            <div class="row">

              {{--  col-md-6 start  --}}
              <div class="col-md-12">
                <div class="form-group">
                  <label>Memeber Image</label>



 <input class="form-control" type="file"  id="memberImage" >
                  <input type="hidden" class="form-control" name="image" id="image" value="{{ $row->image }}">


                </div>

              </div>

<div class="col-md-5 mb-3"></div>
<div class="col-md-2 mb-3"><img width="100%" id="imagepreview" src="{{ $row->image }}" alt=""></div>
<div class="col-md-5 mb-3"></div>











              {{--  col-md-6 start  --}}
              <div class="col-md-6">
                <div class="form-group">
                  <label>Member Id</label>
                  <input type="text" class="form-control" name="memberId" id="memberId" value="{{ $row->memberId }}" >


                </div>

              </div>





              {{--  col-md-6 start  --}}
              <div class="col-md-6">
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name" id="name" value="{{ $row->name }}" >
                </div>

              </div>


              {{--  col-md-6 start  --}}
              <div class="col-md-6 d-none">
                <div class="form-group">
                  <label>Age</label>
                  <input type="text" class="form-control" name="age" id="age" value="{{ $row->age }}" >
                </div>

              </div>



              {{--  col-md-6 start  --}}
              <div class="col-md-6">
                <div class="form-group">
                  <label>Date of birth</label>
                  <input type="date" class="form-control" name="dob" id="dob" value="{{ $row->dob }}" >
                </div>

              </div>



              {{--  col-md-6 start  --}}
              <div class="col-md-6">
                <div class="form-group">
                  <label>Father's Name</label>
                  <input type="text" class="form-control" name="father_name" id="father_name" value="{{ $row->father_name }}" >
                </div>

              </div>


              {{--  col-md-6 start  --}}
              <div class="col-md-6">
                <div class="form-group">
                  <label>Spouse Name</label>
                  <input type="text" class="form-control" name="Spouse_name" id="Spouse_name" value="{{ $row->Spouse_name }}" >
                </div>

              </div>



              {{--  col-md-6 start  --}}
              <div class="col-md-6">
                <div class="form-group">
                  <label>Educational Qualifications</label>
                  <input type="text" class="form-control" name="education" id="education" value="{{ $row->education }}" >
                </div>

              </div>



              {{--  col-md-6 start  --}}
              <div class="col-md-6">
                <div class="form-group">
                  <label>Occupation</label>
                  <input type="text" class="form-control" name="occupation" id="occupation" value="{{ $row->occupation }}" >
                </div>

              </div>



              {{--  col-md-6 start  --}}
              <div class="col-md-6">
                <div class="form-group">
                  <label>Contact Number 1</label>
                  <input type="number" class="form-control" name="phoneNumber" id="phoneNumber" value="{{ $row->phoneNumber }}" >
                </div>

              </div>


              {{--  col-md-6 start  --}}
              <div class="col-md-6">
                <div class="form-group">
                  <label>Contact Number 2</label>
                  <input type="number" class="form-control" name="phoneNumber2" id="phoneNumber2" value="{{ $row->phoneNumber2 }}" >
                </div>

              </div>


                    {{--  col-md-6 start  --}}
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" id="email" value="{{ $row->email }}" >
                      </div>

                    </div>



                    {{--  col-md-6 start  --}}
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Website</label>
                        <input type="text" class="form-control" name="website" id="website" value="{{ $row->website }}">
                      </div>

                    </div>



              {{--  col-md-6 start  --}}
              <div class="col-md-6">
                <div class="form-group">
                  <label>Professional address</label>
                  <input type="text" class="form-control" name="pesahgot_address" id="pesahgot_address" value="{{ $row->pesahgot_address }}" >
                </div>

              </div>

  {{--  col-md-6 start  --}}
              <div class="col-md-6">
                <div class="form-group">
                  <label>Blood group</label>
                    <select class="form-control" name="blood_group" id="blood_group">
                    <option value="">Select Blood Group</option>
                    <option>A+</option>
                    <option>A-</option>
                    <option>B+</option>
                    <option>B-</option>
                    <option>AB+</option>
                    <option>AB-</option>
                    <option>O+</option>
                    <option>O-</option>
                    <option>NA</option>

                    </select>


<script>

document.getElementById('blood_group').value="{{ $row->blood_group }}";

</script>
                </div>

              </div>

              {{--  col-md-6 start  --}}
              <div class="col-md-6">
                <div class="form-group">
                  <label>National ID NO.</label>
                  <input type="number" class="form-control" name="nid" id="nid" value="{{ $row->nid }}" >
                </div>

              </div>


              {{--  col-md-6 start  --}}
              <div class="col-md-6 d-none">
                <div class="form-group">
                  <label>Related social working details (optional)</label>
                  <input type="text" class="form-control" name="samagik_unoyon" id="samagik_unoyon" value="{{ $row->samagik_unoyon }}">
                </div>

              </div>




              {{--  col-md-6 start  --}}
              <div class="col-md-6 d-none">
                <div class="form-group">
                  <label>বিশেষ সখ (যদি থাকে)</label>
                  <input type="text" class="form-control" name="hobby" id="hobby" value="{{ $row->hobby }}">
                </div>

              </div>


              {{--  col-md-6 start  --}}
              <div class="col-md-6">
                <div class="form-group">
                  <label>Membership Fee</label>
                  <input type="text" class="form-control" name="fee" id="fee" value="{{ $row->fee }}" >
                </div>

              </div>



              <div class="col-md-12">
                <h3>Permanent address</h3>
            </div>
            {{-- col-md-6 start --}}
            <div class="col-md-6">
                <div class="form-group">
                    <label>District</label>
                    <select id="districtid1" onchange="changedistrict(1)" class="form-control">
                        <option value="">District</option>
                        @foreach ($districts as $dList)
                            <option value="{{ $dList->id }}">{{ $dList->name }}</option>
                        @endforeach
                    </select>
                    <input type="hidden" class="form-control" name="pr_dist" id="pr_dist1"
                        value="{{ $row->pr_dist }}">
                </div>
            </div>
            {{-- col-md-6 start --}}
            <div class="col-md-6">
                <div class="form-group">
                    <label>Thana/Upazila</label>
                    <select id="upszilaid1" onchange="changethana(1)" class="form-control">
                        <option value="">Thana/Upazila</option>
                    </select>
                    <input type="hidden" class="form-control" name="pr_thana" id="pr_thana1"
                        value="{{ $row->pr_thana }}">
                </div>
            </div>
            {{-- col-md-6 start --}}
            <div class="col-md-6">
                <div class="form-group">
                    <label>Union</label>
                    <select id="unionid1" onchange="changeunioun(1)" class="form-control">
                        <option value="">Union</option>
                    </select>
                    <input type="hidden" class="form-control" name="pr_post" id="pr_post1"
                        value="{{ $row->pr_post }}">
                </div>
            </div>
            {{-- col-md-6 start --}}
            <div class="col-md-6">
                <div class="form-group">
                    <label>Village</label>
                    <input type="text" class="form-control" name="pr_vill" id="pr_vill"
                        value="{{ $row->pr_vill }}" >
                </div>
            </div>
            <div class="col-md-12">
                <h3>Present address  </h3>
                <h5 style="display:none" ><input style="width: 32px;
                  height: 19px;" onclick="sameAddress()" type="checkbox" id="same_Address"> <label for="same_Address">একই ঠিকানা হলে টিক দিন</label></h5>
            </div>



            {{-- col-md-6 start --}}
            <div class="col-md-12">
                <div class="form-group">
 <textarea name="Present_address" id="Present_address" class="form-control"  cols="30" rows="4" style="resize:none" >{{ $row->Present_address }}</textarea>
                </div>
            </div>


            <div class="col-md-12">
                <h3>Short Bio  </h3>

            </div>


            {{-- col-md-6 start --}}
            <div class="col-md-12">
                <div class="form-group">
                    <textarea name="bio" id="bio" class="form-control"
                        cols="30" rows="4" style="resize:none"
                        >{{ $row->bio }}</textarea>
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




            <div class="col-md-12">
                <h3>Reference </h3>
                <h5 style="display:none" ><input style="width: 32px;
                  height: 19px;" onclick="sameAddress()" type="checkbox" id="same_Address"> <label for="same_Address">একই ঠিকানা হলে টিক দিন</label></h5>
            </div>



            {{-- col-md-6 start --}}
            <div class="col-md-12">
                <div class="form-group">


                    <select name="Reference" id="Reference" class="form-control">

                        <option value=""></option>





                    </select>





                </div>
            </div>





            </div>











                      <div class="ln_solid"></div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">

                          <button type="submit" id="submitBtn" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                    @endforeach



                  </div>
                </div>
              </div>
            </div>






            <script>
@if($row->id=='')
$('#districtid1').val(48);
changedistrict(1);
@endif
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
                              option += '<option value="' + obj[i].id + '">' + obj[i].name + '</option>';
                          }
                          thana.html('<option value="">Thana/Upazila</option>' + option)
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
                              option += '<option value="' + obj[i].id + '">' + obj[i].name + '</option>';
                          }
                          union.html('<option value="">Union</option>' + option)
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


      $(document).ready(function() {
    $('#Reference').select2();
});

          </script>



@endsection
