<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="f_logo text-white">
                    <img width="288px" src="{{ asset(env('FILE_PATH').'logo/'.$settings[0]->logo) }}" style="    padding: 10px 0;" alt="LOGO">
                    <div class="f_address">
                        <ul class="list-unstyled">
                            <li class="text-white">
                                <i style="color: #c12729" class="fas fa-map-marker-alt"></i>
                                &nbsp; {{ $settings[0]->address }}
                            </li>
                            <li class="text-white">
                                <i style="color: #c12729" class="fas fa-envelope"></i>
                                &nbsp; {{ $settings[0]->email }}
                            </li>
                            <li class="text-white">
                                <i style="color: #c12729" class="fas fa-phone-alt"></i>
                                &nbsp; {{ $settings[0]->phone }}
                            </li>
                        </ul>
                        <p class="text-white">
                            Copyrights &copy; 2022 , All rights reserved
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <h4 class="f_title">Quick Links</h4>
                <ul class="footerMenu list-unstyled">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <h4 class="f_title">Useful Links</h4>
                <ul class="footerMenu list-unstyled">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                    <li><a href="#">Disclaimer</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4 class="f_title">Newsletter</h4>
                <form action="" class="d-flex w-100">
                    <input type="text" namr="newsletter" id="newsletter" />
                    <button type="submit" class="newsletterBtn">Send</button>
                </form>
                <div class="f_social">
                    <ul class="list-unstyled d-flex">
                        <li>
                            <a href="{{ $settings[0]->facebook }}"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="{{ $settings[0]->twitter }}"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="{{ $settings[0]->instagram }}"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="{{ $settings[0]->youtube }}"><i class="fab fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
    crossorigin="anonymous"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.4.1/swiper-bundle.min.js"
    integrity="sha512-pY1t/ADgTwbfGbw0+mRGd33EroA5YgRUWhQNFpPIAdBzyoSb38FsFrf4wBTcS3GFPdTfgtpRrbGCkdl2C2OXYA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>





<script>

var url = window.location.href;
// console.log(url);

if(url==window.location.origin+'/'){
url = url.split('/');
url = url[0]+'//'+url[2];
}

// console.log(window.location.origin);

if (url == url ) {
  $('[href="'+url+'"]').addClass('active');
}


// console.log(url);

</script>





<div id="uploadimageModal" class="modal" role="dialog">
<div class="modal-dialog">
 <div class="modal-content">

       <div class="modal-body">
         <div class="row">
      <div class="col-md-8 text-center">
        <div id="upload-image"></div>
      </div>
      <div class="col-md-4" style="padding-top:30px;">
       <br />
       <br />
       <br/>
       <span class="btn btn-success crop_image" onclick="imagesize()" data-dismiss="modal" >Crop</span>
    </div>
   </div>
       </div>

    </div>
   </div>
  </div>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.js" integrity="sha512-vUJTqeDCu0MKkOhuI83/MEX5HSNPW+Lw46BA775bAWIp1Zwgz3qggia/t2EnSGB9GoS2Ln6npDmbJTdNhHy1Yw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   <script src="{{ asset('admin_asset/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('admin_asset/js/dataTables.bootstrap.min.js') }}"></script>
  <script src="{{ asset('admin_asset/js/dataTables.buttons.min.js') }}"></script>

<script>

$image_crop = $('#upload-image').croppie({
enableExif: true,
viewport: {
width: 200,
height: 250,
type: 'square'
},
boundary: {
width: 300,
height: 350
}
});



$('#images').on('change', function () {
var reader = new FileReader();
reader.onload = function (e) {
$image_crop.croppie('bind', {
url: e.target.result
}).then(function(){
console.log('jQuery bind complete');
});
}
reader.readAsDataURL(this.files[0]);
$('#uploadimageModal').modal('show');
});

function imagesize(){
$image_crop.croppie('result', {
type: 'canvas',
size: 'viewport'
}).then(function (response) {
console.log(response);

$("#image").val(response);
$("#imagepreview").attr("src",response);

$('#uploadimageModal').modal('hide');
});
}


    </script>

    <!-- fontawesome -->
    <script src="{{ asset('newassets/js/all.min.js') }}"
        integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{ asset('newassets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Mix it up -->
    <script src="{{ asset('newassets/js/mixitup.min.js') }}"></script>
    <!-- main css -->
    <script src="{{ asset('newassets/js/script.js') }}"></script>

    <script src="{{ asset('newassets/js/custom.js') }}"></script>

<!-- Modal -->
<div class="modal fade" id="dataModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="modal_content">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>


<script>
function viewdatas(url){


   $.ajax({
        url: url,
        type: "get",
        success: function (data) {
            $("#modal_content").html(data);
            $("#dataModal").modal("show");
        }

    });
}

</script>
<livewire:scripts />













</body>

</html>
