<?php

require_once "conexion.php";

class ModeloClasificaciones{

	/*=============================================
	MOSTRAR CLASIFICACIONES
	=============================================*/

	static public function mdlMostrarClasificaciones($item, $valor, $order){

		return Conexion::query("clasificaciones", $item, $valor, $order);

	}

	/*=============================================
	CREAR CLASIFICACIONES
	=============================================*/


	/*=============================================
	EDITAR CLASIFICACIONES
	=============================================*/

	
	/*=============================================
	BORRAR CLASIFICACIONES
	=============================================*/


}

