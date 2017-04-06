<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mi PDF</title>

    <style media="screen">

      .portador {
        position: absolute;
        right: 50px;
        top: 50px;
      }
    </style>
  </head>
  <body>
    @foreach ($datos as $dato)
      <h1 class="portador">{{ $dato }}</h1>
    @endforeach
  </body>
</html>
