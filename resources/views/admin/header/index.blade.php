@extends('admin::admins.layouts.app')
@push('title','Social Links')

@push('styles')
    <link href="{{asset(ASSET_URL_PUBLIC.'/assets/admin/libs/select2/css/select2.min.css')}}" rel="stylesheet"
          type="text/css"/>
@endpush
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Pages  Links </h4>
                    <form id="store-course-from" class="repeater" action="{{route('dashboard.header.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <div data-repeater-list="headerlist">
                                        <div data-repeater-item class="row">

                                       @forelse($header_links as $link)
                                            <div class="col-md-8">
                                                <div class="mb-3">
                                                    <label for="facebook" class="form-label">  Link </label>
                                                    <input type="text" name="link" placeholder="Link.."  class="form-control" value="{{$link->link}}" id="link" >
                                                </div>
                                            </div>
                                            <div class="col-lg-2 align-self-center">
                                                <div class="d-grid">
                                                    <input data-repeater-delete type="button" class="btn btn-primary"
                                                           value="{{__('admin-dashboard.Delete')}}"/>
                                                </div>
                                            </div>
                                            @empty
                                                <div class="col-md-8">
                                                    <div class="mb-3">
                                                        <label for="facebook" class="form-label">  Link </label>
                                                        <input type="text" name="link" placeholder="Link.."  class="form-control"  id="link" >
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 align-self-center">
                                                    <div class="d-grid">
                                                        <input data-repeater-delete type="button" class="btn btn-primary"
                                                               value="{{__('admin-dashboard.Delete')}}"/>
                                                    </div>
                                                </div>

                                            @endforelse

                                        </div>

                                    </div>
                                    <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0"
                                           value="Add Link "/>
                                </div>
                            </div>
                        </div>

                        <div class="mb-2 text-center">
                            <div class="spinner-border text-primary m-1 d-none" role="status"><span
                                    class="sr-only"></span></div>
                        </div>
                        <div>
                            <button type="submit" id="submit-button" class="btn btn-primary w-md btn-lg"> Save </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{asset(ASSET_URL_PUBLIC.'/assets/admin/libs/select2/js/select2.min.js')}}"></script>
    @include('admin::admins.courses.scripts.detect-input-change')
    <script src="{{asset(ASSET_URL_PUBLIC.'/assets/admin/js/pages/form-advanced.init.js')}}"></script>
    <script src="{{asset(ASSET_URL_PUBLIC.'/assets/admin/libs/jquery.repeater/jquery.repeater.min.js')}}"></script>
    <script src="{{asset(ASSET_URL_PUBLIC.'/assets/admin/js/pages/form-repeater.int.js')}}"></script>
@endpush
