<?php


class ControladorMovimientos{

	/*=============================================
	MOSTRAR MOVIMIENTO/S
	=============================================*/

	static public function ctrMostrarMovimientos($item, $valor){

		Util::js_console_log("ctrMostrarMovimientos");
		//Util::js_alert("ctrMostrarMovimientos");
		Util::escribe_log("ctrMostrarMovimientos");

		$order=null;

		$respuesta = ModeloMovimientos::mdlMostrarMovimientos($item, $valor, $order);

		return $respuesta;
	}

	/*=============================================
	CREAR MOVIMIENTO
	=============================================*/

	static public function ctrCrearMovimiento(){
		Util::js_console_log('ctrCrearMovimiento');
		//Util::js_console_log($_POST);
		//Util::js_alert($_POST["clasificacion"]);

		if(isset($_POST["fecha"])
			&& (isset($_POST["monto"]))
			&& (isset($_POST["descripcion"]))
			&& (isset($_POST["clasificacion"]))
			&& (isset($_POST["forma_pago"]) && $_POST["forma_pago"]>0)
			&& (isset($_POST["cuotas"]))
		){

			Util::js_console_log("ctrCrearMovimiento condición if OK");
			
			$datos = array("fecha" => $_POST["fecha"],
					"monto" => $_POST["monto"],
					"descripcion" => $_POST["descripcion"],
					"id_clasificacion" => $_POST["clasificacion"],
					"id_forma_pago" => $_POST["forma_pago"],
					"cuotas" => $_POST["cuotas"]);

			Util::escribe_log("ctrCrearMovimiento parametros: ".json_encode($_POST));
			
			$respuesta = ModeloMovimientos::mdlIngresarMovimiento($datos);

			if($respuesta == "ok"){

				Util::js_alert("Movimiento ingresado");
				/*echo'<script>

				swal({
					  type: "success",
					  title: "Movimiento ingresado",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

								window.location = "movimientos";

								}
							})

				</script>';*/

			}
		}else{
			
			//Util::js_alert("Algo salio mal.");
			if(!isset($_POST["fecha"]))
				Util::js_alert("falto POST fecha.");
			if(!isset($_POST["monto"]))
				Util::js_alert("falto POST monto.");
			if(!isset($_POST["descripcion"]))
				Util::js_alert("falto POST descripcion.");
			if(!isset($_POST["clasificacion"]))
				Util::js_alert("falto POST clasificacion.");
			if(!isset($_POST["forma_pago"]))
				Util::js_alert("falto POST forma_pago.");
			if(!isset($_POST["cuotas"]))
				Util::js_alert("falto POST cuotas.");


			if(isset($_POST["monto"]) && $_POST["monto"]==0)
				Util::js_alert("Debe ingresar monto.");

			/*if(!isset($_POST["tipo"]))
				Util::js_alert("no existe tipo.");*/

			if(isset($_POST["forma_pago"]) && $_POST["forma_pago"]==0)
				Util::js_alert("Debe seleccionar forma de pago.");

			if(isset($_POST["tipo"]) && ($_POST["tipo"]<1 || $_POST["tipo"]>3))
				Util::js_alert("Debe seleccionar un tipo movimiento valido.");

		}

	}

	/*=============================================
	EDITAR MOVIMIENTO
	=============================================*/


	
	/*=============================================
	BORRAR MOVIMIENTO
	=============================================*/

}
