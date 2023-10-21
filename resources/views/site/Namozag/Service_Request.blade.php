@extends('site.layouts.app')
@push('styles')
    <style>

    </style>
@endpush
@section('content')
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">{{ __('home.Home') }}</a></li>
                <li>/</li>
                <li><span> {{ __('home.Service Request Model') }} </span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
            <h2> {{ __('home.Service Request Model') }}</h2>
        </div><!-- /.container -->
    </section><!-- /.page-header -->
    <section class="Tawzef_model mt-50 mb-50">
        <form method="post" action="{{route('site.save_service_request_model')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="container">
                    @if(session()->has('success'))
                        <div class="alert alert-success">{{session('success')}}</div>
                    @endif
                    @if(session()->has('error'))
                        <div class="alert alert-danger">{{session('error')}}</div>
                    @endif

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="type">{{ __('home.Type') }} </label>
                                <select id="type" class="form-control" name="type">
                                    <option value="Dimitra Tech">Dimitra Tech </option>
                                    <option value="Sammi Glory">Sammi Glory</option>
                                    <option value="Business Development">Business Development</option>
                                    <option value="Technical and administrative badges">Technical and administrative badges</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">{{ __('home.Name') }}</label>
                                <input id="name" name="name" type="text" class="form-control" placeholder="{{ __('home.Name')}}" required>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">{{ __('home.Phone')}} </label>
                                <input id="phone" name="phone" type="text" class="form-control" placeholder="{{ __('home.Phone')}}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">{{ __('home.Email')}} </label>
                                <input id="email" name="email" type="email" class="form-control" placeholder="{{ __('home.Email')}}" required>
                            </div>
                        </div>

                    </div>
                    <div class="row mb-3 d-none" id="notes">
                        <div class="col-md-12">
                            <label for="notes">{{ __('home.Notes')}} </label>
                            <textarea id="notes" class="form-control" placeholder=">{{ __('home.Notes')}}"  name="notes"></textarea>
                        </div>
                    </div>
                    <button class="btn btn-primary thm-btn submit_button"  type="submit" name="submit">{{ __('home.Save')}}  </button>
                </div>
            </div>
        </form>
    </section>
@endsection
@push('scripts')
<script>
$(document).ready(function()
{
    $('#type').on('change' , function(){
        if($(this).val() == 'other')
        {
            $('#notes').removeClass('d-none') ;
        }else
        {
            $('#notes').addClass('d-none') ;
        }

    });

});
</script>
@endpush

