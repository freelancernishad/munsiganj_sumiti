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
                    <a target="_blank" href="{{ $adllist->url }}">
                        <img width="100%" src="{{ asset(env('FILE_PATH') . 'ad/' . $adllist->name) }}" alt="" />
                    </a>
                    <?php
                  }
                  }
                  ?>
                </div>
                <div class="col-md-9">
                    <h5 class="gallaryTitle text-center">Gallery</h5>
                    <div class="rows">
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($rows as $row)
                            <div class="imgcolumn">
                                <img src="{{ $row->image }}" style="width:100%"
                                    onclick="openModal();currentSlide({{ $i }})" class="hover-shadow cursor">
                            </div>
                            @php
                                $i++;
                            @endphp
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
