// JavaScript Document
function ValidarRegSocio(formulario)
{
	var bolValidar=true;
	var strMensajeError="";
	var nombre=formulario.nombre.value;
	var edad=formulario.edad.value;
    var fecha=formulario.fechaInscripcion.value;
	var estatura=formulario.estatura.value;
	var peso=formulario.peso.value;
	var huella=formulario.huella.value;
	
	if(formulario.nombre.value=="")
	{
		strMensajeError+="Introduzca el nombre del socio \n";
		bolValidar=false;
	}

	if(formulario.edad.value==0)
	{
		strMensajeError+="Introduzca la edad del socio\n";
		bolvalidar=false;
	}
	if(formulario.fechaInscripcion.value=="")
	{
		strMensajeError+="Introduzca la Fecha en que ingreso el socio\n";
		bolvalidar=false;
	}
	
	
	if(formulario.estatura.value=="")
	{
		strMensajeError+="Introduzca la estatura\n";
		bolValidar=false;
	}

	if(formulario.peso.value=="")
	{
		strMensajeError+="Introduzca el peso\n";
		bolvalidar=false;
	}

	
	if (formulario.huella.value==0) 
	{
		
	    strMensajeError+="Introduzca la huella \n";
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
	
	