@extends('admin/layout.layout')
@section('page_title', 'Member List')
@section('container')
    <div class="page-title">
        <div class="title_left">
            <h3 style="text-transform: capitalize;"> <small> {{ $status }} Members </small></h3>
        </div>
        <div class="title_right">
            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search text-right">
                <h4><a href="{{ route('members.create') }}">Add Member</a></h4>
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
                                        <th width="20%">Name</th>
                                        <th width="20%">Date of Birth</th>
                                        <th width="30%">Address</th>
                                        <th width="30%">registration date</th>
                                        <th width="10%">Image</th>
                                        <th width="18%">view</th>
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
                                        <td>{{ $row->Present_address }}</td>
                                        <td>{{ date("Y-m-d h:i:s A", strtotime($row->created_at)) }} </td>
                                        <td><img width="100%" src="{{ $row->image }}" alt="" /></td>
                                        <td>
                                            <a href="javascript:void(0)" onclick="viewdata('{{ url('/admin/members?id='.$row->id.'&status=trxView') }}')" class="btn btn-info">view Transition</a>
                                            @if($status=='pending')
                                            <a href="{{ url('/admin/members?id='.$row->id.'&status=approve') }}" class="btn btn-info">Approve</a>

                                            @endif




                                        </td>
                                        <td>





                                            <a href="{{ route('members.edit', ['member' => $row->id]) }}" class="btn btn-info">Edit</a>
                                            <form method="post" action="{{ route('members.destroy', ['member' => $row->id]) }}">
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

<!-- Modal -->
<div class="modal fade" id="dataModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="modal_content">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>


<script>
function viewdata(url){
   $.ajax({
        url: url,
        type: "get",
        success: function (data) {
            $("#modal_content").html(data);
                  $("#dataModal").modal("show");
        }

    });
}

</script>


@endsection
