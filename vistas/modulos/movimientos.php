
<form method="post">
	
	<!-- FECHA -->
	<div class="form-group row">

		<label for="datFecha" class="col-sm-2 col-form-label">Fecha</label>

		<div class="col-sm-10">

			<input type="text" class="form-control" id="fecha" name="fecha" value="">

		</div>

	</div>

	
	<!-- Monto -->
	<div class="form-group row">

		<label for="inpMonto" class="col-sm-2 col-form-label">Monto</label>

		<div class="col-sm-10">

  			<input type="text" class="form-control" id="monto" name="monto" placeholder="Monto">

		</div>

	</div>

	<!-- DESCRIPCION -->
	<div class="form-group row">

		<label for="inpMonto" class="col-sm-2 col-form-label">Monto</label>

		<div class="col-sm-10">

  			<input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción">

		</div>

	</div>

	<!-- -OPCIONES EFECTIVO / TARJETA -->
	<!--div class="custom-control custom-radio custom-control-inline">
  		
  		<input type="radio" id="forma_pago_efe" name="forma_pago" class="custom-control-input">
  	
  		<label class="custom-control-label" for="forma_pago_efe">Efectivo</label>
	
	</div>

	<div class="custom-control custom-radio custom-control-inline">
  		
  		<input type="radio" id="forma_pago_tc" name="forma_pago" class="custom-control-input">
  
  		<label class="custom-control-label" for="forma_pago_tc">Tarjeta</label>
	</div-->

   
    <!-- ENTRADA PARA SELECCIONAR FORMA PAGO -->
   <div class="form-group row">
    
    <label for="forma_pago" class="col-sm-2 col-form-label">Forma Pago</label>

    <div class="col-sm-10">
      <select class="form-control" name="forma_pago">
          
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

