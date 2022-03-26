@extends('admin/layout.layout')
@section('page_title', 'Manage Gallery')
@section('container')
    <div class="page-title">
        <div class="title_left">
            <h3>Manage Gallery</h3>
        </div>
        <div class="title_right">
            <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                <div class="input-group">
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="card">
        <div class="card-header py-3">
          <h6 class="mb-0">Add Product Category</h6>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-lg-4 d-flex">
              <div class="card border shadow-none w-100">
                <div class="card-body">
                    <?php
                    if ($form_type=='new'){
                         $url =  route('gallery_category.store');
                    }else{
                         $url = route('gallery_category.update',['gallery_category'=>$edit_data->id]);
                    }
                    ?>

                  <form class="row g-3" method="post" enctype="multipart/form-data" action="{{ $url }}">
                    <?php
                    if ($form_type=='new'){}else{
                    ?> @method('PUT')<?php } ?>

                      @csrf



                    <div class="col-12">
                      <label class="form-label">Name</label>
                      <input type="text" class="form-control" name="name" value="{{old('name',$edit_data->name)}}" placeholder="Category name">
                      @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12 mt-3">
                      <div class="d-grid">
                        <button class="btn btn-primary">Add Category</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-8 d-flex">
              <div class="card border shadow-none w-100">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table align-middle">
                      <thead>
                        <tr>


                          <th>Name</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>

                        @foreach ($rows as $list)



                        <tr id="category{{ $list->id }}">

                          <td>{{ $list->name }}</td>


                          <td>
                            <div class="d-flex align-items-center gap-3 fs-6">

                              <a href="{{ url('admin/gallery_category/'.$list->id.'/edit') }}" class="btn btn-warning" data-bs-toggle="tooltip"
                                data-bs-placement="bottom" title="" data-bs-original-title="Edit info"
                                aria-label="Edit">Edit</a> &nbsp;
                              <a href="javascript:;" class="btn btn-danger" data-bs-toggle="tooltip"
                                data-bs-placement="bottom" title="" data-bs-original-title="Delete"
                                aria-label="Delete" onclick="deletedata('{{ url('admin/gallery_category/'.$list->id) }}','category','{{ $list->id }}')">Delete</a>
                            </div>
                          </td>
                        </tr>

                        @endforeach

                      </tbody>
                    </table>
                  </div>
                  {{ $rows->links('layouts.dashboard-paginate') }}
                </div>
              </div>
            </div>
          </div>
          <!--end row-->
        </div>
      </div>
@endsection
