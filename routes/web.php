<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','MainController@index');

Route::post('cheques', 'MainController@chequesPdf');

Route::get('pdf', function(){

  Excel::load('excel/file.xls', function($reader){

    $file = $reader->get();
    dd($file->all());
  });

  $datos = ['info' => 'my info','info2' => 'my info 2'];
  //$pdf = PDF::loadView('pdf.testpdf', ['datos' => $datos]);
  $pdf = PDF::loadView('pdf.testpdf', ['datos' => $datos])->setPaper('a4','portraid');

  return $pdf->stream();
});

Route::get('importar', function() {
  return view('pdf.importar');
});

Route::post('importarexcel', function(){

});
