<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Formato Cheques</title>

        <style media="screen">
            body {
                font-family: sans-serif;
                font-size: 12px;
                margin: 0px;
                padding: 0px;
                border: 0px;
            }

            pre {
                font-family: sans-serif;
                font-size: 12px;
            }
            .contenedor {
                position: relative;
                width: 750px;
                height: 210,5px;
                padding: 0px;
                margin: 0px;
                border: 0px;
            }
            .monto-1 {
                position:absolute;
                top: -30px;
                left: 580px;
            }
            .fecha-1 {
                position: absolute;
                left: 601px;
                top: -17px;
            }
            .monto-2 {
                position: absolute;
                left: 30px;
                top: 0px;
            }
            .nombre-1 {
                position:absolute;
                left: 270px;
                top: 0px;
            }
            .monto-letras {
                position:absolute;
                top: 20px;
                left: 270px;
                width: 350px;
            }
            .fecha-2 {
                position: absolute;
                left: 30px;
                top: 20px;
            }
            .nombre-2 {
                position: absolute;
                width:150px;
                height:15px;
                left:30px;
                top: 40px;
                overflow: hidden;
            }
            .descripcion {
                position: absolute;
                left:32px;
                top: 60px;
            }
            .portador {
                position: absolute;
                left: 690px;
                top: 0px;
            }
            .orden-de {
                position: absolute;
                left: 205px;
                top: 0px;
            }
            .cruzado {

            }
        </style>
    </head>
    <body>

        @foreach ($cheques as $cheque)
            <div class="contenedor">
                <p class="monto-1">{{$cheque['monto']}}</p>
                <pre class="fecha-1">{{$cheque['dia']}}         {{$cheque['mes']}}           {{$cheque['año']}}</pre>
                <p class="monto-2">{{$cheque['monto']}}</p>
                <p class="nombre-1">{{$cheque['nombre']}}</p>
                <p class="orden-de">--------------</p>
                <p class="portador">--------------</p>
                <p class="monto-letras">{{$cheque['montoLetras']}}</p>
                <p class="fecha-2">{{$cheque['fecha']}}</p>
                <p class="nombre-2">{{$cheque['nombre']}}</p>
                <p class="descripcion">{{$cheque['descripcion']}}</p>
            </div>
        @endforeach
    </body>
</html>
