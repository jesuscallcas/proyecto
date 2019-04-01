<section class="content">
	<div class="row">
		<div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Listado de Cursos</h3>
                </div><!-- /.box-header -->                
                <div class="margin">
                	<div class="btn-group">
                    	<button type="button" class="btn btn-primary btn-flat dropdown-toggle" data-toggle="dropdown"><spam class='glyphicon glyphicon-cog'></spam> Acciones <span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>	
                      	<ul class="dropdown-menu" role="menu">
                        	<li><a href="#" data-toggle="modal" data-target="#curso" onClick="crearCurso();"><span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span> Nuevo Curso</a></li>						<li class="divider"></li>
                        	<li><a href="#"><spam class='glyphicon glyphicon-print'></spam> Imprimir Listado</a></li>
                        	<li class="divider"></li>
                        	<li><a href="#"><spam class='glyphicon glyphicon-export'></spam> Importación Masiva</a></li>
                      	</ul>
                    </div>
               	</div>
                <div class="box-body">
                   <table class="table table-bordered table-striped table-hover" id="estudiantes">
        			<thead>
          				<tr>
                        	<th>Grado</th>
            				<th>Sección</th>
                            <th>Número de Estudiantes</th>
                            <th>Estudiantes Registrados</th>
                            <th>Descripción</th>
          				</tr>
        			</thead>
        			<tbody>
        				<? foreach($listcursos as $curso): ?>
          				<tr data-toggle="modal" data-target="#opc-curso" id="<?=$curso['CODIGO']; ?>" onClick="opcCurso('<?=$curso['CODIGO']; ?>')">
            				<td><?=$curso['GRADO']; ?></td>
            				<td><?=$curso['SECCION']; ?></td>
                            <td><?=$curso['NUMEST']; ?></td>
                            <td><?=$curso['NUMESTREG']; ?></td>
                            <td><?=$curso['DESCRIPCION']; ?></td>
          				</tr>
          				<? endforeach; ?>
        			</tbody>
      			</table>
              </div><!-- /.box-body -->
           </div><!-- /.box -->
		</div><!-- /.col -->
	</div><!-- /.row -->
</section><!-- /.content -->
<div class="modal fade" id="curso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="background-color:#3c8dbc; color:#FFF" id="header-ventana"></div>
      			<div class="modal-body">         		
            		<form action="<?=site_url('cursos/Curso'); ?>" method="post" accept-charset="utf-8" id="newcurso" name="newcurso">                    	
                        <div class="form-group" id="divgrado">
							<label class="control-label">Grado</label>
							<select class="form-control" id="grado" name="grado" required value="" onchange="check_grado(this)">
                            	<option value="" selected>Seleccionar...</option>
                            	<option value="Preescolar">Preescolar</option>
                                <option value="Primero">Primero</option>
                                <option value="Segundo">Segundo</option>
                                <option value="Tercero">Tercero</option>
                                <option value="Cuarto">Cuarto</option>
                                <option value="Quinto">Quinto</option>
                                <option value="Sexto">Sexto</option>
                                <option value="Septimo">Septimo</option>
                                <option value="Octavo">Octavo</option>
                                <option value="Noveno">Noveno</option>
                                <option value="Decimo">Decimo</option>
                                <option value="Once">Once</option>
                      		</select>	
                        </div>
                        <div class="form-group" id="divseccion">
							<label class="control-label">Sección</label>
							<select class="form-control" id="seccion" name="seccion" required value="" onchange="check_seccion(this)">
                            	<option value="" selected>Seleccionar...</option>
                            	<option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                                <option value="F">F</option>
                                <option value="G">G</option>
                                <option value="H">H</option>
                                <option value="I">I</option>
                                <option value="J">J</option>
                      		</select>	
                        </div>
                        <div class="form-group" id="divnumest">
                      		<label class="control-label">Número de Estudiantes</label>
                      		<input type="text" class="form-control" id="numest" name="numest" required>
                    	</div>                        
                        <div class="form-group" id="divdescripcion">
                      		<label class="control-label">Descripción</label>
                      		<input type="text" class="form-control" id="descripcion" name="descripcion" required>
                    	</div>
                        <div class="modal-footer">
                        	<button type="button" class="btn btn-danger btn-flat" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cancelar</button>
                            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Guardar Curso</button>						<input type="hidden" name="process" id="process" value="">
                            <input type="hidden" name="id" id="id" value="">                            
                        </div>
					</form>
      			</div>      		
    	   </div>
  	  </div>
