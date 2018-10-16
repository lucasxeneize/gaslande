
<form method="post">
	
	<!-- FECHA -->
	<div class="form-group row">

		<label for="datFecha" class="col-sm-2 col-form-label">Fecha</label>

		<div class="col-sm-3">

			<input type="date" class="form-control" id="fecha" name="fecha" value="">

		</div>

	</div>

  <div class="form-group row">

    <!-- ENTRADA PARA SELECCIONAR INGRESO/EGRESO -->
    <label for="tipo" class="col-sm-2 col-form-label">Tipo movimiento</label>

    <div class="col-sm-3">
      <select class="form-control" name="tipo">
          
          <option value="0">Selecionar tipo</option>

          <option value="1">INGRESO</option>

          <option value="2">EGRESO</option>

        </select>

      </div>

    <!-- ENTRADA PARA SELECCIONAR FORMA PAGO -->
    <label for="clase" class="col-sm-2 col-form-label">Clasificación</label>

    <div class="col-sm-5">
      <select class="form-control" name="clase" id="clase" onchange="">
          
          <option value="">Selecionar clasificación</option>

         <?php

          $item = null;
          $valor = null;

          $obj = ControladorClases::ctrMostrarClases($item, $valor);


          foreach ($obj as $key => $value) {
           
            echo '<option value="'.$value["id"].'">'.$value["nombre"].'</option>';

          }

        ?>
        
        </select>

    </div>


  </div>

	<!-- DESCRIPCION -->
	<div class="form-group row">

		<label for="inpMonto" class="col-sm-2 col-form-label">Descripción</label>

		<div class="col-sm-10">

  			<input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción">

		</div>

	</div>

  <!-- ENTRADA PARA SELECCIONAR FORMA PAGO -->
  <div class="form-group row">

    <label for="forma_pago" class="col-sm-2 col-form-label">Forma Pago</label>

    <div class="col-sm-5">
      <select class="form-control" name="forma_pago" id="forma_pago" onchange="mostrarCuotas()">
          
          <option value="">Selecionar forma pago</option>

         <?php

          $item = null;
          $valor = null;

          $obj = ControladorFormaPagos::ctrMostrarFormaPagos($item, $valor);


          foreach ($obj as $key => $value) {
           
            echo '<option value="'.$value["id"].'">'.$value["nombre"].'</option>';

          }

        ?>
        
        </select>

    </div>

   <!-- MONTO -->
    <label for="inpMonto" class="col-sm-1 col-form-label">Monto</label>

    <div class="col-sm-2">

        <input type="text" class="form-control" id="monto" name="monto" placeholder="Monto">

    </div>

    


    <label for="inpCuotas" class="col-sm-1 col-form-label" id="inpCuotas" style="display:none;">Cuotas</label>

    <div class="col-sm-1" id="divCuotas" style="display:none;">

        <input type="text" class="form-control" id="cuotas" name="cuotas" placeholder="Cuotas" value="1">

    </div>

  </div>

  

   

  
 	<button type="submit" class="btn btn-primary">Guardar cambios</button>

</form>


<?php
  $item = null;
  $valor = null;

  $obj = ControladorMovimientos::ctrMostrarMovimientos($item, $valor);

  //foreach ($obj as $key => $value) {
    //echo ' ControladorMovimientos foreach ';
    //echo json_encode($obj);
  //}

  $obj = new ControladorMovimientos();
  $obj -> ctrCrearMovimiento();
	//echo var_dump($obj);

  ?>

