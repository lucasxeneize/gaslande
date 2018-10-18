// AL CARGAR LA PAGINA 
$(document).ready(function() {
 	
 	// Asigna fecha de hoy al control fecha.
 	var f = new Date();
	var dateControl = document.querySelector('input[type="date"]');
	dateControl.value = f.getFullYear()+"-"+(f.getMonth()+1)+"-"+f.getDate(); //2017-06-01';


});


// SI SELECCIONA TARJETA CRÉDITO
function mostrarCuotas(){
	var combo = document.getElementById("forma_pago");
	var selected = combo.options[combo.selectedIndex].text;

	var inputCuotas=document.getElementById("cuotas");

	if (selected=="TARJETA CRÉDITO"){
		$("#inpCuotas").show();
		$("#divCuotas").show();
		inputCuotas.value="1";
	}
	else
	{
		$("#inpCuotas").hide();
		$("#divCuotas").hide();
		
		inputCuotas.value="0";
	}
}

// AL SELECCIONAR CLASIFICACION
function selectClasificacion(){

	var comboClasificacion = document.getElementById("clasificacion");
	//var selected = combo.options[combo.selectedIndex].text;
	var selectClasificacion = comboClasificacion.options[comboClasificacion.selectedIndex];

	var value = $(selectClasificacion).attr("clasificacionIE");
	
	var $radios = $('input:radio[name=radioIE]');
	$radios.filter('[value='+value+']').prop('checked', true); //Con el filtro se busca el radio con el valor especificado.

	value=$(selectClasificacion).attr("clasificacionFV");
	var $radios = $('input:radio[name=radioFV]');
	$radios.filter('[value='+value+']').prop('checked', true); 
}

// AL SELECCIONAR INGRESO-EGRESO O FIJO-VARIABLE VERIFICA SI NO SELECCIONO CLASIFICACIÓN , SELECCIONA OTROS
function validaSelectClasificacion(){
	// Si no selecciono clasificacion y estan seleccionados opciones i-e y f-v
	var combo=document.getElementById("clasificacion");

	//alert(document.getElementById("radioFV").checked);

	
	//$(document).ready(function()
	//	{
		//$("#boton").click(function () {	 
			
			/*if( $("#formulario input[name='radioFV']:radio").is(':checked')) {  
				alert("Bien!!!, la edad seleccionada es: " + $('input:radio[name=radioFV]:checked').val());
				//$("#formulario").submit();  
				} else{  
					alert("Selecciona la edad por favor!!!");  
					}  */


	//	});
	 //});

	//alert(document.getElementById("radioFV").value);
		if($("#formulario input[name='radioIE']:radio").is(':checked') 
		&& $("#formulario input[name='radioFV']:radio").is(':checked'))
		//&& document.getElementById("clasificacion").selectedIndex==0){
		{

			/*alert($('input:radio[name=radioIE]:checked').val());
			alert($('input:radio[name=radioFV]:checked').val());*/

			//$('input:radio[name=radioIE]:checked').val()

			//$("#clasificacion option:contains('E-V-OTROS')").attr("selected",true);
			var val_i_e=$('input:radio[name=radioIE]:checked').val();
			var val_f_v=$('input:radio[name=radioFV]:checked').val();

			alert(val_i_e+"-"+val_f_v);

			//$("#clasificacion option:contains('E-V-OTROS')").attr("selected",true);
			$("#clasificacion option:contains('"+val_i_e+"-"+val_f_v+"-OTROS')").attr("selected",true);

			//$("#clasificacion option").each(function(){   				
   				//alert('opcion '+$(this).text()+' valor '+ $(this).attr('value'));
			//});
		}
		
}

