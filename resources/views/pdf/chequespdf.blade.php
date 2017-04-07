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
                width: 660px;
                height: 250px;
                padding: 0px;
                margin: 0px;
            }
            .monto-1 {
                position:relative;
                top: -32px;
                left: 545px;
            }
            .fecha-1 {
                position: relative;
                left: 605px;
                top: -17px;
            }
            .monto-2 {
                position: relative;
                left: 30px;
                top: -24px;
            }
            .nombre-1 {
                position: relative;
                left: 270px;
                top: -50px;
            }
            .monto-letras {
                position:relative;
                top: -105px;
                left: 270px;
                width: 350px;
            }
            .fecha-2 {
                position: relative;
                left: 30px;
                top: -135px;
            }
            .nombre-2 {
                position: relative;
                width:150px;
                height:15px;
                left:30px;
                top: -120px;
                overflow: hidden;
            }
            .descripcion {
                position: relative;
                left:32px;
                top: -120px;
            }
            .portador {
                position: relative;
                left: 690px;
                top: -85px;
            }
            .orden-de {
                position: relative;
                left: 205px;
                top: -75px;
            }
            .cruzado {

            }
        </style>
    </head>
    <body>

        @foreach ($cheques as $cheque)
            <div class="contenedor">
                <p class="monto-1">{{$cheque['monto']}}</p>
                <pre class="fecha-1">{{$cheque['dia']}}          {{$cheque['mes']}}          {{$cheque['año']}}</pre>
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
