@extends('admin.layouts.app')
@push('title','Tawzef Model')
@push('styles')
    <link href="{{asset(ASSET_URL_PUBLIC.'/assets/admin/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset(ASSET_URL_PUBLIC.'/assets/admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}"
          rel="stylesheet" type="text/css"/>
    <link
        href="{{asset(ASSET_URL_PUBLIC.'/assets/admin/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}"
        rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">

@endpush
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100 text-center">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Quilifaction</th>
                            <th>Sex</th>
                            <th>Attachments: CV</th>
                            <th>Created</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($tawzef_models as $t_model)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="center">{{ $t_model->name }}</td>
                                <td class="center">{{ $t_model->phone }}</td>
                                <td class="center">{{ $t_model->email }}</td>
                                <td class="center">{{ $t_model->quilifaction->title }}</td>
                                <td class="center">@if($t_model->sex==1) <span class="badge badge-soft-success">male</span> @else <span class="badge badge-soft-primary">female</span> @endif</td>
                                <td><a href="{{asset(ASSET_URL_PUBLIC.$t_model->file)}}" class="btn btn-primary">View Attachments</a></td>
                                <td class="center">{{ $t_model->created_at }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">{{__('admin-dashboard.no data')}}</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{asset(ASSET_URL_PUBLIC.'/assets/admin/libs/sweetalert2/sweetalert2.min.js')}}"></script>
    <script src="{{asset(ASSET_URL_PUBLIC.'/assets/admin/js/pages/sweet-alerts.init.js')}}"></script>
    <script src="{{asset(ASSET_URL_PUBLIC.'/assets/admin/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset(ASSET_URL_PUBLIC.'/assets/admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset(ASSET_URL_PUBLIC.'/assets/admin/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset(ASSET_URL_PUBLIC.'/assets/admin/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
    <!-- DataTables Buttons -->

    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
    <script>
            $(document).ready(function (){
                $('#datatable').dataTable({
                    dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
                }) ;
            })
    </script>
@endpush
