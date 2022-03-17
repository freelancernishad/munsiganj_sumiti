@extends('admin/layout.layout')
@section('page_title', 'Manage Ad')
@section('container')
    <style>
        .addButton {
            width: 100%;
            text-align: right;
        }
    </style>
    <div class="page-title">
        <div class="title_left">
            <h3> <small> Manage Ad </small></h3>
        </div>
        <div class="title_right">
            <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                <div class="input-group">
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_content">
                    <br />
                    @foreach ($rows as $row)
                        <form class="some_form" id="demoform2" data-parsley-validate class="form-horizontal form-label-left" method='post'
                            action="{{ route('ad.store') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" id="id" value="{{ $row->id }}">
                            <div class="row">
                                {{-- col-md-6 start --}}
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Page</label>
                                        <select name="page" id="page" class="form-control" onchange="getpage()" required>
                                            <option value="">Select</option>
                                            <option>All</option>
                                            <option>Home</option>
                                            <option>About-us</option>
                                            <option>Central Committee</option>
                                            <option>Gallery</option>
                                            <option>Member</option>
                                            <option>Registration Guideline</option>
                                            <option>Registration</option>
                                            <option>Blog</option>
                                            <option>Contact</option>
                                        </select>
                                    </div>
                                    <script>
                                        document.getElementById('page').value = "{{ $row->page }}";
                                    </script>
                                </div>
                                {{-- col-md-6 start --}}
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Position</label>
                                        <select name="position" id="position" class="form-control" onchange="getpage()" required>
                                            <option value="">Select</option>
                                            <option>Header</option>
                                            <option>top</option>
                                            <option>Bottom</option>
                                            <option>Left</option>
                                            <option>Right</option>
                                        </select>
                                    </div>
                                    <script>
                                        document.getElementById('position').value = "{{ $row->position }}";
                                    </script>
                                </div>
                                <div class="col-md-12">
                                    <div class="addButton">
                                        <span class="btn btn-info" id="add">Add More</span>
                                    </div>





                                    <div class="row">

                                        <div class="col-md-12">

                                            <div class="form-group">
                                                <input type="checkbox" id="removeAd" name="removeAd" @if($row->image=='') checked @endif value="1" onclick="removead()"> <label for="removeAd">Remove all Ads</label>
                                            </div>

                                        </div>



                                        {{-- col-md-6 start --}}
                                        <div class="col-md-12" id="adAdded">
                                            <div class="form-group"  id="addmore">
                                                <label>ছবি  <span class="imageSize" id="imageSize"></span>  </label>






                                              <input type="hidden" name="items[]" value="1">

                                              <div class="inputgroup  d-flex align-items-end mt-3"  id="row1" style="width: 100% !important;">

                                                  <input class="form-control" name="image[]" type="file" id="ad1" onchange="changeImage(1)"  >
                                                  <input class="form-control" name="url[]" type="text" placeholder="Input Advertisement Url" id="url1"  >
                                                  <span class="btn btn-danger btn_remove mb-0" id="1">Remove</span>
                                              </div>

                                            <span style="color:red" id="error_message1"></span>



                                            </div>
                                        </div>

                                    </div>

                                    <script>
                                        function removead(){
                                        var removeAd = document.getElementById('removeAd');
                                        var adAdded = document.getElementById('adAdded');
                                        var add = document.getElementById('add');
                                          if(removeAd.checked==true){
                                              adAdded.style.display='none';
                                              add.style.display='none';
                                          }else{
                                              adAdded.style.display='block';
                                              add.style.display='';
                                          }
                                        }


                                        @if($row->image=='') removead() @endif

                                      </script>





                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <button type="submit" id="submitBtn" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>









<script>

var imagewidth , imageheight;



