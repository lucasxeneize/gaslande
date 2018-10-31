<div class="row">
 
  <div class="col">
  
    <a href="#" class="href">ANTERIOR</a>
  
  </div>

  <div class="col">
  
   <h3>OCTUBRE</h3> 
  
  </div>

  <div class="col">
  
    <a href="#" class="href">SIGUIENTE</a>
  
  </div>


</div>

<!--div class="row">
  
  <div class="col"-->
  
  <!--select class="form-control" name="forma_pago" id="forma_pago" onchange="mostrarCuotas()">        
  <option value="">Selecionar forma pago</option-->





<table class="table table-hover">
  <tbody>
  <?php 
    $item = 0;
    $valor = 0;

    $obj = ControladorMovimientos::ctrMostrarMovimientosPorMes($item,$valor);

    foreach ($obj as $key => $value) {
      
      echo "<tr>";
        if($value["ingreso_egreso"]=="I")
        {
          //echo'<div class="row"><div class="col">Total Ingresos: $'.$value["monto"]."</div>";
          //echo '<div class="col"><a href="#" class="href">Detalles</a></div></div>';

          echo '<th>Total Ingresos: $</th><td>'.$value["monto"].'</td><td><a href="#" class="href">Detalles</a></td>';

        }

        if($value["ingreso_egreso"]=="E")
        {
          //echo'<div class="row"><div class="col">Total Egreso: $'.$value["monto"].'</div>';
          //echo '<div class="col"><a href="#" class="href">Detalles</a></div></div>';

          echo '<th>Total Egreso: $</th><td>'.$value["monto"].'</td><td><a href="#" class="href">Detalles</a></td>';

        }

      echo "</tr>";
    }
    ?>
  </tbody>
</table>
<button type="submit" class="btn btn-primary" onClick="window.location.href='movimientos'">Ingresar movimiento</button>

<!--input type="button" onClick="window.location.href='movimientos'"-->  


