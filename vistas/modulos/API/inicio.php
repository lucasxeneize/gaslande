<?php 

require_once "../../../controladores/util.controlador.php";
require_once "../../../controladores/movimientos.controlador.php";
require_once "../../../modelos/movimientos.modelo.php";


 $anio = 2018;
  $mes = 10;
  $formato = "json";

  $obj = ControladorMovimientos::ctrMostrarMovimientosPorMes($anio,$mes,$formato);

  if ($formato=="json")
  {
    json_encode($obj);
  }


  //echo "API/inicio.php";
?>


