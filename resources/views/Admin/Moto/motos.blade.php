@extends('Admin.Admin_mp')
@section('content')
<div class="content-wrapper mt-5">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Motos</h3>
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
                            <form id="motos_form" action="{{route('delete_motos.post')}}" method="POST">
                                @csrf
                                <table id="motos-table" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Select</th>
                                            <th>Manufacturer</th>
                                            <th>Model</th>
                                            <th>Update</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($motos as $moto)
                                        <tr>
                                            <th><input type="checkbox" name="delete[]" value="{{$moto->id_moto}}" /></th>
                                            <td>{{$moto->marque}}</td>
                                            <td>{{$moto->modèle}}</td>
                                            <td>
                                                @php $moto_id= Crypt::encrypt($moto->id_moto); @endphp
                                                <a href="/update_moto/{{$moto_id}}" class="tm-product-update-link">
                                                    <i class="fa-solid fa-pen-to-square tm-product-update-icon"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </form>
                        </div>
                        <!-- <div class="row ">
                            <div class="col-md-12 d-flex justify-content-center">
                                <a href="/add_moto" class="btn btn-primary btn-block text-uppercase mb-1">Add new Moto</a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function() {
        $("#motos-table").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": [{
                    "text": '<i class="fa-solid fa-plus"></i>',
                    "action": function(e, dt, node, config) {
                        window.location.href = '/add_moto';
                    }
                },
                {
                    "text": '<i class="fa-solid fa-trash"></i>',
                    "className": "delete_all"
                },
            ]
        }).buttons().container().appendTo('#motos-table_wrapper .col-md-6:eq(0)');

        $('#motos-table_wrapper .delete_all').on('click', function(e) {
            $("#motos_form").submit();
        });
    });
</script>

</div>
</div>

@endsection