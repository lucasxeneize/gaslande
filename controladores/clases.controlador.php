<?php


class ControladorClases{

	/*=============================================
	MOSTRAR CLASE/S
	=============================================*/

	static public function ctrMostrarClases($item, $valor){

		Util::js_console_log("ctrMostrarClases");
		$order="nombre";

		$respuesta = ModeloClases::mdlMostrarClases($item, $valor, $order);

		return $respuesta;
	}

	/*=============================================
	CREAR CLASE
	=============================================*/


	/*=============================================
	EDITAR CLASE
	=============================================*/


	
	/*=============================================
	BORRAR CLASE
	=============================================*/

}
