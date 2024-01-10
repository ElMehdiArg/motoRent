@extends('Admin.Admin_mp')
@section('content')
<div class="content-wrapper mt-5">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-7 col-lg-9 col-md-12 col-12 mx-auto">
                    <div class="card">
                        <div class="card-header">

                            @if(isset($circuit))
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="card-title">Update Moto</h3>
                                </div>
                            </div>
                            @else
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="card-title">Add New Moto</h3>
                                </div>
                            </div>
                            @endif
                        </div>
                        <div class="card-body">
                            @if(isset($moto))
                            @php $moto_id= Crypt::encrypt($moto->id_moto); @endphp
                            <form action="{{route('update_moto.post',[$moto->id_moto])}}" method="post" class="tm-edit-product-form" enctype="multipart/form-data">
                                @csrf
                                @else
                                <!--  -->
                                <form action="{{ route('add_moto.post') }}" method="post" class="tm-edit-product-form" enctype="multipart/form-data">
                                    @endif
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

                                        @if(session()->has('message'))
                                        <div class="alert alert-success">
                                            {{ session()->get('message') }}
                                        </div>
                                        @endif
                                        <div class="row tm-edit-product-row">

                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="marque">Manufacturer
                                                    </label>
                                                    <input name="marque" type="text" placeholder="add Manufacturer" value="@if (isset($moto)) {{$moto->marque}} @endif" class="form-control " />
                                                </div>
                                            </div>

                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="model">Model
                                                    </label>
                                                    <input name="model" type="text" placeholder="add Model" value="@if (isset($moto)) {{$moto->modèle}} @endif" class="form-control " />
                                                </div>
                                            </div>

                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="cylinder">Cylinder
                                                    </label>
                                                    <input name="cylinder" type="text" placeholder="add Cylinder" value="@if (isset($moto)) {{$moto->cylindrée}} @endif" class="form-control " />
                                                </div>
                                            </div>

                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="type">Type
                                                    </label>

                                                    <select class="form-control" name="type" id="">
                                                        <option value="" selected disabled>Select Moto Type</option>
                                                        @foreach($types as $type)
                                                        <option value="{{$type->id_cat}}" @if(isset($moto)) {{ ($moto->id_cat == $type->id_cat) ? 'selected' : '' }} @endif>{{$type->m_catégorie}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group mt-3 mb-3">
                                                    <label for="image">upload main image</label>
                                                    <input class="form-control validate" type="file" name="image" />
                                                </div>
                                            </div>

                                            <div class="col-12 text-center">
                                                <button type="submit" class="btn btn-primary btn-block text-uppercase">@if(isset($moto)) Update Moto @else Add Moto @endif </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection