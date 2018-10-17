<?php


class ControladorClasificaciones{

	/*=============================================
	MOSTRAR CLASE/S
	=============================================*/

	static public function ctrMostrarClasificaciones($item, $valor){

		Util::js_console_log("ctrMostrarClasificaciones");
		$order="ingreso_egreso,fijo_variable,nombre";

		$respuesta = ModeloClasificaciones::mdlMostrarClasificaciones($item, $valor, $order);

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
