// JavaScript Document
function ValidarRegInstructor(formulario)
{
	var bolValidar=true;
	var strMensajeError="";
	var nombreI=formulario.nombreI.value;
	var direccion=formulario.direccion.value;
    var telefono=formulario.telefono.value;
	var horario=formulario.horario.value;
	
	if(formulario.nombreI.value=="")
	{
		strMensajeError+="Introduzca el nombre del Instructor \n";
		bolValidar=false;
	}

	if(formulario.direccion.value=="")
	{
		strMensajeError+="Introduzca la direccion\n";
		bolvalidar=false;
	}
	if(formulario.telefono.value=="")
	{
		strMensajeError+="Introduzca el telefono\n";
		bolvalidar=false;
	}
	
	
	if(formulario.horario.value=="")
	{
		strMensajeError+="Introduzca el horario\n";
		bolValidar=false;
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
	
	