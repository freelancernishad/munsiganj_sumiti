<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('page_title') </title>

    <!-- Bootstrap -->

    <link href="{{ asset('admin_asset/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.2/css/pro.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('admin_asset/css/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('admin_asset/css/green.css') }}" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="{{ asset('admin_asset/css/prettify.min.css') }}" rel="stylesheet">
    <!-- Select2 -->
    <link href="{{ asset('admin_asset/css/select2.min.css') }}" rel="stylesheet">
    <!-- Switchery -->
    <link href="{{ asset('admin_asset/css/switchery.min.css') }}" rel="stylesheet">
    <!-- starrr -->
    <link href="{{ asset('admin_asset/css/starrr.css') }}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('admin_asset/css/daterangepicker.css') }}" rel="stylesheet">

    <!-- Datatables -->

	<link href="{{ asset('admin_asset/css/dataTables.bootstrap.min.css') }}" rel="stylesheet" >
    <link href="{{ asset('admin_asset/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin_asset/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin_asset/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin_asset/css/scroller.bootstrap.min.css') }}" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('assets/fonts.css') }}">


    <!-- Custom Theme Style -->
    <link href="{{ asset('admin_asset/css/custom.min.css') }}" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
	<style type="text/css">
	.panel-heading.note-toolbar {
    background: #7676764d !important;
}

