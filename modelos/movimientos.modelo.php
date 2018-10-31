<?php

require_once "conexion.php";

class ModeloMovimientos{

	/*=============================================
	MOSTRAR MOVIMIENTO/S
	=============================================*/

	static public function mdlMostrarMovimientos($item, $valor, $order){

		return Conexion::query("movimientos", $item, $valor, $order);

	}

	/*=============================================
	MOSTRAR MOVIMIENTOS POR MES
	=============================================*/

	static public function mdlMostrarMovimientosPorMes($mes, $anio){

		$query="SELECT SUM(m.monto) AS monto,c.ingreso_egreso FROM movimientos m, clasificaciones c WHERE YEAR(m.fecha) = ".date("Y")." AND MONTH(m.fecha) = ".date("m")." AND c.id=m.id_clasificacion GROUP BY c.ingreso_egreso";

		//$query="SET @numero=0;";

		//$query=$query."SELECT  (@numero:= @numero+1) AS cont, SUM(m.monto) AS monto,c.ingreso_egreso FROM movimientos m, clasificaciones c WHERE YEAR(m.fecha) = ".date("Y")." AND MONTH(m.fecha) = ".date("m")." AND c.id=m.id_clasificacion GROUP BY c.ingreso_egreso";

		//Util::js_console_log("mdlMostrarMovimientosPorMes query>>".$query);

		return Conexion::query_2($query); 
	}

	/*=============================================
	CREAR MOVIMIENTO
	=============================================*/

	static public function mdlIngresarMovimiento($datos){

		Util::js_console_log('mdlIngresarMovimiento');

		$stmt = Conexion::conectar()->prepare("INSERT INTO movimientos(id, fecha, monto, descripcion, id_clasificacion, id_forma_pago, cuotas) VALUES (NULL, :fecha, :monto, :descripcion, :id_clasificacion, :id_forma_pago, :cuotas)");

		$stmt->bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);
		$stmt->bindParam(":monto", $datos["monto"], PDO::PARAM_STR);
		$stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
		$stmt->bindParam(":id_clasificacion", $datos["id_clasificacion"], PDO::PARAM_STR);
		$stmt->bindParam(":id_forma_pago", $datos["id_forma_pago"], PDO::PARAM_STR);
		$stmt->bindParam(":cuotas", $datos["cuotas"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	EDITAR MOVIMIENTO
	=============================================*/

	
	/*=============================================
	BORRAR MOVIMIENTO
	=============================================*/


}

