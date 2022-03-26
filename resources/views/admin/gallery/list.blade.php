@extends('admin/layout.layout')
@section('page_title', 'Gallery List')
@section('container')
    <div class="page-title">
        <div class="title_left">
            <h3> <small> Gallerys</small></h3>
        </div>
        <div class="title_right">
            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search text-right">
                <h4><a href="{{ route('gallery.create') }}">Add Gallery</a></h4>
            </div>
        </div>
    </div>




    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action"
                                style="width:100%">
                                <thead>
                                    <tr>

                                        <th width="2%">SL</th>
                                        <th width="20%">Title</th>
                                        <th width="20%">Category</th>

                                        <th width="10%">Image</th>
                                        <th width="18%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
@php
    $i = 1;
    @endphp
                                    @foreach ($rows as $row)

                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $row->title }}</td>
                                        <td>{{ $row->category }}</td>

                                        <td><img width="100%" src="{{ $row->image }}" alt="" /></td>
                                        <td>
                                            <a href="{{ route('gallery.edit', ['gallery' => $row->id]) }}" class="btn btn-info">Edit</a>


                                            <form method="post" action="{{ route('gallery.destroy', ['gallery' => $row->id]) }}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>



                                        </td>
                                    </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
