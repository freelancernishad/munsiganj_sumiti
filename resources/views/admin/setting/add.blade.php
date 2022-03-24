@extends('admin/layout.layout')
@section('page_title','Manage Setting')

@section('container')


            <div class="page-title">
              <div class="title_left">
                <h3>Manage Setting</h3>
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




         <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method='post' action="{{ route('setting.store')}}" enctype="multipart/form-data">
						@csrf
						<input type="hidden" name="id" id="id" value="{{ $row->id }}">


            <div class="row">

       {{--  col-md-6 start  --}}
       <div class="col-md-6">
        <div class="form-group">
          <label>Site Title</label>
          <input type="text" class="form-control" name="title" id="title" value="{{ $row->title }}">
        </div>

      </div>


       {{--  col-md-6 start  --}}
       <div class="col-md-6">
        <div class="form-group">
          <label>Admin Email</label>
          <input type="text" class="form-control" name="email" id="email" value="{{ $row->email }}">
        </div>

      </div>



      {{--  col-md-6 start  --}}
      <div class="col-md-12">
        <div class="form-group">
          <label>About</label>
          <textarea name="About" id="About" cols="30" rows="3" class="form-control" style="resize:none">{{ $row->About }}</textarea>
        </div>

      </div>



      {{--  col-md-6 start  --}}
      <div class="col-md-12">
        <div class="form-group">
          <label>Address</label>
          <textarea name="address" id="address" cols="30" rows="3" class="form-control" style="resize:none">{{ $row->address }}</textarea>
        </div>

      </div>



      {{--  col-md-6 start  --}}
      <div class="col-md-12">
        <div class="form-group">
          <label>Committee details</label>
          <textarea name="committee" id="committee" cols="30" rows="3" class="form-control" style="resize:none">{{ $row->committee }}</textarea>
        </div>

      </div>


      {{--  col-md-6 start  --}}
      <div class="col-md-12">
        <div class="form-group">
          <label>Global committee Details</label>
          <textarea name="globalcommittee" id="globalcommittee" cols="30" rows="3" class="form-control" style="resize:none">{{ $row->globalcommittee }}</textarea>
        </div>

      </div>


      {{--  col-md-6 start  --}}
      <div class="col-md-6">
        <div class="form-group">
          <label>Advertisement</label>

          <input type="file" class="form-control" name="Advertisement" id="Advertisement">


        </div>

      </div>


      {{--  col-md-6 start  --}}
      <div class="col-md-6">
        <div class="form-group">
          <label>Popup Status</label>
            <select name="popstatus" id="popstatus" class="form-control">
                <option value="">Seelct</option>
                <option>On</option>
                <option>Off</option>

            </select>


            <script>

                document.getElementById("popstatus").value="{{ $row->popstatus }}";
            </script>
        </div>

      </div>


      {{--  col-md-6 start  --}}
      <div class="col-md-12">
        <div class="form-group">
          <label>Popup Content</label>
          <textarea name="popupcontent" id="bio" cols="30" rows="3" class="form-control" style="resize:none">{{ $row->popupcontent }}</textarea>
        </div>

      </div>



             {{--  col-md-6 start  --}}
             <div class="col-md-6">
              <div class="form-group">
                <label>Admin Phone Number</label>
                <input type="text" class="form-control" name="phone" id="phone" value="{{ $row->phone }}">
              </div>

            </div>


             {{--  col-md-6 start  --}}
             <div class="col-md-6">
              <div class="form-group">
                <label>Facebook link</label>
                <input type="text" class="form-control" name="facebook" id="facebook" value="{{ $row->facebook }}">
              </div>

            </div>



             {{--  col-md-6 start  --}}
             <div class="col-md-6">
              <div class="form-group">
                <label>Twitter link</label>
                <input type="text" class="form-control" name="twitter" id="twitter" value="{{ $row->twitter }}">
              </div>

            </div>



             {{--  col-md-6 start  --}}
             <div class="col-md-6">
              <div class="form-group">
                <label>Instagram link</label>
                <input type="text" class="form-control" name="instagram" id="instagram" value="{{ $row->instagram }}">
              </div>

            </div>




             {{--  col-md-6 start  --}}
             <div class="col-md-6">
              <div class="form-group">
                <label>Youtube link</label>
                <input type="text" class="form-control" name="youtube" id="youtube" value="{{ $row->youtube }}">
              </div>

            </div>





             {{--  col-md-6 start  --}}
             <div class="col-md-6">
              <div class="form-group">
                <label>Site Logo</label>
                <input type="file" class="form-control" name="logo" id="logo">
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
