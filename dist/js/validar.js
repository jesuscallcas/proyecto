function check_usuario(input) {  
    if (input.validity.patternMismatch || input.value==""){  
        input.setCustomValidity("Digite un documento de identidad valido"); 		
    }  
    else {  
        input.setCustomValidity("");  		
    }                 
} 
function check_pass(input) {  
    if (input.validity.patternMismatch || input.value==""){  
        input.setCustomValidity("Ingrese por lo menos tres (3) caracteres");  
		$("#divpass").addClass("has-error");
    }  
    else {  
        input.setCustomValidity("");  
		$("#divpass").removeClass("has-error");
		$("#divpass").addClass("has-success")
		
    }                 
}
function check_nomuser(input) {  
    if (input.validity.patternMismatch || input.value==""){  
        input.setCustomValidity("Digite un nombre de usuario valido");  
		$("#divnomusuario").addClass("has-error");
    }  
    else {  
        input.setCustomValidity(""); 
		$("#divnomusuario").removeClass("has-error"); 
		$("#divnomusuario").addClass("has-success");
    }                 
}  
function check_diusuario(input) {  
    if (input.validity.patternMismatch || input.value==""){  
        input.setCustomValidity("Digite un documento de identidad valido"); 
		$("#divdiusuario").addClass("has-error");
    }  
    else {  
        input.setCustomValidity(""); 
		$("#divdiusuario").removeClass("has-error"); 
		$("#divdiusuario").addClass("has-success");
    }                 
}
function check_tel(input) {  
    if (input.validity.patternMismatch || input.value==""){  
        input.setCustomValidity("Digite número teléfonico valido"); 
		$("#divteluser").addClass("has-error");
    }  
    else {  
        input.setCustomValidity("");  
		$("#divteluser").removeClass("has-error");
		$("#divteluser").addClass("has-success");
    }                 
}
function check_emailuser(input) {  
    if (input.validity.patternMismatch || input.value==""){  
        input.setCustomValidity("Digite un email valido"); 
		$("#divemailusuario").addClass("has-error");
    }  
    else {  
        input.setCustomValidity("");  
		$("#divemailusuario").removeClass("has-error");
		$("#divemailusuario").addClass("has-success");
    }                 
}
function check_juicio(texto){  
    if (texto.value==""){          
		$("#divjuicio").addClass("has-error");
    }  
    else {          
		$("#divjuicio").removeClass("has-error");
		$("#divjuicio").addClass("has-success");
    }                 
}
function echeck_juicio(texto){  
    if (etexto.value==""){          
		$("#edivjuicio").addClass("has-error");
    }  
    else {          
		$("#edivjuicio").removeClass("has-error");
		$("#edivjuicio").addClass("has-success");
    }                 
}
function check_tituloevent(input){  
    if (input.validity.patternMismatch || input.value==""){  
        input.setCustomValidity("Digite un titulo valido para el evento"); 
		$("#divtitevent").addClass("has-error");
    }  
    else {  
        input.setCustomValidity("");  
		$("#divtitevent").removeClass("has-error");
		$("#divtitevent").addClass("has-success");
    }                 
}
function check_fecha(input){  
    if ($("#fecha").value==""){  
        input.setCustomValidity("Seleccione la fecha de inicio y finalización del evento"); 
		$("#divfecha").addClass("has-error");
    }  
    else { 
		$("#divfecha").removeClass("has-error");
		$("#divfecha").addClass("has-success");
    }                 
}
function check_descevento(input){  
    if (input.value==""){
		$("#divdescevento").addClass("has-error");
    }  
    else { 		
		$("#divdescevento").removeClass("has-error");
		$("#divdescevento").addClass("has-success");
    }                 
}
function check_asunto(input){  
    if (input.validity.patternMismatch){  
        input.setCustomValidity("El asunto debe contener al menos 10 caracteres"); 
		$("#divasunto").addClass("has-error");
    }  
    else {
		input.setCustomValidity(""); 		 
		$("#divasunto").removeClass("has-error");
		$("#divasunto").addClass("has-success");
    }                 
}
function check_dest(input){  
    if (input.value==""){
		$("#divdestinatario").addClass("has-error");
    }  
    else { 
		$("#divdestinatario").removeClass("has-error");
		$("#divdestinatario").addClass("has-success");
    }                 
}
function check_FechaEnt(input){  
    if (input.value==""){
		$("#divfechaEnt").addClass("has-error");
    }  
    else { 
		$("#divfechaEnt").removeClass("has-error");
		$("#divfechaEnt").addClass("has-success");
    }                 
}
function check_HoraEnt(input){  
    if (input.value==""){
		$("#divhoraEnt").addClass("has-error");
    }  
    else { 
		$("#divhoraEnt").removeClass("has-error");
		$("#divhoraEnt").addClass("has-success");
    }                 
}
function check_ObsEnt(input){  
    if (input.value==""){
		$("#divobsEnt").addClass("has-error");
    }  
    else { 
		$("#divobsEnt").removeClass("has-error");
		$("#divobsEnt").addClass("has-success");
    }                 
}
function check_mensaje(input){  
    if (input.value==""){
		$("#divmensaje").addClass("has-error");
    }  
    else { 		
		$("#divmensaje").removeClass("has-error");
		$("#divmensaje").addClass("has-success");
    }                 
}
function check_NomEnf(input){  
    if (input.value==""){
		$("#divnomenf").addClass("has-error");
    }  
    else { 		
		$("#divnomenf").removeClass("has-error");
		$("#divnomenf").addClass("has-success");
    }                 
}
function check_DescEnf(input){  
    if (input.value==""){
		$("#divdescripcionenf").addClass("has-error");
    }  
    else { 		
		$("#divdescripcionenf").removeClass("has-error");
		$("#divdescripcionenf").addClass("has-success");
    }                 
}
function check_respasunto(input){  
    if (input.validity.patternMismatch){  
        input.setCustomValidity("El asunto debe contener al menos 10 caracteres"); 
		$("#divrespasunto").addClass("has-error");
    }  
    else {
		input.setCustomValidity(""); 		 
		$("#divrespasunto").removeClass("has-error");
		$("#divrespasunto").addClass("has-success");
    }                 
}
function check_respmensaje(input){  
    if (input.value==""){
		$("#divrespmensaje").addClass("has-error");
    }  
    else { 		
		$("#divrespmensaje").removeClass("has-error");
		$("#divrespmensaje").addClass("has-success");
    }                 
}
function gettdoc(sel) {
	if(sel.value==""){
       	$("#divtdoc").addClass("has-error");
	}else{
		$("#divtdoc").removeClass("has-error");		
		$("#divtdoc").addClass("has-success");
	}
}
function getgenero(sel) {
	if(sel.value==""){
       	$("#divgenero").addClass("has-error");
	}else{
		$("#divgenero").removeClass("has-error");		
		$("#divgenero").addClass("has-success");
	}
}
function getnivelacceso(sel) {
	if(sel.value==""){
       	$("#divnivelacceso").addClass("has-error");
	}else{
		$("#divnivelacceso").removeClass("has-error");		
		$("#divnivelacceso").addClass("has-success");
	}
}