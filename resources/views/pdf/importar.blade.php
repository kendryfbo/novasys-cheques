<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Upload</title>
  </head>
  <body>
    <form class="" action="{{ url('/importarexcel') }}" method="post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <label for="">Cargue el archivo</label>
      <input type="file" name="file" value="">
      <input style="width:100px;" type="submit" name="Importar" value="Importar">
    </form>
  </body>
</html>
