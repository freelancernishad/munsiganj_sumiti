@extends('admin/layout.layout')
@section('page_title', 'Manage Members')

@section('container')


    <div class="page-title">
        <div class="title_left">
            <h3>Import Members</h3>
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



                    <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="file" class="form-control">
                        <br>
                        <button class="btn btn-success">Import Data</button>
                        {{-- <a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a> --}}
                    </form>



                </div>
            </div>
        </div>
    </div>










@endsection
