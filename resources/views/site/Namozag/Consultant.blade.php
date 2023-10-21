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
                <li><span>{{ __('home.Consultant registration form') }} </span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
            <h2>{{ __('home.Consultant registration form') }} </h2>
        </div><!-- /.container -->
    </section><!-- /.page-header -->
    <section class="Tawzef_model mt-50 mb-50">
        <form method="post" action="{{route('site.save_Consultant_model')}}" enctype="multipart/form-data">
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
                                <label>{{ __('home.Name') }}  </label>
                                <input name="name" type="text" class="form-control" placeholder="{{ __('home.Name') }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ __('home.Email') }} </label>
                                <input name="email" type="email" class="form-control" placeholder="{{ __('home.Email') }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ __('home.Phone') }}</label>
                                <input name="phone" type="text" class="form-control" placeholder=" {{ __('home.Phone') }}" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ __('home.Years of Experience on Agricultural sector') }}  </label>
                                <input name="experience_years" type="text" class="form-control" placeholder="{{ __('home.Years of Experience on Agricultural sector') }}" required>
                            </div>
                        </div>
                    </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{ __('home.Years of Experience On general') }}  </label>
                                    <input name="experience_years_public" type="text" class="form-control" placeholder="{{ __('home.Years of Experience On general') }}" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{ __('home.Experience Field') }}  </label><br>
                                    <select class="form-control" name="experience_filed">

                                        <option selected >Select ... </option>
                                        @foreach($experience_filed as $filed)
                                            <option value="{{$filed->id}}">{{$filed->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ __('home.Qulififcation') }} </label>
                                <select class="form-control" name="quilifaction">
                                    <option selected >Select ... </option>
                                    @foreach($Quilifactions as $qulification)
                                        <option value="{{$qulification->id}}">{{$qulification->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ __('home.File') }} </label>
                                <input type="file" name="file" class="form-control"  required>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary thm-btn submit_button"  type="submit" name="submit"> {{ __('home.Save') }} </button>
                </div>
            </div>
        </form>
    </section>
@endsection
@push('scripts')
@endpush

