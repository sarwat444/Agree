@extends('admin::admins.layouts.app')
@push('title','Edit Page')

@push('styles')
    <link href="{{asset(ASSET_URL_PUBLIC.'/assets/admin/libs/select2/css/select2.min.css')}}" rel="stylesheet"
          type="text/css"/>
@endpush
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Edit Pages  </h4>
                    <form id="store-course-from" class="repeater" action="{{route('dashboard.pages.update' ,$cmsPage->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="control-group">
                                    <label class="control-label">Title</label>
                                    <div class="controls">
                                        <input type="text" name="title" id="title" class="form-control" value="{{ $cmsPage->title }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="control-group">
                                    <label class="control-label">CMS Page URL</label>
                                    <div class="controls">
                                        <input type="text" name="url" id="url" class="form-control" value="{{ $cmsPage->url }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row  mb-3">
                            <div class="col-md-12">
                                    <div class="control-group">
                                        <label class="control-label">Description</label>
                                        <div class="controls">
                                            <textarea name="description"  class="form-control" placeholder="Page Description" id="elm1">{!!$cmsPage->description !!}</textarea>
                                        </div>
                                    </div>
                            </div>
                        </div>

                       <div class="row mb-3">
                           <div class="col-md-6">
                               <div class="control-group">
                                   <label class="control-label">Meta Title</label>
                                   <div class="controls">
                                       <input type="text" name="meta_title" id="meta_title" value="{{ $cmsPage->meta_title }}" class="form-control">
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="control-group">
                                   <label class="control-label">Meta Description</label>
                                   <div class="controls">
                                       <input type="text" name="meta_description" id="meta_description" value="{{ $cmsPage->meta_description }}" class="form-control">
                                   </div>
                               </div>
                           </div>
                       </div>


                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="control-group">
                                    <label class="control-label">Meta Keywords</label>
                                    <div class="controls">
                                        <input type="text" name="meta_keywords" id="meta_keywords" value="{{ $cmsPage->meta_keywords }}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <p class="form-label mb-2">Active:</p>
                                <input type="checkbox" name="status" id="status" switch="none"  value="1"
                                @if(!empty($cmsPage->status))
                                    @if($cmsPage->status == 1 )
                                        {{'checked'}}
                                        @else
                                        {{''}}
                                        @endif
                                    @endif >
                                <label for="status" data-on-label="{{__('admin-dashboard.yes')}}" data-off-label="{{__('admin-dashboard.no')}}"></label>
                            </div>
                        </div>
                        <div class="form-actions">
                            <input type="submit" value="Update CMS Page" class="btn btn-success">
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
    <script src="{{asset(ASSET_URL_PUBLIC.'assets/admin/libs/tinymce/tinymce.min.js')}}"></script>
    <!-- init js -->
    <script src="{{asset(ASSET_URL_PUBLIC.'assets/admin/js/pages/form-editor.init.js')}}"></script>
@endpush