.note-editor.note-airframe.fullscreen, .note-editor.note-frame.fullscreen {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%!important;
    z-index: 1050;
    background: white !important;
}
main {
    padding-bottom: 50px;
}
	</style>
  {{--  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">  --}}
    <!-- jQuery -->
    <script src="{{ asset('admin_asset/js/jquery.min.js') }}"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" integrity="sha512-2eMmukTZtvwlfQoG8ztapwAH5fXaQBzaMqdljLopRSA0i6YKM8kBAOrSSykxu9NN9HrtD45lIqfONLII2AFL/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{ route('members.index') }}" class="site_title"><i class="fa fa-paw"></i> <span>{{ @config('constats.site_name') }}</span></a>
            </div>
            <form action="" id="demo-form2"></form>
            <div class="clearfix"></div>

            <!-- menu profile quick info
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ asset('admin_asset/images/img.jpg')}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{session('BLOG_USER_NAME')}}</h2>
              </div>
            </div>-->
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">

                <ul class="nav side-menu">
                  <li><a href="{{ route('brandslider.index') }}" ><i class="fas fa-home"></i> Brand Slider </span></a></li>
                  <li><a href="{{ route('mainslider.index') }}" ><i class="fas fa-home"></i> Main Slider </span></a></li>




                  <li><a><i class="fas fa-home"></i> Members <span class="fas fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    <li><a href="{{ url('/admin/members?status=active') }}">Active Members</a></li>
                    <li><a href="{{ url('/admin/members?status=pending') }}">Pending Members</a></li>
                    <li><a href="{{ url('/admin/members?status=unpaid') }}">Unpaid Members</a></li>
                    </ul>
                    </li>







                  <li><a href="{{ route('RegistrationGuideline.index') }}" ><i class="fas fa-home"></i> Registration Guideline </span></a></li>
                  <li><a href="{{ route('committee.index') }}" ><i class="fas fa-home"></i> Committee </span></a></li>
                  <li><a href="{{ url('/admin/committee?d=ex') }}" ><i class="fas fa-home"></i> EX. Committee </span></a></li>
                  <li><a href="{{ route('globalcommittee.index') }}" ><i class="fas fa-home"></i> Global Committee </span></a></li>
                  <li><a href="{{ route('gallery_category.index') }}" ><i class="fas fa-home"></i> Gallery Category </span></a></li>
                  <li><a href="{{ route('gallery.index') }}" ><i class="fas fa-home"></i> Gallery </span></a></li>
                  <li><a href="{{ route('allinfo.index') }}" ><i class="fas fa-home"></i> Info </span></a></li>
                  <li><a href="{{ route('category.index') }}" ><i class="fas fa-home"></i> Category </span></a></li>
                  <li><a href="{{ route('blog.index') }}" ><i class="fas fa-home"></i> Blogs </span></a></li>
                  <li><a href="{{ route('ad.index') }}" ><i class="fas fa-home"></i> Ad </span></a></li>
                  <li><a href="{{ route('video.index') }}" ><i class="fas fa-home"></i> Video Ad </span></a></li>
                  <li><a href="{{ route('notice.index') }}" ><i class="fas fa-home"></i> Notice </span></a></li>
                  <li><a href="{{ route('HistoryCategory.index') }}" ><i class="fas fa-home"></i> History Category </span></a></li>
                  <li><a href="{{ route('HistoryPlace.index') }}" ><i class="fas fa-home"></i> History Place </span></a></li>
                  <li><a href="{{ route('ProminentPersons.index') }}" ><i class="fas fa-home"></i> Prominent Persons </span></a></li>
                  <li><a href="{{ route('Parliamentary_Person.index') }}" ><i class="fas fa-home"></i> Parliamentary Person </span></a></li>
                  <li><a href="{{ route('setting.index') }}" ><i class="fas fa-home"></i> Settings </span></a></li>
		            </ul>
              </div>


            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">


                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      <img src="{{ asset('admin_asset/images/img.jpg') }}" alt=""> {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      {{-- <a class="dropdown-item"  href="javascript:;"> Profile</a> --}}



                      <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                      <i class="fa fa-sign-out pull-right"></i>  {{ __('Logout') }}
                   </a>

                   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                       @csrf
                   </form>




                    </div>
                  </li>




                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">


			@section('container')
			@show()


          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>


    <!-- Bootstrap -->
   <script src="{{ asset('admin_asset/js/bootstrap.bundle.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('admin_asset/js/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('admin_asset/js/nprogress.js') }}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('admin_asset/js/bootstrap-progressbar.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ asset('admin_asset/js/icheck.min.js') }}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset('admin_asset/js/moment.min.js') }}"></script>
    <script src="{{ asset('admin_asset/js/daterangepicker.js') }}"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="{{ asset('admin_asset/js/bootstrap-wysiwyg.min.js') }}"></script>
    <script src="{{ asset('admin_asset/js/jquery.hotkeys.js') }}"></script>
    <script src="{{ asset('admin_asset/js/prettify.js') }}"></script>
    <!-- jQuery Tags Input -->
    <script src="{{ asset('admin_asset/js/jquery.tagsinput.js') }}"></script>
    <!-- Switchery -->
    <script src="{{ asset('admin_asset/js/switchery.min.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ asset('admin_asset/js/select2.full.min.js') }}"></script>
    <!-- Parsley -->
    <script src="{{ asset('admin_asset/js/parsley.min.js') }}"></script>
    <!-- Autosize -->
    <script src="{{ asset('admin_asset/js/autosize.min.js') }}"></script>
    <!-- jQuery autocomplete -->
    <script src="{{ asset('admin_asset/js/jquery.autocomplete.min.js') }}"></script>
    <!-- starrr -->
    <script src="{{ asset('admin_asset/js/starrr.js') }}"></script>


	 <!-- Datatables -->
    <script src="{{ asset('admin_asset/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin_asset/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin_asset/js/dataTables.buttons.min.js') }}"></script>


    <script src="{{ asset('admin_asset/js/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin_asset/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('admin_asset/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin_asset/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admin_asset/js/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('admin_asset/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('admin_asset/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin_asset/js/responsive.bootstrap.js') }}"></script>
    <script src="{{ asset('admin_asset/js/dataTables.scroller.min.js') }}"></script>
    <script src="{{ asset('admin_asset/js/jszip.min.js') }}"></script>
    <script src="{{ asset('admin_asset/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('admin_asset/js/vfs_fonts.js') }}"></script>





    <!-- Custom Theme Scripts -->
    <script src="{{ asset('admin_asset/js/custom.min.js') }}"></script>



<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>


<script type="text/javascript">

$(document).ready(function() {

 // var gArrayFonts = ['Amethysta','Poppins','Poppins-Bold','Poppins-Black','Poppins-Extrabold','Poppins-Extralight','Poppins-Light','Poppins-Medium','Poppins-Semibold','Poppins-Thin'];



  $('#bio').summernote({

    //fontNames: gArrayFonts,
        tabsize: 2,
        height: 200

  });
  $('#textArea2').summernote({


        tabsize: 2,
        height: 200

  });
});
</script>





<div id="uploadimageModal" class="modal" role="dialog">
  <div class="modal-dialog modal-lg">
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

      </div>
     </div>


         </div>
           <span class="btn btn-success crop_image" onclick="imagesize()" data-dismiss="modal" >Crop</span>
      </div>
     </div>
    </div>

    <script src="{{ asset('admin_asset/js/croppie.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>






var imageW,imageH,frameW,frameH;




$('#memberImage , #committeeImage , #galleryImage , #infoImage , #brandsliderImage , #mainsliderImage , #blogImage , #categoryImage').on('change', function () {
  $('#upload-image').croppie('destroy');
  if($(this).is('#memberImage')){
    imageW = 200;
    imageH = 250;
    frameW = 300;
    frameH = 350;
  }

  if($(this).is('#committeeImage')){
    imageW = 200;
    imageH = 250;
    frameW = 300;
    frameH = 350;
  }


  if($(this).is('#galleryImage')){
    imageW = 600;
    imageH = 400;
    frameW = 650;
    frameH = 450;
  }

  if($(this).is('#infoImage')){
    imageW = 600;
    imageH = 200;
    frameW = 650;
    frameH = 450;
  }

  if($(this).is('#brandsliderImage')){
    imageW = 200;
    imageH = 135;
    frameW = 350;
    frameH = 250;
  }
  if($(this).is('#mainsliderImage')){
    imageW = 1000;
    imageH = 500;
    frameW = 1050;
    frameH = 550;
  }
  if($(this).is('#blogImage')){
    imageW = 1000;
    imageH = 500;
    frameW = 1050;
    frameH = 550;
  }
  if($(this).is('#categoryImage')){
    imageW = 200;
    imageH = 150;
    frameW = 250;
    frameH = 200;
  }


  $image_crop = $('#upload-image').croppie({
enableExif: true,
viewport: {
width: imageW,
height: imageH,
type: 'square'
},
boundary: {
width: frameW,
height: frameH
}
});


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


console.log(imageW);


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
function viewdata(url){
   $.ajax({
        url: url,
        type: "get",
        success: function (data) {
            $("#modal_content").html(data);
                  $("#dataModal").modal("show");
        }

    });
}




function deletedata(url,idname,id) {

Swal.fire({
title: 'Are you sure?',
text: "You won't be able to revert this!",
icon: 'warning',
showCancelButton: true,
confirmButtonColor: '#3085d6',
cancelButtonColor: '#d33',
confirmButtonText: 'Yes, delete it!'
}).then((result) => {
if (result.isConfirmed) {


$.ajax({
    url: url,
    method: "POST",
    data:{ "_token": "{{ csrf_token() }}" ,"_method": "DELETE"},
    success: function(data) {

         console.log(data)
         Swal.fire(
    'Deleted!',
    'Your file has been deleted.',
    'success'
    )


    $('#'+idname+id).closest("tr").fadeOut(1000);

    },
});








}
})



}

</script>
  </body>
</html>
