@extends('admin/layout.layout')
@section('page_title','Manage Brandslider')

@section('container')

     	  
            <div class="page-title">
              <div class="title_left">
                <h3>Manage Brandslider</h3>
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
  



         <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method='post' action="{{ route('brandslider.store')}}" enctype="multipart/form-data">
						@csrf
						<input type="hidden" name="id" id="id" value="{{ $row->id }}">
						<input type="hidden" name="brandid" id="brandid" value="{{ $row->brandid }}">
						<input type="hidden" name="status" id="status" value="{{ $row->status }}">

            <div class="row">

       {{--  col-md-6 start  --}}
       <div class="col-md-12">
        <div class="form-group">
          <label>Title</label>
          <input type="text" class="form-control" name="title" id="title" value="{{ $row->title }}">
        </div>

      </div>


              {{--  col-md-6 start  --}}
              <div class="col-md-12">
                <div class="form-group">
                  <label>ছবি</label>



 <input class="form-control" type="file"  id="brandsliderImage" >
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


@endsection