@extends('admin.layouts.app')
@push('title','Tawzef Model')
@push('styles')
    <link href="{{asset(ASSET_URL_PUBLIC.'/assets/admin/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet"
          type="text/css"/>
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
                            <th>URL</th>
                            <th>Status</th>
                            <th>Created on</th>
                            <th>Attachments: CV</th>
                            <th>Actions</th>
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
                                <td><a href="{{asset(ASSET_URL_PUBLIC.'/assets/admin/libs/sweetalert2/sweetalert2.min.css')}}" class="btn btn-primary">View Attachments</a></td>
                                <td class="center">{{ $t_model->created_at }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{route('dashboard.pages.edit' , $t_model->id )}}"  class="text-muted font-size-20 "><i class="bx bxs-edit"></i></a>
                                        <form action="{{ route('dashboard.pages.destroy', $t_model->id) }}"
                                              method="POST">@csrf @method('delete')
                                            <a class="text-muted font-size-20 confirm-delete"><i
                                                    class="bx bx-trash"></i></a>
                                        </form>
                                    </div>
                                </td>
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
    @include('admin.categories.scripts.delete')
@endpush
