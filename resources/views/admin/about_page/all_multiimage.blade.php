@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Mult Image All</h4>

                    </div>
                    <div class="card">
                        <div class="card-body">


                            <div id="datatable-buttons_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row">


                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="datatable-buttons"
                                            class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline collapsed"
                                            style="border-collapse: collapse; border-spacing: 0px; width: 100%;"
                                            role="grid" aria-describedby="datatable-buttons_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons"
                                                        rowspan="1" colspan="1" style="width: 104px;"
                                                        aria-sort="ascending"
                                                        aria-label="Name: activate to sort column descending">Sl</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons"
                                                        rowspan="1" colspan="1" style="width: 165px;"
                                                        aria-label="Position: activate to sort column ascending">About Multi
                                                        Image
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons"
                                                        rowspan="1" colspan="1" style="width: 71px;"
                                                        aria-label="Office: activate to sort column ascending">Action</th>

                                            </thead>


                                            <tbody>
                                                @php($i = 1)
                                                @foreach ($allMultiImage as $item)
                                                    <tr class="odd">

                                                        <td class="sorting_1 dtr-control" style="">{{ $i++ }}
                                                        </td>
                                                        <td><img src="{{ asset($item->multi_image) }} "
                                                                style="width: 60px; height: 50px;"></td>
                                                        <td><a href="{{ route('edit.multi.image',$item->id) }}" class="btn btn-info sm" title="EditData"><i
                                                                    class="fas fa-edit"></i></a>
                                                            <a href="{{ route('delete.multi.image',$item->id)}}" class="btn btn-danger sm" title="Delete Data" id="delete"><i
                                                                    class="fas fa-trash-alt"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">

                                    </div>
                                    <div class="col-sm-12 col-md-7">


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
@endsection
