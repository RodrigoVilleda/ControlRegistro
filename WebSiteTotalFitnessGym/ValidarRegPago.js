// JavaScript Document
function ValidarRegPago(formulario)
{
	var bolValidar=true;
	var strMensajeError="";
	var tipoPago=formulario.tipoPago.value;
	var cantidad=formulario.cantidad.value;
	
	if(formulario.tipoPago.value=="")
	{
		strMensajeError+="Introduzca un nuevo tipo de pago \n";
		bolValidar=false;
	}

	if(formulario.cantidad.value=="")
	{
		strMensajeError+="Introduzca la cantidad\n";
		bolvalidar=false;
	}

	if(!bolValidar)
	{
		alert(strMensajeError);
	}
	
	return bolValidar;
}


function soloNumeros(e)
{
	var unicode=e.charCode? e.charCode : e.keyCode
	if (unicode!=8)
	{ //if the key isn't the backspace key (which we should allow)
		if (unicode<48||unicode>57) //if not a number
			return false //disable key press
	}
}



function soloLetras(e)
{    
	var unicode=e.charCode? e.charCode : e.keyCode
	if (unicode!=5)
	{ //if the key isn't the backspace key (which we should allow)
		if ((unicode>=65&&unicode<=90)||(unicode>=97&&unicode<=122)||unicode==225)
			return true
		else
			return false //disable key press
	}
}
/*
	var checkOK = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZÁÉÍÓÚ" + "abcdefghijklmnñopqrstuvwxyzáéíóú ";
	var checkStr = formulario.nombre.value;
	var allValid = true;
	for (i = 0; i < checkStr.length; i++) 
	{
		ch = checkStr.charAt(i);
		for (j = 0; j < checkOK.length; j++)
			if (ch == checkOK.charAt(j))
				break;
		if (j == checkOK.length)
		{
			allValid = false;
			break;
		}
	}
	if (!allValid)
	{
		alert("Escriba sólo letras en el campo "Nombre".");
		formulario.nombre.focus();
		return (false);
	}
*/
	
	