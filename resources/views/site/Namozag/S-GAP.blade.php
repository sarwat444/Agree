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
                <li><span>Agricultural inspector registration form S-GAP </span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
            <h2>Agricultural inspector registration form S-GAP</h2>
        </div><!-- /.container -->
    </section><!-- /.page-header -->
    <section class="Tawzef_model mt-50 mb-50">
        <form method="post" action="{{route('site.save_S_GAP_model')}}" enctype="multipart/form-data">
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
                                <label>Do you have a supervisor certificate? S-GAP</label><br>
                                <input type="radio" name="Have_certifacate" value="0"  id="yes" checked> <label for="yes"> Yes </label>
                                <input type="radio" name="Have_certifacate" value="1" id="no">  <label for="no"> No </label>
                            </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Specilization </label>
                                    <input type="text" name="specilization" class="form-control" placeholder="Specilization" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Biography</label>
                                    <input type="file" name="Biography_file" class="form-control"  required>
                                </div>
                            </div>
                        </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Qulififcation</label>
                                <select class="form-control" name="quilifaction" required>
                                    <option selected >Select ... </option>
                                    @foreach($Quilifactions as $qulification)
                                        <option value="{{$qulification->id}}">{{$qulification->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>S-Gap File </label>
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

