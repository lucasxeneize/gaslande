<?php

require_once "conexion.php";

class ModeloClases{

	/*=============================================
	MOSTRAR CLASES
	=============================================*/

	static public function mdlMostrarClases($item, $valor, $order){

		return Conexion::query("clasificaciones", $item, $valor, $order);

	}

	/*=============================================
	CREAR CLASES
	=============================================*/


	/*=============================================
	EDITAR CLASES
	=============================================*/

	
	/*=============================================
	BORRAR CLASES
	=============================================*/


}

