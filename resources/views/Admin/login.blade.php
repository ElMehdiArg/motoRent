@extends('Admin.Admin_mp')
@section('content')
<div class="content-wrapper mt-5">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-7 col-sm-8 col-12 mx-auto">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">LOGIN NOW</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-horizontal" action="{{route('login.post')}}" method="post">
                            @csrf
                            <div class="card-body">
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <button type="submit" class="btn btn-primary">LOGIN</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="container tm-mt-big tm-mb-big">
    <div class="row">
        <div class="col-xl-5 col-lg-6 col-md-8 col-10 mx-auto">
            <form action="{{route('login.post')}}" method="post" class="tm-edit-product-form">
                @csrf
                <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-12 text-center">
                            <h2 class="tm-block-title d-inline-block">Admin Login</h2>
                        </div>
                    </div>
                    <div class="row tm-edit-product-row">

                        <div class="col-12">
                            <div class="form-group mb-3">
                                <label for="email">E-Mail
                                </label>
                                <input name="email" type="text" placeholder="Enter your Email" class="form-control " />
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group mb-3">
                                <label for="password">Password
                                </label>
                                <input name="password" type="password" placeholder="Enter your password" class="form-control " />
                            </div>
                        </div>

                        <div class="col-12 text-center mt-4">
                            <button type="submit" class="btn btn-primary text-uppercase">Login</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div> -->
@endsection