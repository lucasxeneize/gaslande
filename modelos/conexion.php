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

}