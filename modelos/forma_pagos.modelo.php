<?php

require_once "conexion.php";

class ModeloFormaPagos{

	/*=============================================
	MOSTRAR FORMA PAGO/S
	=============================================*/

	static public function mdlMostrarFormaPagos($item, $valor){

		return Conexion::query("forma_pago", $item, $valor);

	}

	/*=============================================
	CREAR FORMA PAGO
	=============================================*/


	/*=============================================
	EDITAR FORMA PAGO
	=============================================*/

	
	/*=============================================
	BORRAR FORMA PAGO
	=============================================*/


}

