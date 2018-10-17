<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/util.controlador.php";
require_once "controladores/movimientos.controlador.php";
require_once "controladores/forma_pagos.controlador.php";
require_once "controladores/clases.controlador.php";
require_once "controladores/clasificaciones.controlador.php";

require_once "modelos/movimientos.modelo.php";
require_once "modelos/forma_pagos.modelo.php";
require_once "modelos/clases.modelo.php";
require_once "modelos/clasificaciones.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();