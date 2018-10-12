<?php


class ControladorFormaPagos{

	/*=============================================
	MOSTRAR FORMA PAGO/S
	=============================================*/

	static public function ctrMostrarFormaPagos($item, $valor){

		Util::js_console_log("ctrMostrarFormaPagos");

		$respuesta = ModeloFormaPagos::mdlMostrarFormaPagos($item, $valor);

		return $respuesta;
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
