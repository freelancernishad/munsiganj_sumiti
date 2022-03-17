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
                    if($adl!=''){
                    $adl = json_decode($adl);

                    foreach($adl as $adllist){

                    ?>
                  <a target="_blank" href="{{ $adllist->url  }}">
                    <img width="100%" src="{{ asset(env('FILE_PATH').'ad/'.$adllist->name) }}" alt="" />
                </a>
                    <?php
                    }
                    }



                    ?>
                </div>
                <div class="col-md-9">
                    <div class="memberlist">


                        <div class="memberForm">
                            <h6>Blode Group</h6>
                            <form action="" method="get" class="row">


                            <div class="col-md-3">

                                <select class="form-control" name="Blode" id="Blode" required>
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


                            </div>


                                <button type="submit" id="memberBtin" class="memberSearch btn btn-outline-info col-md-2">Search</button>
                            </form>
                        </div>
                        <div class="membertable">
                            <table class="table table-bordered" id="myTable">
                                <thead class="memberTableHead" style="    background: #bcdbff;
                                color: #010101;">
                                    <tr>
                                        <th>MID</th>

                                        <th>INFORMATION</th>
                                    </tr>
                                </thead>
                                <tbody class="memberTablebody">

                                    @php
                                    $i = 1;
                                    @endphp
                                @foreach ($rows as $row)

                                    <tr>
                                        <td>{{ $row->memberId }}</td>

                                        <td style="    padding: 0 10px;">


        <ul class="list-unstyled memberAddress">
            <li class="">
             <h6 class="membername"> <a href="{{ url('member?memberid='.$row->memberId) }}">{{ $row->name }}</a></h6>
            </li>

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
                <i class="fas fa-tint fa-fw"></i>
                &nbsp; {{ $row->blood_group }}
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




</script>

@endsection
