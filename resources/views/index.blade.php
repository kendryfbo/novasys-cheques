@extends('layouts.master')


@section('title','Importar Excel')


@section('content')
  <div class="container">
    <br>
    <form class="jumbotron" action="{{ action('MainController@chequesPdf') }}" method="post" enctype="multipart/form-data">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="input-group input-group-lg">
        <span class="input-group-addon" id="sizing-addon1">Importar Archivo Excel</span>
        <input class="form-control" type="file" name="file" value="" multiple>
      </div>
      <br>
      <div class="input-group input-group-lg">
        <input class="form-control btn btn-primary" type="submit" name="submit" value="Generar Cheques">
      </div>
    </form>
  </div>
@endsection
