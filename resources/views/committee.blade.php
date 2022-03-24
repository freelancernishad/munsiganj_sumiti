@extends('layouts.master')
@section('content')
    <main>
        <section class="hero_area">
            <div class="row p-0">
                <div class="col-md-3" style="background: #e6f5fa">
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


                    <?php


                    $adtop = $adtop[0]->image;
                    if($adtop!=''){
                    $adtop = json_decode($adtop);

                    foreach($adtop as $adtoplist){

                    ?>
                              <a target="_blank" href="{{ $adtoplist->url  }}">
                    <img width="100%" src="{{ asset(env('FILE_PATH').'ad/'.$adtoplist->name) }}" alt="" />
                </a>
                    <?php
                    }
                    }



                    ?>
<section class="committeSection py-3 pl-3">
<div class="row">


<div class="col-md-9 ">



    <div class="ourMission">
        <h6>Committee</h6>
    </div>
    <div class="committee">
<p>{{ settings()[0]->committee }}</p>
    </div>









<div class="committeeTitle mt-5 mb-5">


    @if($type!='')

    <form action="" method="get">
<div class="form-group">
    <label for="">Previous Session</label>
        <select name="session" id="session" class="form-control">

            <option value="">Select</option>
            @foreach ($years as $yearsrow)
            <option>{{ $yearsrow->session_start }}</option>
            @endforeach

        </select>
    </div>
<script>
    document.getElementById('session').value="{{ $session }}";
</script>

        <button type="submit" class="btn btn-danger mt-3">Search</button>
    </form>
@endif
</div>
<div class="accordion" id="accordionExample">






    @php
    $i = 1;
    @endphp
@foreach ($rows as $row)
<?php
    if($i==1){
        $expanded = 'true';
        $expanded_show = 'show';
    }else{
        $expanded = 'false';
        $expanded_show = '';
    }
?>
    <div class="card" id="card">
      <div class="card-header card_head" id="heading{{ $i }}">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left d-flex justify-content-between collapseBtn collapsed" type="button" data-toggle="collapse" data-target="#collapse{{ $i }}" aria-expanded="false" aria-controls="collapse{{ $i }}">
            <span>{{ $i }} . {{ $row->name }}</span>
            <span><i class="fas fa-chevron-down classcollapse"></i></span>
          </button>
        </h2>
      </div>
      <div id="collapse{{ $i }}" class="collapse {{ $expanded_show }}" aria-labelledby="heading1" data-parent="#accordionExample">
        <div class="card-body" id="card-body">
            <div class="d-flex">
                <div class="committeeImg">
                    <img width="100%" src="{{ $row->image }}" alt="">
                </div>
                <div class="committeeBio">
                    <p>{!! $row->bio !!}</p>
                </div>
            </div>
        </div>
      </div>
    </div>
    @php
$i++;
@endphp
    @endforeach

  </div>
</div>
<div class="col-md-3">
    <?php


    $adr = $adr[0]->image;
    if($adr!=''){
    $adr = json_decode($adr);

    foreach($adr as $adrlist){

    ?>
             <a target="_blank" href="{{ $adrlist->url  }}">
    <img width="100%" src="{{ asset(env('FILE_PATH').'ad/'.$adrlist->name) }}" alt="" />
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
                    <a target="_blank" href="{{ $adbottomlist->url  }}">
                    <img width="100%" src="{{ asset(env('FILE_PATH').'ad/'.$adbottomlist->name) }}" alt="" />
                </a>
                </div>
                <?php
                }
                }



                ?>
            </div>
        </section>

    </main>
    @endsection
