@extends('admin/layout.layout')
@section('page_title','Manage Prominent Persons')

@section('container')


            <div class="page-title">
              <div class="title_left">
                <h3>Manage Prominent Persons</h3>
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




         <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method='post' action="{{ route('ProminentPersons.store')}}" enctype="multipart/form-data">
						@csrf
		<input type="hidden" name="id" id="id" value="{{ $row->id }}">



            <div class="row">








              {{--  col-md-6 start  --}}
              <div class="col-md-12">
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name" id="name" value="{{ $row->name }}" required>



                </div>

              </div>




              {{--  col-md-6 start  --}}
              <div class="col-md-12">
                <div class="form-group">
                  <label>জন্ম - মৃত্যু (সাল)</label>
                  <input type="text" class="form-control" name="dm" id="dm" value="{{ $row->dm }}" required>



                </div>

              </div>




              {{--  col-md-6 start  --}}
              <div class="col-md-12">
                <div class="form-group">
                  <label>Personal details</label>
                  <input type="text" class="form-control" name="pd" id="pd" value="{{ $row->pd }}" required>



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
                    <option>বিক্রামপুরের ব্যক্তিত্ব</option>
                    <option>বিক্রামপরের নারী ব্যক্তিত্ব</option>



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
