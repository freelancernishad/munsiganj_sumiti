@extends('admin/layout.layout')
@section('page_title', 'Committee List')
@section('container')
    <div class="page-title">
        <div class="title_left">
            <h3> <small> Committees</small></h3>
        </div>
        <div class="title_right">
            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search text-right">
                <h4><a href="{{ route('committee.create') }}">Add Committee</a></h4>
            </div>
        </div>
    </div>




    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                        @if ($type == '')
                            <a href="{{ route('active.committees.excel') }}" class="btn btn-danger float-right">Download
                                Excel Sheet</a>
                        @elseif($type == 'ex')
                            <a href="{{ route('ex.committees.excel') }}" class="btn btn-danger float-right">Download Excel
                                Sheet</a>
                        @endif
                        <div class="card-box table-responsive">
                            <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action"
                                style="width:100%">
                                <thead>
                                    <tr>

                                        <th width="2%">SL</th>
                                        <th width="20%">Name</th>
                                        <th width="20%">Date of Birth</th>
                                        <th width="30%">Address</th>
                                        <th width="30%">Session</th>
                                        <th width="30%">registration date</th>
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
                                            <td>{{ $row->name }}</td>
                                            <td>{{ $row->dob }}</td>
                                            <td>{{ $row->p_vill }} ,{{ $row->p_post }} ,{{ $row->p_thana }}
                                                ,{{ $row->p_dist }}</td>
                                            <td>{{ $row->session_start }}</td>
                                            <td>{{ date('Y-m-d h:i:s A', strtotime($row->created_at)) }} </td>
                                            <td><img width="100%" src="{{ asset($row->image) }}" alt="" /></td>
                                            <td>
                                                <a href="{{ route('committee.edit', ['committee' => $row->id]) }}"
                                                    class="btn btn-info">Edit</a>


                                                <form method="post"
                                                    action="{{ route('committee.destroy', ['committee' => $row->id]) }}">
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
