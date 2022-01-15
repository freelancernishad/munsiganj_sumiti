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
                            <form action="" class="d-flex">
                                <input type="text" name="idOrName" id="idOrName" class="form-control">
                                <select name="upszila" id="upszila" class="form-control ml-3">
                                    <option value="">Select</option>
                                    <option>upazila</option>
                                </select>
                                <button type="submit" class="memberSearch btn btn-outline-info ml-3">Search</button>
                            </form>
                        </div>
                        <div class="membertable">
                            <table class="table table-bordered" id="membertable">
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
@endsection
