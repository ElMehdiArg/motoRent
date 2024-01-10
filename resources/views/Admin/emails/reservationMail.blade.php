<!DOCTYPE html>
<html>

<head>
    <title>RentMotorBike</title>

    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <h1>Reservation From : {{$data['c_email']}}</h1>

    <table>
        <thead>
            <tr>
                <th>Full name</th>
                <th>Phone</th>
                <th>From</th>
                <th>To</th>
                <th>pick up</th>
                <th>Drop off</th>
                <th>Number</th>
                <th>Moto</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$data['c_full_name']}}</td>
                <td>{{$data['c_phone']}}</td>
                <td>{{$data['date_debut']}}</td>
                <td>{{$data['date_fin']}}</td>
                <td>{{$data['pick_up_p']}}</td>
                <td>{{$data['drop_off_p']}}</td>
                <td>{{$data['number']}}</td>
                <td>{{$moto['marque']}} {{$moto['modèle']}}</td>
            </tr>
        </tbody>
    </table>
</body>

</html>