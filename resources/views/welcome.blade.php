<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Тестовая задача</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            /* color: #636b6f; */
            font-family: 'Nunito', sans-serif;
            /* font-weight: 500; */
            height: 100vh;
            margin: 50px;
            margin-right: 100px;
            margin-left: 100px;
        }

        .border {
            border: 1px solid rgba(0, 0, 0, .125)
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Фермочка для овечек</h3>
                <h5 class="ml-5">День 1</h5>
            </div>
            <div class="card-body d-flex border">
                <div class="col-6">
                    <h5>Овечка 1</h5>
                </div>
                <div class="col-6">
                    <h5>Овечка 2</h5>
                </div>
            </div>
            <div class="card-body d-flex border">
                <div class="col-6">
                    <h5>Овечка 3</h5>
                </div>
                <div class="col-6">
                    <h5>Овечка 4</h5>
                </div>
            </div>

        </div>
    </div>

</body>

</html>