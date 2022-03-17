
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
                        <div class="register-guidline">
                              <h3 class="text-danger">Registration Guideline</h3>
                              <p class="muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. At eos facilis placeat, nihil, sapiente, dolores consequatur mollitia similique officia minima magnam quos soluta dolorum sed?</p>
                        </div>
                        <div class="register-include">
                              <h3 class="text-white back pl-2 rounded">Registration Free Includes</h3>
                              <li>#Lorem ipsum dolor sit amet.</li>
                              <li>#Lorem ipsum dolor sit amet.</li>
                              <li>#Lorem ipsum dolor sit amet.</li>
                              <li>#Lorem ipsum dolor sit amet.</li>
                        </div>
                        <div class="register-accompany mt-5">
                              <h3 class="text-white back pl-2 rounded">Accompanying Person Free Includes</h3>
                              <li>#Lorem ipsum dolor sit amet.</li>
                              <li>#Lorem ipsum dolor sit amet.</li>
                              <li>#Lorem ipsum dolor sit amet.</li>
                              <li>#Lorem ipsum dolor sit amet.</li>
                        </div>
                        <div class="register-on-site mt-5">
                              <h3 class="text-white back pl-2 rounded">On-Site Registration</h3>
                              <p class="muted pl-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam, tenetur.</p>
                        </div>
                        <div class="register-on-site mt-5">
                              <h3 class="text-white back pl-2 rounded">Group Registration</h3>
                              <p class="muted pl-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe eligendi aut,</p>
                               <p class="muted pl-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod labore ipsam praesentium culpa ad? Laborum fugiat voluptate recusandae nostrum. Ex explicabo quos assumenda tempora illo?</p>
                               <p class="muted pl-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe eligendi aut,</p>
                        </div>
                        <div class="register-socials mt-5">
                              <h3 class="text-white pl-2 rounded back">Socials</h3>
                              <p class="muted pl-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt molestias mollitia earum at quaerat, vero, ipsa neque culpa illo ex pariatur, tenetur eveniet sed reiciendis!</p>

                              <h3 class="text-danger pl-2 mt-5">Confirmation</h3>
                              <p class="muted pl-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt molestias mollitia earum at quaerat, vero, ipsa neque culpa illo ex pariatur, tenetur eveniet sed reiciendis amet consectetur adipisicing elit ipsa neque culpa!</p>

                              <h3 class="text-danger pl-2 mt-5">Payment</h3>
                              <p class="muted pl-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum, quo?</p>

                              <h3 class="text-danger pl-2 mt-5">By Bank Transfer</h3>
                              <p class="muted pl-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, voluptatibus fuga vero molestiae corrupti blanditiis adipisicing elit. Alias, voluptatibus fuga vero.</p>
                              <p class="muted pl-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum, animi eveniet. Eos ipsam temporibus cupiditate deserunt commodi suscipit obcaecati. Ullam laborum iure nostrum optio reprehenderit!</p>

                              <p class="muted pl-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum, animi eveniet. Eos ipsam temporibus cupiditate deserunt commodi suscipit obcaecati!</p>


                        </div>

                        <div class="register-on-site mt-5">
                              <h3 class="text-white bg-danger pl-2 rounded">Online Payment By Credit/Debit Card</h3>
                              <p class="muted pl-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam mollitia atque, praesentium, cupiditate ipsam beatae, odit blanditiis aspernatur consequatur illo quos? Voluptatibus voluptatem eos placeat amet eveniet cum, quaerat reiciendis voluptatum corrupti quo repellendus illum laboriosam cupiditate assumenda expedita! Alias accusantium ad nam quos laboriosam enim similique in?</p>
                        </div>

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
