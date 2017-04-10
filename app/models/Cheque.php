<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Excel;
use NumeroALetras;
class Cheque extends Model
{
    private static $error = false;
    private static $msgErrores;

    static function excelToCheques($file) {

      $archivo = Excel::load($file);
      $lista = $archivo->get()->first()->toArray();

      // contador de filas
      $fila = 0;
      // Dar Formato a los Valores de el archivo Excel
      foreach ($lista as $key => $value) {
          $fila += 1;
          $tipo = $value['tipo'];
          $dia = $value['fecha']->day;
          $mes = $value['fecha']->month;
          $año = $value['fecha']->year;
          $fecha = $value['fecha']->format('d/m/Y');
          $letras = NumeroALetras::convertir($value['monto']);

          $lista[$key]['monto'] = number_format($value['monto'],0,',','.');
          $lista[$key]['montoLetras'] = $letras;
          $lista[$key]['dia'] = $dia;
          $lista[$key]['mes'] = $mes;
          $lista[$key]['año'] = $año;
          $lista[$key]['fecha'] = $fecha;
          $lista[$key]['tipo'] = $tipo;
          $lista[$key]['fila'] = $fila;

          self::validarLista($lista[$key]);
      }

      if (self::$error) {
          $lista['error'] = true;
          $lista['msgErrores'] = self::$msgErrores;
      }
      //dd($lista);
      return $lista;
    }

    // Valida que el archivo Excel contiene todos los datos Necesarios
    private static function validarLista($datos) {
        if (!isset($datos['nombre'])) {
            self::$error = true;
            self::$msgErrores[] = 'ERROR Fila #'.$datos['fila'].' = Columna Nombre';
        }
        if (!isset($datos['fecha'])) {
            self::$error = true;
            self::$msgErrores[] = 'ERROR Fila #'.$datos['fila'].' columna fecha';
        }
        if (!isset($datos['monto'])) {
            self::$error = true;
            self::$msgErrores[] = 'ERROR Fila #'.$datos['fila'].' columna monto';
        }
        if (!isset($datos['descripcion'])) {
            self::$error = true;
            self::$msgErrores[] = 'ERROR Fila #'.$datos['fila'].' columna descripcion';
        }
        if (!isset($datos['tipo'])) {
            self::$error = true;
            self::$msgErrores[] = 'ERROR Fila #'.$datos['fila'].' columna tipo';
        }
        if (!isset($datos['montoLetras'])) {
            self::$error = true;
            self::$msgErrores[] = 'ERROR Fila #'.$datos['fila'].' columna montoLetras';
        }
        if (!isset($datos['dia'])) {
            self::$error = true;
            self::$msgErrores[] = 'ERROR Fila #'.$datos['fila'].' columna dia';
        }
        if (!isset($datos['mes'])) {
            self::$error = true;
            self::$msgErrores[] = 'ERROR Fila #'.$datos['fila'].' columna mes';
        }
        if (!isset($datos['año'])) {
            self::$error = true;
            self::$msgErrores[] = 'ERROR Fila #'.$datos['fila'].' columna año';
        }
        if (!isset($datos['tipo']) || $datos['tipo'] < 1 || $datos['tipo'] > 4) {
            self::$error = true;
            self::$msgErrores[] = 'ERROR Fila #'.$datos['fila'].' columna Tipo';
        }
    }

}
