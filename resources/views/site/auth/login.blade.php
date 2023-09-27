@extends('site.layouts.app')
@push('styles')
@endpush
@section('content')
    <!-- Main Container  -->
    <div class="main-container container">
        <ul class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
            <li><a href="#">{{__('home.Login')}}</a></li>
        </ul>
        <div class="row">
            <div id="content" class="col-sm-12">
                <div class="page-login">
                @if(session()->has('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                    @endif
                    @if(session()->has('error'))
                    <div class="alert alert-danger">{{session('error')}}</div>
                    @endif
                    <div class="account-border">
                        <div class="row">
                            <div class="col-sm-6 new-customer">
                                <div class="well">
                                    <h2><i class="fa fa-file-o" aria-hidden="true"></i>{{__('home.New Customer')}}</h2>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="login-image">
                                               <img src="{{asset(ASSET_URL.'/images/login_image.avif')}}" class="img-thumbnail">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="login-image">
                                                <img src="{{asset(ASSET_URL.'/images/login_image2.avif')}}" class="img-thumbnail">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form action="{{route('site.set_signIn')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="col-sm-6 customer-login">
                                    <div class="well">
                                        <h2><i class="fa fa-file-text-o" aria-hidden="true"></i>{{__('home.Returning Customer')}}  </h2>
                                        <p><strong>{{__('home.I am a returning customer')}}  </strong></p>
                                        <div class="form-group">
                                            <label class="control-label " for="input-email">{{__('home.E-Mail Address')}} </label>
                                            <input type="email" name="email" value="" id="input-email" class="form-control" required/>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label " for="input-password">                                                                                                                                                       {{__('home.Password')}} </label>
                                            <input type="password" name="password" value="" id="input-password" class="form-control"  required/>
                                        </div>
                                    </div>
                                    <div class="bottom-form">
                                        <a href="{{url('ResetPassword/emailSending')}}" class="forgot"> {{__('home.Forgotten Password')}} </a>
                                        <input type="submit" value="{{__('home.Login')}}" class="btn btn-default pull-right" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- //Main Container -->
@endsection
@push('scripts')
@endpush