</script>




    <script>
        $(document).ready(function() {
            <?php
		if($rows[0]->id!=''){
			?>
            var i = 1;
            <?php
		}else{
			?>
            var i = 1;
            <?php
		}
	?>
            $("#add").click(function() {
                i++;
                $("#addmore").append('<input type="hidden" name="items[]" value="'+i+'"><div class="inputgroup  d-flex align-items-end mt-3"  id="row'+i+'" style="width: 100% !important;"><input class="form-control" name="image[]" type="file" id="ad'+i+'" onchange="changeImage('+i+')" required><input class="form-control" name="url[]" type="text" placeholder="Input Advertisement Url" id="url'+i+'"  ><span class="btn btn-danger btn_remove mb-0" id="'+i+'">Remove</span></div><span style="color:red" id="error_message'+i+'"></span>');
            });
            $(document).on('click', '.btn_remove', function() {
                var button_id = $(this).attr("id");
                $("#row" + button_id + "").remove();
            });
        });










        function getpage() {
            let page = document.getElementById('page').value;
            let position = document.getElementById('position').value;
            // All
            // Home
            // About-us
            // Central Committee
            // Gallery
            // Member
            // Registration Guideline
            // Registration
            // Blog
            // Contact
            // Header
            // top
            // Bottom
            // Left
            // Right


            if (page == 'All' && position == 'Header') {



                    imagewidth = 1350;
                    imageheight = 135;


            } else if (page == 'Home' && position == 'top') {


                imagewidth = 1000;
                imageheight = 100;


            } else if (page == 'Home' && position == 'Bottom') {

                imagewidth = 650;
                imageheight = 130;


            } else if (page == 'About-us' && position == 'top') {

                imagewidth = 1000;
                imageheight = 100;


            } else if (page == 'About-us' && position == 'Left') {

                imagewidth = 300;
                imageheight = 580;


            } else if (page == 'About-us' && position == 'Right') {


                imagewidth = 215;
                imageheight = 480;


            } else if (page == 'About-us' && position == 'Bottom') {

                imagewidth = 650;
                imageheight = 130


            } else if (page == 'Central Committee' && position == 'top') {

                imagewidth = 1000;
                imageheight = 100;


            } else if (page == 'Central Committee' && position == 'Left') {

                imagewidth = 300;
                imageheight = 580;


            } else if (page == 'Central Committee' && position == 'Right') {

                imagewidth = 215;
                imageheight = 480;


            } else if (page == 'Central Committee' && position == 'Bottom') {

                imagewidth = 650;
                imageheight = 130


            } else if (page == 'Gallery' && position == 'Left') {

                imagewidth = 300;
                imageheight = 580;


            } else if (page == 'Gallery' && position == 'Bottom') {

                imagewidth = 650;
                imageheight = 130


            } else if (page == 'Member' && position == 'Left') {

                imagewidth = 300;
                imageheight = 580;


            } else if (page == 'Registration Guideline' && position == 'Left') {

                imagewidth = 300;
                imageheight = 580;


            } else if (page == 'Registration Guideline' && position == 'Right') {

                imagewidth = 215;
                imageheight = 480;


            } else if (page == 'Registration Guideline' && position == 'Bottom') {

                imagewidth = 980;
                imageheight = 190;


            } else if (page == 'Registration' && position == 'Left') {

                imagewidth = 300;
                imageheight = 580;


            } else if (page == 'Contact' && position == 'top') {

                imagewidth = 1000;
                imageheight = 100;


            } else if (page == 'Contact' && position == 'Left') {

                imagewidth = 300;
                imageheight = 580;

            } else if (page == 'Contact' && position == 'Right') {

                imagewidth = 215;
                imageheight = 480;


            } else if (page == 'Contact' && position == 'Bottom') {

                imagewidth = 650;
                imageheight = 130


            }else{
                imagewidth = 0;
                imageheight = 0
            }
            document.querySelector(".imageSize").innerHTML="("+imagewidth+" * "+imageheight+")";

        }
        getpage();

        // document.getElementById('submitBtn').disabled=true;


        var _URL = window.URL || window.webkitURL;

function changeImage(id) {

console.log(imageheight);

    var fileUpload = document.getElementById("ad"+id);

    //Check whether the file is valid Image.
    var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(.jpg|.png|.gif)$");
    if (regex.test(fileUpload.value.toLowerCase())) {

        //Check whether HTML5 is supported.
        if (typeof (fileUpload.files) != "undefined") {
            //Initiate the FileReader object.
            var reader = new FileReader();
            //Read the contents of Image File.
            reader.readAsDataURL(fileUpload.files[0]);
            reader.onload = function (e) {
                //Initiate the JavaScript Image object.
                var image = new Image();

                //Set the Base64 string return from FileReader as source.
                image.src = e.target.result;

                //Validate the File Height and Width.
                image.onload = function () {
                    var height = this.height;
                    var width = this.width;
                    if (height == imageheight || width == imagewidth) {



                        document.getElementById('submitBtn').disabled=false;
                        document.getElementById('error_message'+id).innerHTML='';

                        return false;
                    }

                    document.getElementById('submitBtn').disabled=true;
                    document.getElementById('error_message'+id).innerHTML='Please Upload image is '+imagewidth+'px * '+ imageheight+'px';

                    return true;
                };

            }
        } else {
            alert("This browser does not support HTML5.");
            return false;
        }
    } else {
        alert("Please select a valid Image file.");
        return false;
    }
}









    </script>
@endsection
