@extends('Admin.Admin_mp')
@section('content')
<div class="content-wrapper mt-5">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tours</h3>
                        </div>
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

                            @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                            @endif
                            <form id="delete_form" action="{{route('delete_tours.post')}}" method="POST">
                                @csrf
                                <table id="tours-table" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Select</th>
                                            <th>Tour Title</th>
                                            <th>Update</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($circuits as $circuit)
                                        <tr>
                                            <th><input type="checkbox" name="delete[]" value="{{$circuit->id_circ}}" /></th>
                                            <td>{{$circuit->titre}}</td>
                                            <td>
                                                @php $circuit_id= Crypt::encrypt($circuit->id_circ); @endphp
                                                <a href="/update_tour/{{$circuit_id}}" class="tm-product-update-link">
                                                    <i class="fa-solid fa-pen-to-square tm-product-update-icon"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                        </div>
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-center">
                                <a href="/add_tour" class="btn btn-primary btn-block text-uppercase mb-1">Add new tour</a>
                            </div>

                            <div class="col-md-12 d-flex justify-content-center">
                                <button class="btn btn-primary btn-block text-uppercase mb-2">
                                    Delete selected Tours
                                </button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function() {
        $("#tours-table").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#reservation-table_wrapper .col-md-6:eq(0)');
    });
</script>
@endsection