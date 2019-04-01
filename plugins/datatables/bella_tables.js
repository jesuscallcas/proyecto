	$(document).ready(function() {
		//* datatable must be rendered first
        Tabla_Usuarios.init();
		Tabla_Juicios.init();
		Tabla_Estudiantes.init();	
	});	

    Tabla_Usuarios = {		
        init: function() {
           $('#usuarios').dataTable({"aaSorting": [[ 2, "asc" ]]}); 
        }
    };
	
	Tabla_Juicios = {
        init: function() {
           $('#juicios').dataTable({"aaSorting": [[ 1, "asc" ]]});            
        }
    };
	
	Tabla_Estudiantes = {
        init: function() {
           $('#estudiantes').dataTable({"aaSorting": [[ 2, "asc" ]]});            
        }
    };