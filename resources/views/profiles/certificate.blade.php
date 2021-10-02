<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>vaccination certificate pdf</title>
    <style>
        .container {
            width: 600px;
            margin: auto;
        }
        table,tr,th,td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
        .img-2{
            position: absolute;
            right: 10;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="{{public_path('img/rwandaLogo.jpg')}}" width="120" height="120">
        <img src="{{public_path('img/rbcLogo.png')}}" class="img-2" width="250" height="100"><br><br>
        <h3 class="title"><u>Vaccination certificate</u></h3>
        <div>
                <strong>Firstname</strong><br>
                <small>{{ $citizen->firstname }}</small>
            </div><br>
            <div>
                <strong>Lastname</strong><br>
                <small>{{ $citizen->lastname }}</small>
            </div><br>
            <div>
                    <strong>Email</strong><br>
                    <small>{{ $citizen->email }}</small>
                </div><br>
            <div>
                <strong>Phone</strong><br>
                <small>{{ $citizen->phone }}</small>
            </div><br>
            <div>
                    <strong>Address</strong><br>
                    <small>{{ $citizen->city }} {{ $citizen->district }} {{ $citizen->sector }}</small>
                </div><br>
            {{-- <div>
                <strong>Vaccine</strong><br>
                <small>pfizer</small>
            </div><br> --}}
            <div>
                    <strong>Dose</strong><br>
                    <small>{{$citizen->dose}}</small>
                </div><br>
                <div>
                        <strong>Vaccination center</strong><br>
                        <small>{{ $citizen->appointment->healthCenter->name }}</small>
                    </div><br>
    </div>
</body>

</html>
