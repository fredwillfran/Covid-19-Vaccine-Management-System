<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Citizens report pdf</title>
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
    {{-- <div class="container">
        <h3 class="title"><u>General report of vaccinated people on {{session('date')}}</u></h3>
        <div>
            <p>
                <b>Total of people vaccinated today: </b>{{$citizens->count()}}</p>
            <p>
                    <b>Dose: </b>{{session('dose')}}</p>
        </div>
    </div> --}}

    <div class="container">
            <img src="http://localhost:8000/img/rwandaLogo.jpg" alt="" width="100" height="100">
            <img src="http://localhost:8000/img/rbcLogo.png" alt="" width="250" height="100">
            <h3 class="title"><u>General report of vaccinated people on 39 dec 2021</u></h3>
            <div>
                <p>
                    <b>Total of people vaccinated today: </b>400000</p>
                <p>
                        <b>Dose: </b>2</p>
            </div>
        </div>
</body>

</html>
