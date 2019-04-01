<section class="content">
	<div class="row">
		<div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Listado de Patologías estudiantiles</h3>
                </div><!-- /.box-header -->                
                <div class="margin">
                	<div class="btn-group">
                    	<button type="button" class="btn btn-primary btn-flat dropdown-toggle" data-toggle="dropdown"><spam class='glyphicon glyphicon-cog'></spam> Acciones <span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>	
                      	<ul class="dropdown-menu" role="menu">
                        	<li><a href="#" data-toggle="modal" data-target="#enfermedades" onClick="crearEnf();"><i class="fa fa-medkit"></i> Nueva Patología</a></li>						<li class="divider"></li>
                        	<li><a href="#"><spam class='glyphicon glyphicon-print'></spam> Imprimir Listado</a></li>
                        </ul>
                    </div>
               	</div>
                <div class="box-body">
                   <table class="table table-bordered table-striped table-hover" id="estudiantes">
        			<thead>
          				<tr>
                        	<th>Codigo</th>
            				<th>Nombre</th>
                            <th>Descripción</th>
          				</tr>
        			</thead>
        			<tbody>
        				<? foreach($listenfermedades as $enfermedad): ?>
          				<tr data-toggle="modal" data-target="#opc-enf" id="<?=$enfermedad['codigo']; ?>" onClick="opcEnf('<?=$enfermedad['codigo']; ?>')">
            				<td><?=$enfermedad['codigo']; ?></td>
            				<td><?=$enfermedad['nombre']; ?></td>
                            <td><?=$enfermedad['descripcion']; ?></td>
          				</tr>
          				<? endforeach; ?>
        			</tbody>
      			</table>
              </div><!-- /.box-body -->
           </div><!-- /.box -->
		</div><!-- /.col -->
	</div><!-- /.row -->
</section><!-- /.content -->
<div class="modal fade" id="enfermedades" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="background-color:#3c8dbc; color:#FFF" id="header-ventana"></div>
      			<div class="modal-body">         		
            		<form action="<?=site_url('enfermedades/Enfermedad'); ?>" method="post" accept-charset="utf-8" id="enfermedad" name="enfermedad">
                        <div class="form-group" id="divnomenf">
                      		<label class="control-label">Nombre de la Enfermedad</label>
                      		<input type="text" class="form-control" id="nomenf" name="nomenf" required onChange="check_NomEnf(this)">
                    	</div>                        
                        <div class="form-group" id="divdescripcionenf">
                      		<label class="control-label">Descripción</label>
                      		<textarea class="form-control" rows="3" id="descripcionenf" name="descripcionenf" required onChange="check_DescEnf(this)"></textarea>                      	
                    	</div>
                        	<input type="hidden" name="id" id="id" value="">
                            <input type="hidden" name="process" id="process" value="">
                        <div class="modal-footer" id="enf-footer">
                        	<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Guardar</button>						<button type="button" class="btn btn-danger btn-flat" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cancelar</button>                            
                        </div>
					</form>
      			</div>      		
    	   </div>
  	  </div>
</div>
<div class="modal fade bs-example-modal-sm" id="elim-enf" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header" style="background-color:red; color:#FFF">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title" id="myModalLabel">Eliminar Patología</h4>
      		</div>
      		<div class="modal-body" id="body-elim"></div>
            <form action="<?=site_url('enfermedades/ElimEnf'); ?>" method="post" accept-charset="utf-8"> 
                <input type="hidden" name="di" id="di" value="">
            <div class="modal-footer">
            	<button type="submit"  class="btn btn-success btn-flat" id="confElimEvent"><spam class='glyphicon glyphicon-ok' aria-hidden="true"></spam> Eliminar</button><button type="button" class="btn btn-danger btn-flat" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cancelar</button>
            </div> 
          </form>     		
    	</div>
  	</div>
</div>
<div class="modal fade bs-example-modal-sm" id="opc-enf" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header" style="background-color:#00A65A; color:#FFF" id="header-opc"></div>
      		<div class="modal-body" id="body-opc"></div>            
            <div class="modal-footer" id="footer-opc">
            	<button type="button" class="btn btn-success btn-flat" data-dismiss="modal"  data-toggle="modal" data-target="#enfermedades" id="edit-opc" value="edit-opc"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar</button>
                <button type="button"  class="btn btn-danger btn-flat" data-dismiss="modal" data-toggle="modal" data-target="#elim-enf" id="elim-opc" value="elim-opc"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Eliminar</button>
            </div> 
    	</div>
  	</div>
</div>
<script type="text/javascript">
function crearEnf(){		
	$(".form-group").removeClass("has-error");
	$(".form-group").removeClass("has-success");	
	$("#process").val(1);
	$("#nomenf").val('');
  	$('#descripcionenf').val('');	
	$("#id").val('');
	$('#header-ventana').html('<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title" id="myModalLabel">Nueva Patología</h4>');	
};

function opcEnf(di){	
 	$('#header-opc').html('<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>	</button><h4 class="modal-title" id="myModalLabel"> Acciones para la Patología</h4>');
	$('#body-opc').html('<h4 style="color:#060;" align="center">¿Qué desea hacer con esta patología?</h4>');
	
	$( "#edit-opc" ).click(function() {
		$("#process").val(2);			
		$('#header-ventana').html('<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>				<h4 class="modal-title" id="myModalLabel"> Editar Patología</h4>');	
		var info = { id: di };
		$.ajax({	
			url: '<?=base_url();?>index.php/enfermedades/ConsultarEnfAjax', 
			data: info,
			type: "POST",
			dataType:"json",
			success: function(resp){
				if(resp.codigo==di){
					$("#id").val(resp.codigo);
  					$("#nomenf").val(resp.nombre);
  					$("#descripcionenf").val(resp.descripcion);		
				}
			}
		});		
	});
	$( "#elim-opc" ).click(function() {
		$('#body-elim').html('<h4 style="color:red;" align="center">¿Realmente desea eliminar esta patología?</h4>');	
		$('input[name="di"]').val(di);
	});
};
</script>