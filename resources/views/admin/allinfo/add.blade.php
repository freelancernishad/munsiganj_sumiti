@extends('admin/layout.layout')
@section('page_title','Manage Info')

@section('container')


            <div class="page-title">
              <div class="title_left">
                <h3>Manage Info</h3>
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




         <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method='post' action="{{ route('allinfo.store')}}" enctype="multipart/form-data">
						@csrf
						<input type="hidden" name="id" id="id" value="{{ $row->id }}">
						<input type="hidden" name="infoid" id="infoid" value="{{ $row->infoid }}">


            <div class="row">












              {{--  col-md-6 start  --}}
              <div class="col-md-12">
                <div class="form-group">
                  <label>Title</label>

                    <select name="title" id="title" class="form-control" onchange="getdataInfo()">
                      <option value="">Select</option>
                      <option>Historical Info</option>
                      <option>Historical Place</option>
                      <option>Historical Village</option>
                      <option>Local Professional Info</option>
                      <option>District Info</option>
                      <option>Educational History</option>
                      <option>High School</option>
                      <option>Collage Univercity</option>
                      <option>Madrasa</option>
                      <option>Medical College</option>
                      <option>Technical Institute</option>
                      <option>Agricaltural Info</option>
                      <option>Medical Info</option>
                      <option>Prominent Persons</option>
                      <option>Parliamentary Persons Profile</option>
                      <option>Historical Place</option>
                      <option>Cultural Info</option>
                      <option>Tourism</option>
                      <option>Local Language</option>
                      <option>Vhaban Hostel</option>
                      <option>Probashi</option>
                   </select>


                </div>
<script>
  document.getElementById('title').value="{{ $row->title }}";
</script>
              </div>


              {{--  col-md-6 start  --}}
              <div class="col-md-12">
                <div class="form-group">
                  <label>Short Description</label>
<textarea name="short_description" id="short_description" cols="30" class="form-control" rows="4" style="resize:none" >{{ $row->short_description }}</textarea>


                </div>

              </div>


              {{--  col-md-6 start  --}}
              <div class="col-md-12">
                <div class="form-group">
                  <label>Description </label>

<textarea name="description" id="bio" cols="30" class="form-control" rows="10">{{ $row->description }}</textarea>


                </div>

              </div>





   {{--  col-md-6 start  --}}
   <div class="col-md-12">
    <div class="form-group">
      <label>ছবি</label>



<input class="form-control" type="file"  id="infoImage" >
      <input type="hidden" class="form-control" name="image" id="image" value="{{ $row->image }}">


    </div>

  </div>

<div class="col-md-5 mb-3"></div>
<div class="col-md-2 mb-3"><img width="100%" id="imagepreview" src="{{ $row->image }}" alt=""></div>
<div class="col-md-5 mb-3"></div>




            </div>











                      <div class="ln_solid"></div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">

                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                    @endforeach



                  </div>
                </div>
              </div>
            </div>


<script>
function getdataInfo(){

var title = document.getElementById('title').value;

$.ajax({
    url: "/admin/get/alldata/"+title,
    type: "get",

    success: function(result) {

if(result==0){
  document.getElementById('id').value='';
document.getElementById('infoid').value='';
document.getElementById('short_description').value='';

// document.getElementById('bio').innerHTML=data[3];
// document.getElementById("bio").value = "Fifth Avenue, New York City";
$("#bio").summernote("code", '');


document.getElementById('image').value='';
document.getElementById('imagepreview').src='';
}else{
        var data = result.split(",,,");

document.getElementById('id').value=data[0];
document.getElementById('infoid').value=data[1];
document.getElementById('short_description').value=data[2];

// document.getElementById('bio').innerHTML=data[3];
// document.getElementById("bio").value = "Fifth Avenue, New York City";
$("#bio").summernote("code", data[3]);
// console.log(data[3]);

document.getElementById('image').value=data[4];
document.getElementById('imagepreview').src=data[4];
}






    }

});

}



</script>



@endsection