</div>
<div class="modal fade bs-example-modal-sm" id="elim-curso" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header" style="background-color:red; color:#FFF">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title" id="myModalLabel">Eliminar Curso</h4>
      		</div>
      		<div class="modal-body" id="body-elim"></div>
            <form action="<?=site_url('cursos/ElimCursoAjax'); ?>" method="post" accept-charset="utf-8"> 
                <input type="hidden" name="di" id="di" value="">
            <div class="modal-footer">
        		<button type="button" class="btn btn-danger btn-flat" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cancelar</button> 
                <button type="submit"  class="btn btn-success btn-flat" id="confElimEvent"><spam class='glyphicon glyphicon-ok' aria-hidden="true"></spam> Eliminar</button>
            </div> 
          </form>     		
    	</div>
  	</div>
</div>
<div class="modal fade bs-example-modal-sm" id="opc-curso" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header" style="background-color:#00A65A; color:#FFF" id="header-opc"></div>
      		<div class="modal-body" id="body-opc"></div>            
            <div class="modal-footer" id="footer-opc">
            	<button type="button" class="btn btn-success btn-flat" data-dismiss="modal"  data-toggle="modal" data-target="#curso" id="edit-opc" value="edit-opc"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar</button>
                <button type="button"  class="btn btn-danger btn-flat" data-dismiss="modal" data-toggle="modal" data-target="#elim-curso" id="elim-opc" value="elim-opc"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Eliminar</button>
            </div> 
    	</div>
  	</div>
</div>
<script type="text/javascript">
function crearCurso(){		
	$(".form-group").removeClass("has-error");
	$(".form-group").removeClass("has-success");	
	$('input[name="process"]').val(1);
	$("#grado").val('');
  	$('#seccion').val('');
	$('#numest').val('');
    $('#descripcion').val('');
	$("#id").val('');
	$('#header-ventana').html('<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title" id="myModalLabel">Nuevo Curso</h4>');
	$("select[name=seccion]").change(function(){
		var desc = $('select[name="grado"]').val()+'-'+$('select[name="seccion"]').val();
		$('#descripcion').val(desc);
	});		
};

function opcCurso(di){	
 	$('#header-opc').html('<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>	</button><h4 class="modal-title" id="myModalLabel"> Acciones para el Curso</h4>');
	$('#body-opc').html('<h4 style="color:#060;" align="center">¿Qué desea hacer con este curso?</h4>');
	
	$( "#edit-opc" ).click(function() {
		$('input[name="process"]').val(2);			
		$('#header-ventana').html('<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>				<h4 class="modal-title" id="myModalLabel"> Editar Curso</h4>');	
		var info = { id: di };
		$.ajax({	
			url: '<?=base_url();?>index.php/cursos/ConsultarCursoAjax', 
			data: info,
			type: "POST",
			dataType:"json",
			success: function(resp){
				if(resp.CODIGO==di){
					$("#id").val(di);
  					$("#grado").val(resp.GRADO);
  					$("#seccion").val(resp.SECCION);
					$("#numest").val(resp.NUMEST);
					$("#descripcion").val(resp.DESCRIPCION);
				}else{
					alert("Error al intentar cargar los datos del curso");
				}
			}
		});
		$("select[name=seccion]").change(function(){
			var desc = $('select[name="grado"]').val()+'-'+$('select[name="seccion"]').val();
			$('#descripcion').val(desc);
		});
	});
	$( "#elim-opc" ).click(function() {
		$('#body-elim').html('<h4 style="color:red;" align="center">¿Realmente desea eliminar este curso?</h4>');	
		$('input[name="di"]').val(di);
	});
};
</script>