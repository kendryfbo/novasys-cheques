<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use PDF;
use App\models\Cheque;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function chequesPdf(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $data = Cheque::excelToCheques($file);

            if (isset($data['error'])) {
                return view('pdf.errorexcel', ['errores' => $data['msgErrores']]);
            } else {
                $pdf = PDF::Loadview('pdf.formato2', ['cheques' => $data]);
                return $pdf->stream();
            }
        } else {
            dd("No has cargado ningun Archivo.");
        }
    }

    public function downloadDemo()
    {
        //dd("Descargando demo");
        return response()->download(public_path('/excel/file.xlsx'));
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
