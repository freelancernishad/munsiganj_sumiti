@extends('layouts.master')
@section('content')
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
<div class="col-md-5">
                                <select id="districtid" onchange="changedistrict()" class="form-control">
                                    <option value="">জেলা</option>

                                    @foreach ($districts as $dList)
                                        
                                   

                                    <option value="{{ $dList->id }}">{{ $dList->bn_name }}</option>

                                    @endforeach

                                </select>
                                <input type="hidden" name="district" id='district'>
                            </div>
                            <div class="col-md-5">
                                <select id="upszilaid" onchange="changethana()" class="form-control">
                                    <option value="">উপজেলা</option>
                        
                                </select>

                                <input type="hidden" name="upszila" id='upszila'>
                            </div>

                                <button type="submit" class="memberSearch btn btn-outline-info col-md-2">Search</button>
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
                                        <td>{{ $i++ }}</td>
                                        <td>
                                            <img style="max-width:100px" src="{{ $row->image }}" alt="">
                                            <h6 class="membername"> {{ $row->name }}</h6>
                                            <p class="memberPoaition">{{ $row->education }}</p>
                                        </td>
                                        <td>
                                            <ul class="list-unstyled memberAddress">
                                                <li class="">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                    &nbsp; {{ $row->p_vill }} ,{{ $row->p_post }} ,{{ $row->p_thana }} ,{{ $row->p_dist }}
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
          
                  $.ajax({
                      type: 'POST',
                      url: '/getunioun',
                      data: {
                          id: thana,
                          _token: '<?php echo csrf_token(); ?>'
                      },
                      success: function(data) {

                        var data = data.split(',,,');
                  
                        var thana = $('#upszila').val(data[0]);
                     
                     
                    
                      }
                  });
              } 

              $(document).ready(function() {
    $('#districtid').select2();
    // $('#upszilaid').select2();
});

 $('#districtid').val('{{ $district }}');
 $('#district').val('{{ $district }}');

 setTimeout(function(){
    changedistrict();
}, 500);


 setTimeout(function(){
  
    $('#upszilaid').val('{{ $upszila }}');
    $('#upszila').val('{{ $upszila }}');
    changethana();
}, 1000);//wait 2 seconds





</script>

@endsection
