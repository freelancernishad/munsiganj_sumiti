@extends('admin/layout.layout')
@section('page_title','Manage History Place')

@section('container')


            <div class="page-title">
              <div class="title_left">
                <h3>Manage History Place</h3>
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




         <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method='post' action="{{ route('HistoryPlace.store')}}" enctype="multipart/form-data">
						@csrf
		<input type="hidden" name="id" id="id" value="{{ $row->id }}">



            <div class="row">








              {{--  col-md-6 start  --}}
              <div class="col-md-12">
                <div class="form-group">
                  <label>Place Name</label>
                  <input type="text" class="form-control" name="name" id="name" value="{{ $row->name }}" required>



                </div>

              </div>
              {{--  col-md-6 start  --}}
              <div class="col-md-12">
                <div class="form-group">
                  <label>Description </label>

<textarea name="info" id="bio" cols="30" class="form-control" rows="10" required>{{ $row->info }}</textarea>


                </div>

              </div>




              {{--  col-md-6 start  --}}
              <div class="col-md-12">
                <div class="form-group">
                  <label>Category</label>
                <select class="form-control"  name="category" id="category" required>
                    <option value="">Select</option>

                    @foreach ($cate as $List)
                    <option>{{ $List->name }}</option>
                    @endforeach
                </select>

<script>
    document.getElementById('category').value="{{ $row->category }}"
</script>

                </div>
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







@endsection
