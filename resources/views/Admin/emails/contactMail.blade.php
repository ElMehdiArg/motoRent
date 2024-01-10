<!DOCTYPE html>
<html>
<head>
    <title>RentMotorBikes</title>
</head>
<body>
    <h1>Email From : {{$data['email']}}</h1>
    <h3>Contact Name : {{ $data['name'] }}</h3>
    <p>Hi RentMotorBikes</p>
    <p>{{ $data['message'] }}</p>
   
</body>
</html>
