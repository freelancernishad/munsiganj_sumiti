@extends('admin/layout.layout')
@section('page_title','Manage Registration Guideline')

@section('container')


            <div class="page-title">
              <div class="title_left">
                <h3>Manage Registration Guideline</h3>
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




         <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method='post' action="{{ route('RegistrationGuideline.store')}}" enctype="multipart/form-data">
						@csrf
						<input type="hidden" name="id" id="id" value="{{ $row->id }}">


            <div class="row">



      {{--  col-md-6 start  --}}
      <div class="col-md-12">
        <div class="form-group">
          <label>Registration Guidelines</label>
          <textarea name="info" id="bio" cols="30" rows="3" class="form-control" style="resize:none">{{ $row->info }}</textarea>
        </div>

      </div>


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
