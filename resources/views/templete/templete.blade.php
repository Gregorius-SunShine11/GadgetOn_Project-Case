<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <style>
        .btn-polos{
            background:none;
            border:none;
            margin:0;
            padding:0;
        }

        body{
            overflow-x: hidden;
        }

        .btn-red{
            border: 2px solid #F40928;
            background: #F40928;
            color: white;
            font-weight: bold;
        }

        .btn-red:hover{
            background:white ;
            color: #F40928;
            border: 2px solid #F40928;
            font-weight: bold;
        }

        .btn-dark-blue{
            border: 2px solid #112138;
            background: #112138;
            color: white;
            font-weight: bold;
        }

        .btn-dark-blue:hover{
            background:white ;
            color: #112138;
            border: 2px solid #112138;
            font-weight: bold;
        }


        .btn-green{
            border: 2px solid #198754;
            background: #198754;
            color: white;
            font-weight: bold;
        }

        .btn-green:hover{
            border: 2px solid #198754;
            background: white;
            color: #198754;
            font-weight: bold;
        }



        .text-dark-blue{
            color: #112138;
        }

        .text-red{
            color: #F40928;
        }
    </style>

</head>
<body style="padding: 0%; background: #112138;">
    @include('templete.navbar')
    @yield('content')
</body>
</html>

