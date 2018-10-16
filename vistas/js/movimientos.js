
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