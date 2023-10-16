@extends('admin::admins.layouts.app')
@push('title','Add Page')

@push('styles')
    <link href="{{asset(ASSET_URL_PUBLIC.'/assets/admin/libs/select2/css/select2.min.css')}}" rel="stylesheet"
          type="text/css"/>
@endpush
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Add Cms Page </h4>
                    <form id="store-course-from" class="repeater" action="{{route('dashboard.pages.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="control-group">
                                    <label class="control-label">Title</label>
                                    <div class="controls">
                                        <input type="text" name="title" id="title" required class="form-control" placeholder="Page Title">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                    <div class="control-group">
                                        <label class="control-label">CMS Page URL</label>
                                        <div class="controls">
                                            <input type="text" name="url" id="url"  class="form-control" placeholder="Page Url " >
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                    <div class="control-group">
                                        <label class="control-label">Description</label>
                                        <div class="controls">
                                            <textarea name="description"  class="form-control" placeholder="Page Description" id="elm1"></textarea>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                    <div class="control-group">
                                        <label class="control-label">Meta Title</label>
                                        <div class="controls">
                                            <input type="text" name="meta_title" id="meta_title" class="form-control" placeholder="Meta Title ">
                                        </div>
                                    </div>
                            </div>

                            <div class="col-md-6">
                                    <div class="control-group">
                                            <label class="control-label">Meta Description</label>
                                            <div class="controls">
                                                <input type="text" name="meta_description" id="meta_description" class="form-control" placeholder="Meta Description ">
                                            </div>
                                    </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <label for="seo" class="form-label">Meta Keywords </label>
                                    <select id="select2-multiple" class="select2-multiple form-control"  name="meta_keywords"  multiple="multiple">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 justify-content-sm-start">
                                <div class="mb-4">
                                    <p class="form-label mb-2">Status</p>
                                    <input type="checkbox" value="1" name="status" id="status" switch="none"/>
                                    <label for="status" data-on-label="{{__('admin-dashboard.yes')}}" data-off-label="{{__('admin-dashboard.no')}}"></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <input type="submit" value="Add CMS Page" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{asset(ASSET_URL_PUBLIC.'/assets/admin/libs/select2/js/select2.min.js')}}"></script>
    <script>
        $(function(){
            var $tags = $(".select2-multiple").select2({
                theme: "classic",
                tags: true
            });

            $tags.val(options).trigger("change");
        });
    </script>
    <script src="{{asset(ASSET_URL_PUBLIC.'/assets/admin/js/pages/form-advanced.init.js')}}"></script>
    <script src="{{asset(ASSET_URL_PUBLIC.'/assets/admin/libs/jquery.repeater/jquery.repeater.min.js')}}"></script>
    <script src="{{asset(ASSET_URL_PUBLIC.'/assets/admin/js/pages/form-repeater.int.js')}}"></script>
    <!--tinymce js-->
    <script src="{{asset(ASSET_URL_PUBLIC.'assets/admin/libs/tinymce/tinymce.min.js')}}"></script>
    <!-- init js -->
    <script src="{{asset(ASSET_URL_PUBLIC.'assets/admin/js/pages/form-editor.init.js')}}"></script>
    @include('admin::admins.courses.scripts.detect-input-change')
@endpush
