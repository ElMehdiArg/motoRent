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
                                    <h3 class="card-title">Update Tour</h3>
                                </div>
                            </div>
                            @else
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="card-title">Add New Tour</h3>
                                </div>
                            </div>
                            @endif
                        </div>
                        <div class="card-body">
                            @if(isset($circuit))
                            @php $circuit_id= Crypt::encrypt($circuit[0]->id_circ); @endphp
                            <form action="{{ route('update_tour.post', [$circuit_id] ) }}" method="post" id="tour_form" class="tm-edit-product-form" enctype="multipart/form-data">
                                @csrf
                                @else
                                <form action="{{ route('add_tour.post') }}" method="post" id="tour_form" class="tm-edit-product-form" enctype="multipart/form-data">
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
                                                    <label for="titre">Tour title
                                                    </label>
                                                    <input name="titre" type="text" placeholder="add title" value="@if (isset($circuit)) {{$circuit[0]->titre}} @endif" class="form-control " />
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group mb-3">
                                                    <label for="description">Tour Description</label>
                                                    <textarea class="form-control" name="description" rows="4" placeholder="write here...">@if (isset($circuit)) {{$circuit[0]->description}} @endif</textarea>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group mb-3">
                                                    <label for="description">Tour Details</label>
                                                    <textarea id="editor" class="form-control validate" name="dètail">@if (isset($circuit)) {{$circuit[0]->détail}} @endif</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group mt-3 mb-3">
                                                    <label for="main_image">upload main image</label>
                                                    <input id="main_image" class="form-control validate" type="file" name="main_image" />
                                                    <!-- <input type="button" class="btn btn-primary btn-block mx-auto" value="upload main image" onclick="document.getElementById('main_image').click();" /> -->
                                                </div>


                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group mt-3 mb-3">
                                                    <label for="images">upload auxiliary image</label>
                                                    <input id="auxiliary_images" class="form-control validate" type="file" name="images[]" multiple />
                                                    <!-- <input type="button" class="btn btn-primary btn-block mx-auto" value="upload auxiliary images" onclick="document.getElementById('main_image').click();" /> -->
                                                </div>

                                            </div>
                                            <div class="col-12 text-center">
                                                <button type="submit" class="btn btn-primary btn-block text-uppercase mt-5">@if(isset($circuit)) Update Tour @else Add Tour @endif </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="{{asset('assets/js/ckeditor/ckeditor.js')}}"></script>

<script>
    CKEDITOR.replace('editor', {
        color: "red"
    });
</script>
@endsection