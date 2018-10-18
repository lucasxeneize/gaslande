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

