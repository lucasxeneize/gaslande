<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=gaslande",
			            "root",
			            "");

		$link->exec("set names utf8");

		return $link;

	}

	// QUERY GENERICA
	static public function query($tabla, $item, $valor, $order){

		if($order != null)
			$order="ORDER BY ".$order;
		else
			$order="";

		//Util::js_console_log("conectar::query".$order);

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item $order");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla $order");
		
			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}

	// QUERY GENERICA 2
	static public function query_2($query){

		Util::js_console_log("conectar::query_2".$query);

		$stmt = Conexion::conectar()->prepare("$query");
		
		//$stmt = Conexion::conectar()->prepare("SELECT SUM(m.monto) AS monto,c.ingreso_egreso FROM movimientos m, clasificaciones c WHERE YEAR(m.fecha) = 2018 AND MONTH(m.fecha) = 10 AND c.id=m.id_clasificacion GROUP BY c.ingreso_egreso");


		
		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

		$stmt = null;

	}

}