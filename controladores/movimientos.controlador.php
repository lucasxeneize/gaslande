<?php


class ControladorMovimientos{

	/*=============================================
	MOSTRAR MOVIMIENTO/S
	=============================================*/

	static public function ctrMostrarMovimientos($item, $valor){

		Util::js_console_log("ctrMostrarMovimientos");
		//Util::js_alert("ctrMostrarMovimientos");

		$respuesta = ModeloMovimientos::mdlMostrarMovimientos($item, $valor);

		return $respuesta;
	}

	/*=============================================
	CREAR MOVIMIENTO
	=============================================*/

	static public function ctrCrearMovimiento(){
		Util::js_console_log('ctrCrearMovimiento');

		if(isset($_POST["fecha"])
			&& (isset($_POST["monto"]))
			&& (isset($_POST["descripcion"]))
			&& (isset($_POST["forma_pago"]) && $_POST["forma_pago"]>0)
		){

			Util::js_console_log("ctrCrearMovimiento condición if OK");
			
			$datos = array("fecha" => $_POST["fecha"],
					"monto" => $_POST["monto"],
					"descripcion" => $_POST["descripcion"],
					"id_forma_pago" => $_POST["forma_pago"]);

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
			if(isset($_POST["forma_pago"]) && $_POST["forma_pago"]==0)
				Util::js_alert("Debe seleccionar forma de pago.");
		}

	}

	/*=============================================
	EDITAR MOVIMIENTO
	=============================================*/


	
	/*=============================================
	BORRAR MOVIMIENTO
	=============================================*/

}
