<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Citizens report pdf</title>
    <style>
        .container {
            width: 800px;
            margin: auto;
        }
        table,tr,th,td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
        img{
            display: block;
            margin: auto;
        }
        .text-center{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
            <img src="{{public_path('img/rwandaLogo.jpg')}}" width="200" height="200">
            <br><br>
            <h2 class="text-center"><u>Republic of Rwanda</u></h2>
            <h3 class="text-center"><u>Ministry of health</u></h3>
            <br><br>
            <h3><u>General report of vaccinated people on {{session('date')}}</u></h3>
            <div>
                <p>
                    <b>Total of people vaccinated : </b>{{$citizens->count()}}</p>
                <p>
                <b>Dose: </b>{{session('dose')}}</p>
            </div>
        </div>
</body>

</html>
