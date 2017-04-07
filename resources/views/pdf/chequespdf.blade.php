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

            pre {
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
                top: -30px;
                left: 500px;
            }
            .fecha-1 {
                position: relative;
                left: 580px;
                top: -17px;
            }
            .monto-2 {
                position: relative;
                left: 30px;
                top: -25px;
            }
            .nombre-1 {
                position: relative;
                left: 270px;
                top: -50px;
            }
            .monto-letras {
                position:relative;
                top: -45px;
                left: 270px;
                width: 350px;
            }
            .fecha-2 {
                position: relative;
                left: 30px;
                top: -70px;
            }
            .nombre-2 {
                position: relative;
                width:150px;
                height:15px;
                left:30px;
                top: -60px;
                overflow: hidden;
            }
            .descripcion {
                position: relative;
                left:30px;
                top: -55px;
            }
        </style>
    </head>
    <body>

        @foreach ($cheques as $cheque)
            <div class="contenedor">
                <p class="monto-1">{{$cheque['monto']}}</p>
                <pre class="fecha-1">{{$cheque['dia']}}    {{$cheque['mes']}}    {{$cheque['año']}}</pre>
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
