@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">All Multi Image</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">All Multi Image</h4>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>About Multi Image</th>
                                <th>Action</th>

                            </tr>
                            </thead>


                            <tbody>
                            @php($i = 1)
                            @foreach($allMultiImage as $item)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td><img src="{{ asset($item->multi_image) }}" style="width: 60px; height: 50px;"></td>
                                <td>
                                    <a href="{{ route('edit.multi.image',$item->id) }}" class="btn btn-info sm" title="Edit Data">
                                    <i class="ri-edit-2-line"></i>

                                    </a>
                                    <a href="{{ route('delete.multi.image',$item->id) }}" class="btn btn-danger sm" id="delete" title="Delete">
                                    <i class="ri-delete-bin-6-fill"></i>
                                    </a>
                                </td>

                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->


@endsection
