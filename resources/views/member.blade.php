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
                <div class="col-md-9">
                    <div class="memberlist">
                        <div class="memberForm">
                            <h6>Member</h6>
                            <form action="{{ route('memberList_submit') }}" method="post" class="row">
                               @csrf



                    {{-- <div class="col-md-5">
                                <select id="districtid" onchange="changedistrict()" class="form-control">
                                    <option value="">জেলা</option>



                                </select>
                                <input type="hidden" name="district" id='district'>
                            </div> --}}



                            <div class="col-md-3">

                                <input type="text" name="memberId" id='memberId' placeholder="Enter Member ID" class="form-control">
                            </div>
                          <div class="col-md-1">

                              OR
                            </div>


                            <div class="col-md-3">

                                <input type="text" name="memberName" id='memberName' placeholder="Enter Member Name" class="form-control">
                            </div>


                            <div class="col-md-3">
                                <select id="upszilaid" onchange="changethana()" class="form-control" required>
                                    <option value="">উপজেলা</option>
                                    @foreach ($Thana as $dList)



                                    <option value="{{ $dList->id }}">{{ $dList->bn_name }}</option>

                                    @endforeach
                                </select>

                                <input type="hidden" name="upszila" id='upszila'>
                            </div>

                                <button type="submit" id="memberBtin" class="memberSearch btn btn-outline-info col-md-2">Search</button>
                            </form>
                        </div>
                        <div class="membertable">
                            <table class="table table-bordered" id="myTable">
                                <thead class="memberTableHead">
                                    <tr>
                                        <th>MID</th>
                                        <th>NAME OF THE FIRM</th>
                                        <th>CONTACT INFORMATION</th>
                                    </tr>
                                </thead>
                                <tbody class="memberTablebody">

                                    @php
                                    $i = 1;
                                    @endphp
                                @foreach ($rows as $row)

                                    <tr>
                                        <td>{{ $row->memberId }}</td>
                                        <td>
                                            <img style="max-width:100px" src="{{ $row->image }}" alt="">
                                            <h6 class="membername"> <a href="{{ url('member?memberid='.$row->memberId) }}">{{ $row->name }}</a></h6>
                                            <p class="memberPoaition">{{ $row->education }}</p>
                                        </td>
                                        <td>


                                            <table witdh="100%" border="0">
<tr>
    <td>

        <ul class="list-unstyled memberAddress">
            <li class="">
                <i class="fas fa-map-marker-alt"></i>
                &nbsp; {{ $row->Present_address }}
            </li>
            <li class="">
                <i class="fas fa-envelope"></i>
                &nbsp; {{ $row->email }}
            </li>
            <li class="">
                <i class="fas fa-phone-alt"></i>
                &nbsp; {{ $row->phoneNumber }}
            </li>
            <li class="">
                <i class="fas fa-globe-americas"></i>
                &nbsp; {{ $row->website }}
            </li>
        </ul>

    </td>
    <td>
        {!! QrCode::size(100)->generate(url('member?memberid='.$row->memberId)); !!}

    </td>
</tr>

                                            </table>






                                        </td>
                                    </tr>
                                    @endforeach



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );




 //getthana
              function changedistrict() {
                  var district = $('#districtid').val();
                  var thana = $('#upszilaid');
                  $.ajax({
                      type: 'POST',
                      url: '/getthana',
                      data: {
                          id: district,
                          _token: '<?php echo csrf_token(); ?>'
                      },
                      success: function(data) {


                        var data = data.split(',,,');
                        var district = $('#district').val(data[0]);
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




              function changethana() {
                  var thana = $('#upszilaid').val();

                var memberBtin = document.getElementById('memberBtin');
                memberBtin.disabled=true;
                  $.ajax({
                      type: 'POST',
                      url: '/getunioun',
                      data: {
                          id: thana,
                          _token: '<?php echo csrf_token(); ?>'
                      },
                      success: function(data) {
                          var data = data.split(',,,');

                          console.log(data)
                        var thana = $('#upszila').val(data[0]);
                        memberBtin.disabled=false;


                      }
                  });
              }

              $(document).ready(function() {

     $('#upszilaid').select2();
});

//  $('#districtid').val('{{ $district }}');
//  $('#district').val('{{ $district }}');

//  setTimeout(function(){
//     changedistrict();
// }, 500);


//  setTimeout(function(){

//     $('#upszilaid').val('{{ $upszila }}');
//     $('#upszila').val('{{ $upszila }}');
//     changethana();
// }, 1000);//wait 2 seconds
$('#memberId').val('{{ $memberId }}');
$('#memberName').val('{{ $memberName }}');
$('#upszilaid').val('{{ $upszila }}');
$('#upszila').val('{{ $upszila }}');
changethana();



</script>

@endsection
