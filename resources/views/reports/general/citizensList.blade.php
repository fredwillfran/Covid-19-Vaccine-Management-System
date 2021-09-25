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
    <div class="container">
        <h3 class="title"><u>General report of vaccinated people on {{session('date')}}</u></h3>
        <div>
            <p>
                <b>Total of people vaccinated today: </b>{{$citizens->count()}}</p>
            <p>
                    <b>Dose: </b>{{session('dose')}}</p>
        </div>
    </div>
</body>

</html>
