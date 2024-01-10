@extends('Admin.Admin_mp')
@section('content')
<div class="content-wrapper mt-5">
    <div class="content">
        <div class="container-fluid">
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Reservations</h3>
                        </div>
                        <div class="card-body">
                            @if(session()->has('Res-message'))
                            <div class="alert alert-success">
                                {{ session()->get('Res-message') }}
                            </div>
                            @endif
                            <form id="reserv_form" action="{{route('delete_reservation.post')}}" method="POST">
                                @csrf
                                <table id="reservation-table" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th><input class="master" type="checkbox" /></th>
                                            <th>Full name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>pick up</th>
                                            <th>Drop off</th>
                                            <th>Number</th>
                                            <th>Moto</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($reservations as $reservation)
                                        <tr>
                                            <td><input class="sub_chk" type="checkbox" value="{{$reservation->id_res}}" /></td>
                                            <td>{{$reservation->c_full_name}}</td>
                                            <td>{{$reservation->c_phone}}</td>
                                            <td>{{$reservation->c_email}}</td>
                                            <td>{{$reservation->date_debut}}</td>
                                            <td>{{$reservation->date_fin}}</td>
                                            <td>{{$reservation->pick_up}}</td>
                                            <td>{{$reservation->drop_off}}</td>
                                            <td>{{$reservation->number}}</td>
                                            <td>{{$reservation->marque}} {{$reservation->modèle}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
                <!--messages-->
                <!-- <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Messages</h3>
                        </div>
                        <div class="card-body">
                            @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                            @endif
                            <form id="message_form" action="{{route('delete_message.post')}}" method="POST">
                                @csrf
                                <table id="messages-table" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th><input class="master" type="checkbox" /></th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th style="width: 700px;">Message</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($messages as $message)
                                        <tr>
                                            <th><input class="sub_chk" type="checkbox" name="delete[]" value="{{$message->id_message}}" /></th>
                                            <td><a href="#" data-toggle="modal" data-message="{{$message->message_txt}}" data-target="#messageModalLong">{{$message->fullName}}</a></td>
                                            <td id="mail">{{$message->email}}</td>
                                            <td>
                                                <p class="contact-message">{{$message->message_txt}}</p>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="messageModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Message Text</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(function() {
        $(".alert-success").slideDown(300).delay(4000).slideUp(300);


        var rTable = $("#reservation-table").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
             stateSave: true,
            "buttons": [{
                "text": '<i class="fa-solid fa-trash"></i>',
                "className": "delete_all"
            }],
            'columnDefs': [{
                'targets': 0,
                'searchable': false,
                'orderable': false,
            }],
        });
        rTable.buttons().container().appendTo('#reservation-table_wrapper .col-md-6:eq(0)');

        $("#reservation-table .master").on('click', function() {
            if ($(this).is(':checked', true)) {
                rTable.$('input[type="checkbox"]').attr('checked', true);
            } else {
                rTable.$('input[type="checkbox"]').attr('checked', false);
            }
        });


        $('#reserv_form .delete_all').on('click', function() {
            rTable.$('input[type="checkbox"]').each(function() {
                if (this.checked) {
                    $("#reserv_form").append(
                        $('<input>')
                        .attr('type', 'hidden')
                        .attr('name', 'delete[]')
                        .val(this.value)
                    );
                }
            });
            $('#reserv_form').submit();
        });




        $("#messages-table").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": [{
                "text": '<i class="fa-solid fa-trash"></i>',
                "className": "delete_all"
            }, ]
        }).buttons().container().appendTo('#messages-table_wrapper .col-md-6:eq(0)');



        $('#messages-table_wrapper .delete_all').on('click', function(e) {
            $("#message_form").submit();
        });



        $('#messageModalLong').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var data = button.data('message');
            var modal = $(this);

            modal.find('.modal-body').text(data);

        });
    });
</script>


@endsection