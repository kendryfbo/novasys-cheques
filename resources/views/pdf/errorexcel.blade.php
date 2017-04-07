<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ERROR</title>

        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <h2 class="alert alert-danger">Errores en el Archivo Excel</h3>
                <div class="alert alert-danger">
                    <ol type="1">
                        @foreach ($errores as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ol>
                </div>

            </div>
        </div>
    </body>
</html>
