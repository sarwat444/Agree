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
                <li><a href="index.html">Home</a></li>
                <li>/</li>
                <li><span>Consultant registration form</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
            <h2>Consultant registration form</h2>
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
                                <label>Name</label>
                                <input name="name" type="text" class="form-control" placeholder="Name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input name="email" type="email" class="form-control" placeholder="Email" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Phone</label>
                                <input name="phone" type="text" class="form-control" placeholder="Phone" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Years of Experience on Agricultural sector </label>
                                <input name="experience_years" type="text" class="form-control" placeholder="Years of Experience" required>
                            </div>
                        </div>
                    </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Years of Experience On general </label>
                                    <input name="experience_years_public" type="text" class="form-control" placeholder="Years of Experience On general" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Experience Field </label><br>
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
                                <label>Qulififcation</label>
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
                                <label>File</label>
                                <input type="file" name="file" class="form-control"  required>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary thm-btn"  type="submit" name="submit"> Save </button>
                </div>
            </div>
        </form>
    </section>
@endsection
@push('scripts')
@endpush

