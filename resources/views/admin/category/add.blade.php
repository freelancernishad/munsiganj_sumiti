@extends('admin/layout.layout')
@section('page_title', 'Manage Category')

@section('container')


    <div class="page-title">
        <div class="title_left">
            <h3>Manage Category</h3>
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
                            action="{{ route('category.store') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" id="id" value="{{ $row->id }}">
                            <input type="hidden" name="categoryId" id="categoryId" value="{{ $row->categoryId }}">
                            <input type="hidden" name="status" id="status" value="{{ $row->status }}">

                            <div class="row">













                                {{-- col-md-6 start --}}
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Category Name</label>
                                        <input type="text" class="form-control" name="name" id="name"
                                            value="{{ $row->name }}">
                                        <span id="errorMessage"></span>
                                    </div>

                                </div>
                                {{-- col-md-6 start --}}
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>ছবি</label>



                                        <input class="form-control" type="file" id="categoryImage">
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

                                    <button type="submit" id="cbtn" class="btn btn-success">Submit</button>
                                </div>
                            </div>

                        </form>
                    @endforeach



                </div>
            </div>
        </div>
    </div>



    <script>
        let timer;
        const input = document.querySelector('#name');
        input.addEventListener('keyup', function(e) {
            // Clears any outstanding timer
            clearTimeout(timer);
            // Sets new timer that may or may not get cleared
            timer = setTimeout(() => {

                checkCategory();


            }, 1500);
        });





        function checkCategory() {
            document.getElementById('cbtn').disabled = true;
            var name = document.getElementById('name').value;

            if (name != '') {
                $.ajax({
                    url: "{{ url('admin/check/category/') }}/" + name,
                    type: "get",
                    success: function(data) {
                        console.log(data);
                        if (data == 1) {
                            document.getElementById('cbtn').disabled = true;
                            document.getElementById('errorMessage').innerHTML = "<font color='red'>" + name +
                                " category name is Already taken!  </font>";
                        } else {
                            document.getElementById('cbtn').disabled = false;
                            document.getElementById('errorMessage').innerHTML = "<font color='green'>" + name +
                                "  category name is Available!  </font>";
                        }

                    }

                });
            }









        }
    </script>


@endsection
