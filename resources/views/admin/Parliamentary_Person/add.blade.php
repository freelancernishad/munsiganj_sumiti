@extends('admin/layout.layout')
@section('page_title', 'Manage Prominent Persons')

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
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method='post'
                            action="{{ route('Parliamentary_Person.store') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" id="id" value="{{ $row->id }}">



                            <div class="row">








                                {{-- col-md-6 start --}}
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name" id="name"
                                            value="{{ $row->name }}" required>



                                    </div>

                                </div>


                                {{-- col-md-6 start --}}
                                <div class="col-md-12 " id="addmore">
                                    <div class="addButton">
                                        <span class="btn btn-info" id="add">Add More</span>
                                    </div>

                                    @foreach (json_decode($row->ps_history) as $list)
                                        <div class="d-flex align-items-end" id="row0">
                                            <div class="row" style="width:100%">

                                                <div class="form-group col-md-4">
                                                    <label>আসন</label>
                                                    <input type="text" class="form-control" name="Positon[]"
                                                        id="Positon" value="{{ $list->Positon }}">
                                                </div>


                                                <div class="form-group col-md-4">
                                                    <label>Session Start (Year)</label>
                                                    <input type="text" class="form-control" name="Session_Start[]"
                                                        id="Session_Start" value="{{ $list->Session_Start }}">
                                                </div>


                                                <div class="form-group col-md-4">
                                                    <label>Session End (Year)</label>
                                                    <input type="text" class="form-control" name="Session_End[]"
                                                        id="Session_End" value="{{ $list->Session_End }}">
                                                </div>
                                            </div>
                                            <span class="btn btn-danger btn_remove" id="0">Remove</span>
                                        </div>
                                    @endforeach



                                </div>
                                {{-- col-md-6 start --}}
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Description </label>

                                        <textarea name="info" id="bio" cols="30" class="form-control" rows="10" required>{{ $row->info }}</textarea>


                                    </div>

                                </div>




                                {{-- col-md-6 start --}}
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select class="form-control" name="category" id="category" required>
                                            <option value="">Select</option>
                                            <option>Parliamentary Persons (Male)</option>
                                            <option>Parliamentary Persons (Female)</option>



                                        </select>

                                        <script>
                                            document.getElementById('category').value = "{{ $row->category }}"
                                        </script>

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Parliamentary Person Image</label>



                                        <input class="form-control" type="file" id="memberImage">
                                        <input type="hidden" class="form-control" name="image" id="image"
                                            value="{{ $row->image }}">


                                    </div>

                                </div>

                                <div class="col-md-5 mb-3"></div>
                                <div class="col-md-2 mb-3"><img width="100%" id="imagepreview"
                                        src="{{ base64($row->image) }}" alt=""></div>
                                <div class="col-md-5 mb-3"></div>



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
                $("#addmore").append(`

                <div class="d-flex align-items-end" id="row${i}">
                <div class="row" style="width:100%">

                <div class="form-group col-md-4">
                  <label>Positon</label>
                  <input type="text" class="form-control" name="Positon[]" id="Positon" >
                </div>


                <div class="form-group col-md-4">
                  <label>Session Start (Year)</label>
                  <input type="text" class="form-control" name="Session_Start[]" id="Session_Start" >
                </div>


                <div class="form-group col-md-4">
                  <label>Session End (Year)</label>
                  <input type="text" class="form-control" name="Session_End[]" id="Session_End" >
                </div>
            </div>
            <span class="btn btn-danger btn_remove" id="${i}">Remove</span>
        </div>
                `);
            });
            $(document).on('click', '.btn_remove', function() {
                var button_id = $(this).attr("id");
                $("#row" + button_id + "").remove();
            });
        });
    </script>




@endsection
