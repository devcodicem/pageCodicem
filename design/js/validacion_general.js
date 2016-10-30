
/*funcion que permite validar las direcciones de correo electronicos*/
function valida_correo(correo){
	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(correo)){
		
		return (true)
		} else {
		
		return (false);
	}
}

/*funcion para limpiar los campos del formulario en general*/
function limpiar_campo(){
    return false;
}
function validar_campo(){
    
    var f=document.form;
    
    if (f.nom.value==0) {
		document.getElementById("valor").innerHTML="<h8><font color='#42DCA3'>El Campo Nombre se encuentra vacío</font></h8>";
		f.nom.value="";
		f.nom.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
    }
    if (!isNaN(parseInt(f.nom.value))){
	    document.getElementById("valor").innerHTML="<h8><font color='#42DCA3'>No puedes ingresar números </font></h8>";
		f.nom.value="";
		f.nom.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
    
   
    if (f.co.value==0){
        document.getElementById("valor").innerHTML="<h8><font color='#42DCA3'>El Campo Correo se encuentra vacío</font></h8>";
        f.co.value="";
        f.co.focus();
        return false;
    }else{
        document.getElementById("valor").innerHTML="";
    }
    
    if (valida_correo(f.co.value)==false) {
		document.getElementById("valor").innerHTML="<h8><font color='#42DCA3'>El Correo Eléctronico Ingresado es Invalido</font></h8>";
		f.co.value="";
		f.co.focus();
		return true;
	}else{
		document.getElementById("valor").innerHTML="";
	}

    //valida que solo sean numeros en numero de telefono <style> font {border:2px solid #42DCA3; border-radius:2px;}</style>
	if (isNaN(parseInt(f.numer.value))){
	    document.getElementById("valor").innerHTML="<h8><font color='#42DCA3'>Debes Ingresar Números</font></h8>";
		f.numer.value="";
		f.numer.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	
	if (f.coment.value==0){
        document.getElementById("valor").innerHTML="<h8><font color='#42DCA3'>Escribe tu Solicitud!</font></h8>";
        f.coment.value="";
        f.coment.focus();
        return false;
    }else{
        document.getElementById("valor").innerHTML="";
    }
    f.submit();
}