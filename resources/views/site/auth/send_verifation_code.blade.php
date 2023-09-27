@extends('site.layouts.app')
@push('styles')
@endpush
@section('content')
    <!-- Main Container  -->
    <div class="main-container container">
        <ul class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
            <li><a href="#">{{__('home.Account')}}</a></li>
        </ul>

        <div class="row">
            <div id="content" class="col-sm-12">
                <div class="page-login">
                @if(session()->has('supplier_success'))
                    <div class="alert alert-success">{{session('supplier_success')}}</div>
                    @endif
                    @if(session()->has('supplier_error'))
                    <div class="alert alert-danger">{{session('supplier_error')}}</div>
                    @endif
                    @if(session()->has('buyer_success'))
                    <div class="alert alert-success">{{session('buyer_success')}}</div>
                    @endif
                    @if(session()->has('buyer_error'))
                    <div class="alert alert-danger">{{session('buyer_error')}}</div>
                    @endif
                    @if(session()->has('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                    @endif
                    @if(session()->has('error'))
                    <div class="alert alert-danger">{{session('error')}}</div>
                    @endif
                    <div class="account-border">
                        <div class="row">
                            <form action="{{route('site.verifyTheEmail')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="col-sm-6 customer-signup">
                                    <div class="well">
                                        <div class="form-group">
                                            <input type="hidden"  name="email" value="{{$email}}" id="input-email" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label " for="code"> {{__('home.Verfication Code')}}</label>
                                            <input type="text" name="code" value="" id="code" class="form-control" />
                                        </div>
                                        <button  class="btn btn-primary" type="submit"> {{__('home.Verifay Email')}} </button>
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
