<section class="content">
	<div class="row">
		<div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Listado de Eventos</h3>
                </div><!-- /.box-header -->                
                <div class="margin">
                	<div class="btn-group">
                    	<button type="button" class="btn btn-primary btn-flat dropdown-toggle" data-toggle="dropdown"><spam class='glyphicon glyphicon-cog'></spam> Acciones <span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>	
                      	<ul class="dropdown-menu" role="menu">
                        	<li><a href="#" data-toggle="modal" data-target="#event" onClick="crearEvent();"><i class="fa fa-calendar"></i> Nuevo Evento</a></li>						<li class="divider"></li>
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
                        	<th>Evento</th>
            				<th>Fecha de Incio</th>
            				<th>Fecha de Finalización</th>
                            <th>Creado por</th>
            				<th>Editado por</th>            				
          				</tr>
        			</thead>
        			<tbody>
        				<? foreach($listevent as $event): ?>
          				<tr data-toggle="modal" data-target="#opc-event" id="<?=$event['id']; ?>" onClick="opcEvent('<?=$event['id']; ?>')">
            				<td><?=$event['titulo']; ?></td>
            				<td><?=$event['inicio']; ?></td>
            				<td><?=$event['finalizacion']; ?></td>
                            <td><?=$event['creadopor']; ?></td>
            				<td><?=$event['editadopor']; ?></td>
          				</tr>
          				<? endforeach; ?>
        			</tbody>
      			</table>
              </div><!-- /.box-body -->
           </div><!-- /.box -->
		</div><!-- /.col -->
	</div><!-- /.row -->
</section><!-- /.content -->
<div class="modal fade" id="event" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="background-color:#3c8dbc; color:#FFF" id="header-ventana"></div>
      			<div class="modal-body">         		
            		<form action="<?=site_url('eventos/Event'); ?>" method="post" accept-charset="utf-8" id="newevent" name="newevent">                    	
                        <div class="form-group" id="divtitevent">
							<label class="control-label">Titulo</label>
							<input type="text" class="form-control" name="tituloevent" id="tituloevent" pattern="[A-Za-z ñáéíóú/\s]{10,100}" value="" required oninput="check_tituloevent(this);"/>	
                        </div>
                        <div class="form-group" id="divfecha">
                    		<label>Fecha</label>
                    		<input type="text" class="form-control" id="fecha" name="fecha" value="" required oninput="check_fecha(this);"/>                   		
                  		</div>
                    	<div class="form-group" id="divdescevento">
                      		<label for="nombre">Descripción del Evento</label>
                        	<textarea class="form-control" rows="3" id="descevento" name="descevento" value="" required oninput="check_descevento(this)"></textarea>
                    	</div>
                        <div class="modal-footer">
                        	<button type="button" class="btn btn-danger btn-flat" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cancelar</button>
                            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Guardar Evento</button>						<input type="hidden" name="process" id="process" value="">
                            <input type="hidden" name="id" id="id" value="">
                            <input type="hidden" name="editadopor" id="editadopor" value="<?=$this->session->userdata('usuario');?>">
                            <input type="hidden" name="creadopor" id="creadopor" value="<?=$this->session->userdata('usuario');?>">
                        </div>
					</form>
      			</div>      		
    	   </div>
  	  </div>
</div>
<div class="modal fade bs-example-modal-sm" id="elim-event" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header" style="background-color:red; color:#FFF">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title" id="myModalLabel">Eliminar Evento</h4>
      		</div>
      		<div class="modal-body" id="body-elim"></div>
            <form action="<?=site_url('eventos/EliminarEventAjax'); ?>" method="post" accept-charset="utf-8"> 
                <input type="hidden" name="di" id="di" value="">
            <div class="modal-footer">
        		<button type="button" class="btn btn-danger btn-flat" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cancelar</button> 
                <button type="submit"  class="btn btn-success btn-flat" id="confElimEvent"><spam class='glyphicon glyphicon-ok' aria-hidden="true"></spam> Eliminar</button>
            </div> 
          </form>     		
    	</div>
  	</div>
</div>
<div class="modal fade bs-example-modal-sm" id="opc-event" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header" style="background-color:#00A65A; color:#FFF" id="header-opc"></div>
      		<div class="modal-body" id="body-opc"></div>            
            <div class="modal-footer" id="footer-opc">
            	<button type="button" class="btn btn-success btn-flat" data-dismiss="modal"  data-toggle="modal" data-target="#event" id="edit-opc" value="edit-opc"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar</button>
                <button type="button"  class="btn btn-danger btn-flat" data-dismiss="modal" data-toggle="modal" data-target="#elim-event" id="elim-opc" value="elim-opc"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Eliminar</button>
            </div> 
    	</div>
  	</div>
</div>
<script type="text/javascript">
function crearEvent(){		
	$(".form-group").removeClass("has-error");
	$(".form-group").removeClass("has-success");	
	$('input[name="process"]').val(1);
	$("#tituloevent").val("");
  	$("#fecha").val("");  	
 	$("#descevento").val("");	
	$('#header-ventana').html('<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title" id="myModalLabel">Nuevo Evento</h4>');	
};

function opcEvent(di){	
	var di = di;	
	$('#header-opc').html('<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>	</button><h4 class="modal-title" id="myModalLabel"> Acciones para el Evento</h4>');
	$('#body-opc').html('<h4 style="color:#060;" align="center">¿Qué desea hacer con este evento?</h4>');
	
	$( "#edit-opc" ).click(function() {
		$('input[name="process"]').val(2);		
		$('#header-ventana').html('<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>				<h4 class="modal-title" id="myModalLabel"> Editar Evento</h4>');	
		var info = { id: di };
		$.ajax({	
			url: '<?=base_url();?>index.php/eventos/ConsultarEventAjax', 
			data: info,
			type: "POST",
			dataType:"json",
			success: function(resp){
				if(resp.id==di){					
					$("#id").val(resp.id);
  					$("#tituloevent").val(resp.titulo);
  					$("#fecha").val(resp.fecha); 
					$("#descevento").val(resp.descripcion);  							
				}else{
					alert("Error al intentar cargar los datos del evento");
				}
			}
		});
	});
	$( "#elim-opc" ).click(function() {
		$('#body-elim').html('<h4 style="color:red;" align="center">¿Realmente desea eliminar este evento?</h4>');	
		$('input[name="di"]').val(di);
	});
};
</script>