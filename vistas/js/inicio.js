
window.onload = function() {
  
   //alert("window_onload");
   // API Ejemplo
   //fetch('https://mindicador.cl/api')
   fetch('http://localhost/gaslande/vistas/modulos/api/inicio.php')
	.then(datos=>datos.json())
	.then(
		datos=>{console.log(datos)})
		/*datos=>{document.getElementById('datos').innerHTML = `
			Version: ${datos.version}
		`
		})*/

	// CARGA FECHA HOY
	/*var f = new Date();
	var dateControl = document.querySelector('input[type="date"]');
	dateControl.value = f.getFullYear()+"-"+(f.getMonth()+1)+"-"+f.getDate();*/

	var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

	//alert(meses[f.getMonth()]);
};









