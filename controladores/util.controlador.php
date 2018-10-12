<?php

/*
FORMA DE USO EN .php
	
	Util::js_console_log("ctrMostrarFormaPagos");
	
	Util::js_alert("ctrMostrarMovimientos");
*/


class Util{

	static function js_console_log($var){
	  echo '<script>console.log("'.$var.'")</script>';

	  //echo "función console_log";
	}

	static function js_alert($var){
	  echo '<script>alert("'.$var.'")</script>';
	}

	static function escribe_log($data){
		$fecha = date('Ymd', time());
		$hora = date('H', time());
		$file = fopen("logs/log" . "_" . $fecha . "_" . $hora . ".log", "a+");
		fwrite($file, " " . PHP_EOL);
		fwrite($file, " " . PHP_EOL);
		fwrite($file, "[" . date('m/d/Y h:i:s a', time()) . "][INFO]         " . $data . " " . PHP_EOL);
	}
}

?>
