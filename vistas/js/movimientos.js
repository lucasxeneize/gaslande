
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
	var combo = document.getElementById("clasificacion");
	var selected = combo.options[combo.selectedIndex].text;
	var selected2 = combo.options[combo.selectedIndex];

	 var i_e = $(selected2).attr("clasificacionIE");

	alert(selected2.text);
	alert(i_e);

	//document.querySelector("[name=grupodehermanos][value=M]").checked = true;
	
	var $radios = $('input:radio[name=radioIE]');
	$radios.filter('[value='+i_e+']').prop('checked', true); //Con el filtro se busca el radio con el valor especificado.


}