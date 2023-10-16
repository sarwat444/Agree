@extends('admin::admins.layouts.app')
@push('title','Pages')
@push('styles')
    <link href="{{asset(ASSET_URL_PUBLIC.'/assets/admin/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet"
          type="text/css"/>
@endpush
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-wrap gap-2 mb-3">
                        <a href="{{route('dashboard.pages.create')}}" type="button" class="btn btn-primary waves-effect waves-light">
                            <i class="bx bx-add-to-queue font-size-16 align-middle me-2"></i>New Page
                        </a>
                    </div>
                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100 text-center">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>URL</th>
                            <th>Status</th>
                            <th>Created on</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($cmsPages as $page)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="center">{{ $page->title }}</td>
                                <td class="center">{{ $page->url }}</td>
                                <td class="center">@if($page->status==1) <span class="badge badge-soft-success">Active</span> @else <span class="badge badge-soft-danger">Inactive</span> @endif</td>
                                <td class="center">{{ $page->created_at }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{route('dashboard.pages.edit' , $page->id )}}"  class="text-muted font-size-20 "><i class="bx bxs-edit"></i></a>
                                        <form action="{{ route('dashboard.pages.destroy', $page->id) }}"
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
    @include('admin::admins.categories.scripts.delete')
@endpush
