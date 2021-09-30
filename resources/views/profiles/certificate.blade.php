<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>vaccination certificate pdf</title>
    <style>
        .container {
            width: 1200px;
            margin: auto;
        }
        table,
        tr,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
        .title {
            /* text-align: center; */
        }
    </style>
</head>
<body>
    <div class="container">
            <img src="http://localhost:8000/img/rwandaLogo.jpg" alt="" width="100" height="100">
            <img src="http://localhost:8000/img/rbcLogo.png" alt="" width="250" height="100">
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
    </div>
</body>

</html>
