
@extends('layouts.master')

@section('content')

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


                <div class="col-md-7">
                      <div class="register-main  p-3">



                      @foreach ($registration_guidelines as $item)
                          {!! $item->info !!}
                      @endforeach

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
                </div>





                <div class="col-md-2">
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


 </main>

 @endsection
