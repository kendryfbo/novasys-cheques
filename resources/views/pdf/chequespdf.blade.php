<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Formato Cheques</title>

        <style media="screen">
            body {
                font-family: sans-serif;
                font-size: 12px;
            }

            .contenedor {
                display:block;
                width: 700px;
                height: 250px;
                padding: 0px;
                margin: 0px;
            }
            .monto-1 {
                position:relative;
                top: -28px;
                left: 500px;
            }
            .fecha-1 {
                position: relative;
                left: 550px;
                top: -15px;
            }
            .monto-2 {
                position: relative;
                left: 100px;
                top: -20px;
            }
            .nombre-1 {
                position: relative;
                left: 260px;
                top: -35px;
            }
            .monto-letras {
                position:relative;
                top: -40px;
                left: 250px;
                width: 300px;
            }
            .fecha-2 {
                position: relative;
                left: 100px;
                top: -10px;
            }
            .nombre-2 {
                position: relative;
                left:100px;
                top: -10px;
            }
            .descripcion {
                position: relative;
                left:100px;
                top: -20px;
            }
        </style>
    </head>
    <body>

        @foreach ($cheques as $cheque)
            <div class="contenedor">
                <p class="monto-1">{{$cheque['monto']}}</p>
                <p class="fecha-1">{{$cheque['dia']}} {{$cheque['mes']}} {{$cheque['año']}}</p>
                <p class="monto-2">{{$cheque['monto']}}</p>
                <p class="nombre-1">{{$cheque['nombre']}}</p>
                <p class="monto-letras">{{$cheque['montoLetras']}}</p>
                <p class="fecha-2">{{$cheque['fecha']}}</p>
                <p class="nombre-2">{{$cheque['nombre']}}</p>
                <p class="descripcion">{{$cheque['descripcion']}}</p>
            </div>


        @endforeach
    </body>
</html>
