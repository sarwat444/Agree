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
                            <th>Note</th>
                            <th>Created</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($services_requests as $service)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="center">{{ $service->name }}</td>
                                <td class="center">{{ $service->phone }}</td>
                                <td class="center">{{ $service->email }}</td>
                                @if(!empty($service->note))
                                <td class="center">{{ $service->note }}</td>
                                 @else
                                    <td class="text-center text-danger"> No Notes</td>

                                @endif
                                <td class="center">{{ $service->created_at }}</td>
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
    <script>
        $(document).ready(function (){
            $('#datatable').dataTable() ;
        })
    </script>
@endpush
