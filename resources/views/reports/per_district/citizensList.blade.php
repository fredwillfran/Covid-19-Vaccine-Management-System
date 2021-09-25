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
        <h3 class="title"><u>People that have taken dose {{session('dose')}} of vaccination in {{session('district')}} district</u></h3>
        <table>
            <thead>
                <tr>
                        <th class="text-center">Firstname</th>
                        <th class="text-center">Lastname</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Phone</th>
                        <th class="text-center">District</th>
                        <th class="text-center">Dose</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($citizens as $citizen)
                    <tr>
                            <td>{{ $citizen->firstname }}</td>
                            <td>{{ $citizen->lastname }}</td>
                            <td>{{ $citizen->email }}</td>
                            <td>{{ $citizen->phone }}</td>
                            <td>{{ $citizen->district }}</td>
                            <td>{{ $citizen->dose }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr style="display: none">
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
    </div>
</body>

</html>
