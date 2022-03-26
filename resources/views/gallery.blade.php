@extends('layouts.master')
@section('content')

<style>
.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    color: #d02804 !important;

}

</style>

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
                    <a target="_blank" href="{{ $adllist->url }}">
                        <img width="100%" src="{{ asset(env('FILE_PATH') . 'ad/' . $adllist->name) }}" alt="" />
                    </a>
                    <?php
                  }
                  }
                  ?>
                </div>
                <div class="col-md-9">
                    <h5 class="gallaryTitle text-center">Photo Gallery</h5>







<!-- RH: this is bootstrap 5 tabbed panel -->
<ul class="nav nav-tabs justify-content-center mt-5 mb-5 border-0 customtab" id="myTab" role="tablist">

<?php
    $i = 0;
    ?>
    @foreach ($category as $rowcategory)


<li class="nav-item" role="presentation">
    <a class="nav-link  border-0 @if($i==0) active @endif" id="{{ $rowcategory->name }}-tab" data-bs-toggle="tab" href="#{{ $rowcategory->name }}" role="tab" aria-controls="{{ $rowcategory->name }}" aria-selected="true">{{ $rowcategory->name }}</a>
  </li>



    <?php
    $i++;
    ?>
    @endforeach






  </ul>





  <div class="tab-content" id="myTabContent">


    <?php
    $i = 0;
    ?>
    @foreach ($category as $rowcategory)


    <div class="tab-pane fade show @if($i==0) active @endif" id="{{ $rowcategory->name }}" role="tabpanel" aria-labelledby="{{ $rowcategory->name }}-tab">
        <div class="rows">

                <?php

                $PDO = \DB::connection()->getPdo();
                $QUERY = $PDO->prepare("SELECT * FROM `galleries` WHERE `category`='$rowcategory->name'");
                $QUERY->execute();
                $rowsg=$QUERY->fetchAll(PDO::FETCH_OBJ);

                    ?>

            @foreach ($rowsg as $row)
                <div class="imgcolumn">
                    <img src="{{ $row->image }}" style="width:100%"
                        onclick="openModal();currentSlide({{ $row->id }})" class="hover-shadow cursor">
                </div>
            @endforeach

        </div>
    </div>


    <?php
    $i++;
    ?>
    @endforeach

  </div>



















                    <div id="myModal" class="modals">
                        <span class="close cursor" onclick="closeModal()">&times;</span>
                        <div class="modal-content">

                            @php
                                $i = 1;
                            @endphp
                            @foreach ($rows as $row)
                                <div class="mySlides">
                                    <img src="{{ $row->image }}" style="width:100%">
                                </div>
                                @php
                                    $i++;
                                @endphp
                            @endforeach
                            <a class="prevButton" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="nextButton" onclick="plusSlides(1)">&#10095;</a>
                            <div class="caption-container">
                                <p id="caption"></p>
                            </div>
                        </div>
                    </div>
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
                    <a target="_blank" href="{{ $adbottomlist->url }}">
                        <img width="100%" src="{{ asset(env('FILE_PATH') . 'ad/' . $adbottomlist->name) }}" alt="" />
                    </a>
                </div>
                <?php
                }
                }
                ?>
            </div>
        </section>
    </main>
    <script>
        // gallery js
        function openModal() {
            document.getElementById("myModal").style.display = "block";
        }
        function closeModal() {
            document.getElementById("myModal").style.display = "none";
        }
        var slideIndex = 1;
        showSlides(slideIndex);
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }
        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            // dots[slideIndex-1].className += " active";
            // captionText.innerHTML = dots[slideIndex-1].alt;
        }
    </script>
@endsection
