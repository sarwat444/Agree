@extends('site.layouts.app')
@push('styles')
@endpush
@section('content')
    <!-- Main Container  -->
    <div class="main-container container">
        <ul class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
            <li><a href="#">Send Email</a></li>
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
                            <form action="{{url('ResetPassword/emailSending')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="col-sm-6 customer-signup">
                                    <div class="well">
                                        <h2><i class="fa fa-file-text-o" aria-hidden="true"></i>E-Mail </h2>
                                        <div class="form-group">
                                            <label class="control-label " for="input-email">E-Mail Address</label>
                                            <input type="email"  name="email" id="input-email" class="form-control" />
                                        </div>
                                        <br>
                                        <button  class="btn btn-primary" type="submit"> Send Reset Email</button>
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
