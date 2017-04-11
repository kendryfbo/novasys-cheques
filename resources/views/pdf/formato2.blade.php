<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Formato Cheques</title>

        <style media="screen">

            @page {
                margin-bottom: 0px;
                margin-right: 0px;
                margin-top: 42px;
            }
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
                height: 200px;
                padding: 0px;
                margin-bottom: 52px;
                border: 0px;
            }
            .contenedor-2 {
                position: relative;
                width: 750px;
                height: 150px;
                padding: 0px;
                border: 0px;
            }
            .monto-1 {
                position:absolute;
                top: -33px;
                left: 550px;
            }
            .ciudad {
                position: absolute;
                left: 520px;
                top: -5px;
            }
            .fecha-1 {
                position: absolute;
                left: 590px;
                top: -5px;
            }
            .monto-2 {
                position: absolute;
                left: 5px;
                top: 30px;
            }
            .nombre-1 {
                position:absolute;
                left: 260px;
                top: 25px;
            }
            .monto-letras {
                position:absolute;
                top: 50px;
                left: 260px;
                width: 350px;
            }
            .fecha-2 {
                position: absolute;
                left: 5px;
                top: 70px;
            }
            .nombre-2 {
                position: absolute;
                width:150px;
                height:15px;
                left:5px;
                top: 105px;
                overflow: hidden;
            }
            .descripcion {
                position: absolute;
                left:5px;
                top: 140px;
                width: 150px;
                height: 50px;
                overflow: hidden;
            }
            .portador {
                position: absolute;
                left: 675px;
                top: 26px;
            }
            .orden-de {
                position: absolute;
                left: 185px;
                top: 22px;
            }
            .cruzado {
                content:"";
                position:absolute;
                top: 50px;
                left:150px;
                border-top:2px solid black;
                width:220px;
                transform: rotate(-80deg);
            }
            .cruzado-2 {
                content:"";
                position:absolute;
                top: 50px;
                left:130px;
                border-top:2px solid black;
                width:220px;
                transform: rotate(-80deg);
            }
        </style>
    </head>
    <body>

        @foreach ($cheques as $cheque)
            @if ($loop->last)
                <div class="contenedor-2">
            @else
                <div class="contenedor">
            @endif
                    <p class="monto-1">{{$cheque['monto'].'  .-------'}}</p>
                    <p class="ciudad">STGO</p>
                    <pre class="fecha-1">{{$cheque['dia']}}         {{$cheque['mes']}}           {{$cheque['año']}}</pre>
                    <p class="monto-2">{{$cheque['monto']}}</p>
                    <p class="nombre-1">{{$cheque['nombre']}}</p>
                @if ($cheque['tipo'] == 3 ||$cheque['tipo'] == 4)
                    <p class="orden-de">_________</p>
                @endif
                @if ($cheque['tipo'] == 1 ||$cheque['tipo'] == 3 ||$cheque['tipo'] == 4)
                    <p class="portador">_________</p>
                @endif
                    <p class="monto-letras">{{$cheque['montoLetras']}}</p>
                    <p class="fecha-2">{{$cheque['fecha']}}</p>
                    <p class="nombre-2">{{$cheque['nombre']}}</p>
                    <p class="descripcion">{{$cheque['descripcion']}}</p>
                @if ($cheque['tipo'] == 4)
                    <div class="cruzado"></div>
                    <div class="cruzado-2"></div>
                @endif
                </div>

        @endforeach
    </body>
</html>
