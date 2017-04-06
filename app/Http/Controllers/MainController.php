<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use NumeroALetras;
use Illuminate\Support\Facades\Input;
use Excel;
class MainController extends Controller
{
    function index(){
      return view('index');
    }

    function chequesPdf(Request $request){


      if ($request->hasFile('file')){
        $file = $request->file('file');
        Excel::load($file, function($reader){
          $archivo = $reader->get();
          dd($archivo->first());
        });
      } else {
        dd("Don`t have File");
      }


    }
/*
    function parseExcel() {
      Excel::load('excel/file.xls', function($reader){

        $file = $reader->get();
        dd($file->all());

      }
    }
*/
}
