@extends('admin/layout.layout')
@section('page_title', 'Contact List')
@section('container')
    <div class="page-title">
        <div class="title_left">
            <h3 style="text-transform: capitalize;"> <small> Contacts </small></h3>
        </div>
        <div class="title_right">
            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search text-right">

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


                                        <th width="20%">Name</th>
                                        <th width="20%">Email</th>
                                        <th width="30%">Enquiry</th>
                                        <th width="30%">Telephone</th>
                                        <th width="10%">Website</th>
                                        <th width="18%">date</th>
                                        <th width="18%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($rows as $row)
                                        <tr>

                                            <td>{{ $row->fname . ' ' . $row->lname }}</td>
                                            <td><a href="mailto:{{ $row->email }}"
                                                    rel="noopener noreferrer">{{ $row->email }}</a></td>
                                            <td>{{ $row->enquiry }}</td>
                                            <td>{{ $row->Telephone }}</td>
                                            <td>{{ $row->Website }}</td>
                                            <td>{{ date('Y-m-d h:i:s A', strtotime($row->created_at)) }} </td>

                                            {{-- <td>
                                                <a href="javascript:void(0)"
                                                    onclick="viewdata('{{ url('/admin/members?id=' . $row->id . '&status=trxView') }}')"
                                                    class="btn btn-info">view Transition</a>
                                            </td> --}}
                                            <td>

                                                <form method="post"
                                                    action="{{ route('contacts.destroy', ['contact' => $row->id]) }}">
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
    <div class="modal fade" id="dataModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
        function viewdata(url) {
            $.ajax({
                url: url,
                type: "get",
                success: function(data) {
                    $("#modal_content").html(data);
                    $("#dataModal").modal("show");
                }

            });
        }
    </script>


@endsection
