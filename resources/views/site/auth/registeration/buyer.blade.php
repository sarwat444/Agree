
        <div class="row">
                    <div id="content" class="col-sm-12">
                        <h2 class="title">{{__('home.Register Account')}}</h2>
                        <p>{{__('home.If you already have an account with us, please login at the')}}  <a style="color: orange; text-decoration: underline;margin-left: 10px" href="{{route('site.signIn')}}">Login</a>.</p>
                        <form action="{{route('site.buyer_register')}}" method="post" enctype="multipart/form-data" class="form-horizontal account-register clearfix">
                        @csrf

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
                            <fieldset id="account">
                                <div class="form-group required" style="display: none;">
                                    <label class="col-sm-2 control-label">{{__('home.Customer Group')}} </label>
                                    <div class="col-sm-10">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="customer_group_id" value="1" checked="checked"> Default
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group required">
                                    <label class="col-sm-2 control-label" for="input-firstname">{{__('home.Full Name')}} </label>
                                    <div class="col-sm-10">
                                        <input type="text" required name="full_name" value="" placeholder="{{__('home.Full Name')}}" id="input-firstname" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label class="col-sm-2 control-label" for="input-lastname">{{__('home.Company Name')}}  </label>
                                    <div class="col-sm-10">
                                        <input type="text" required name="company_name" value="" placeholder="{{__('home.Company Name')}}" id="input-lastname" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label class="col-sm-2 control-label" for="input-email"> {{__('home.E-Mail')}}</label>
                                    <div class="col-sm-10">
                                        <input type="email" required name="email" value="" placeholder="{{__('home.E-Mail')}} " id="input-email" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label class="col-sm-2 control-label" for="input-telephone">{{__('home.Phone')}}</label>
                                    <div class="col-sm-10">
                                        <input type="number" required name="phone" value="" placeholder="{{__('home.Phone')}}" id="input-telephone" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="input-fax">{{__('home.Website')}} </label>
                                    <div class="col-sm-10">
                                        <input type="text"  name="website" value="" placeholder="{{__('home.Website')}}" id="input-fax" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label class="col-sm-2 control-label" for="input-fax"> {{__('home.Password')}} </label>
                                    <div class="col-sm-10">
                                        <input type="password"   required name="password" value="" placeholder="{{__('home.Password')}}" id="input-fax" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label class="col-sm-2 control-label" for="input-fax">Confirm </label>
                                    <div class="col-sm-10">
                                        <input type="password"  required name="password_confirmation" value="" placeholder="{{__('home.Password Confirmation')}}" id="input-fax" class="form-control">
                                    </div>
                                </div>
                            </fieldset>
                            <input type="submit" value="{{__('home.Register')}} " class="btn btn-primary">
                        </form>
                    </div>
                </div>
