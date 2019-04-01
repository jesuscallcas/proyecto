<section class="content">
	<div class="row">
		<div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Registros de Matricula</h3>
                </div><!-- /.box-header -->                
                <div class="margin">
                	<div class="btn-group">
                    	<button type="button" class="btn btn-primary btn-flat dropdown-toggle" data-toggle="dropdown"><spam class='glyphicon glyphicon-cog'></spam> Acciones <span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>	
                      	<ul class="dropdown-menu" role="menu">
                        	<li><a data-toggle="modal" data-target="#registro" onClick="crearReg();"><i class="fa fa-file-text-o"></i> Nuevo Registro</a></li>						
                            <li class="divider"></li>
                        	<li><a href="#"><spam class='glyphicon glyphicon-print'></spam> Imprimir Listado</a></li>
                      	</ul>
                    </div>
               	</div>
                <div class="box-body">
                   <table class="table table-bordered table-striped table-hover" id="usuarios">
        			<thead>
          				<tr>
                        	<th>Estudiante</th>
            				<th>Identificación</th>
                            <th>Genero</th>
                            <th>Grado</th>
                            <th>Email</th>
                            <th>Teléfono</th>
            				<th>Fecha de Registro</th>
          				</tr>
        			</thead>
        			<tbody>
        				<? foreach($listreg as $reg): ?>
          				<tr data-toggle="modal" data-target="#opc-reg" id="<?=$reg['ID']; ?>" onClick="opcReg('<?=$reg['identificacion']; ?>')">
                        	<td><?=$reg['NOMEST']." ".$reg['APELLIDOEST']; ?></td>
            				<td><?=$reg['identificacion']; ?><br><?=$reg['TIPODOC']; ?></td>
                            <td><?=$reg['GENERO']; ?></td>
                            <td><?=$reg['GRADO']; ?></td>
            				<td><?=$reg['EMAIL']; ?></td>
                            <td><?=$reg['TEL']; ?></td>
                            <td class="mailbox-date" data-toggle="tooltip" data-placement="bottom" title="<?=$reg['FECHAREG'];?>"><?php echo fechainteligente($reg['FECHAREG']);?></td>
          				</tr>
          				<? endforeach; ?>
        			</tbody>
      			</table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
		</div><!-- /.col -->
	</div><!-- /.row -->
</section><!-- /.content -->
<div class="modal fade" id="registro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="background-color:#3c8dbc; color:#FFF" id="header-ventana"></div>
      			<div class="modal-body">         		
            		<form action="<?=site_url('registro/Registro'); ?>" method="post" accept-charset="utf-8" id="registro" name="registro">         
                    <table width="100%" border="0">
  						<tr>
    						<td>
                            <div class="form-group">
								<label class="control-label">Nombre(s)</label>
								<input type="text" class="form-control" name="nombreest" id="nombreest" pattern="{3,50}" value="" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required/>										
                        	</div>
                            </td>
    						<td>&nbsp;</td>
    						<td>
                            <div class="form-group">
								<label class="control-label">Apellidos</label>
								<input type="text" class="form-control" name="apeest" id="apeest" pattern="{3,50}" value="" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required/>										
                        	</div>
                            </td>
                      	</tr>
                      	<tr>
                        	<td>
                            <div class="form-group">
                        		<label class="control-label">Tipo Identificación</label>
								<select class="form-control" id="tidentidadest" name="tidentidadest" value="" required>
                                	<option value="" selected>Seleccionar...</option>
									<option value="Registro Civil">Registro Civil</option>
									<option value="Tarjeta Identidad">Tarjeta Identidad</option>
                                	<option value="NUIP">NUIP</option>
									<option value="Cedula de Ciudadania">Cedula de Ciudadania</option>	
									<option value="Cedula Extranjeria">Cedula Extranjeria</option>
                                	<option value="Pasaporte">Pasaporte</option>											
								</select>
                        	</div>
                            </td>
                        	<td>&nbsp;</td>
                        	<td>
                            <div class="form-group">
								<label class="control-label">Identificación</label>
								<input type="text" class="form-control"  name="identidadest" id="identidadest" value="" required/>					</div>
                            </td>
                      	</tr>
                      	<tr>
                        	<td>
                            <div class="form-group">
							<label class="control-label">Genero</label>
							<select class="form-control" id="generoest" name="generoest" required value=""> 
                               	<option value="" selected>Seleccionar...</option>
                            	<option value="Femenino">Femenino</option>
                                <option value="Masculino">Masculino</option>                                
                      		</select>	
                       		</div>                            
                            </td>
                        	<td>&nbsp;</td>
                        	<td>
                            <div class="form-group">
							<label class="control-label">Grado al que Aspira</label>
							<select class="form-control" id="gradoest" name="gradoest" required value=""> 
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
                            </td>
                      	</tr>
                        <tr>
                        	<td>
                            <div class="form-group">
								<label class="control-label">Email</label>
								<input type="text" class="form-control" id="mailest" name="mailest" value="" required/>
                        	</div>                        	
                        	</td>
                        	<td>&nbsp;</td>
                        	<td>
                            <div class="form-group">
								<label class="control-label">Dirección</label>
								<input type="text" class="form-control" id="direccionest" name="direccionest" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required/>
                        	</div>                        	
                        	</td>
                        </tr>
                        	<td>
                        	<div class="form-group">
								<label class="control-label">Teléfono</label>
								<input type="text" class="form-control" id="telefonoest" name="telefonoest" value="" required/>
                        	</div>
                            </td>
                        	<td>&nbsp;</td>
                        	<td>&nbsp;</td>
                        </tr>
                    	</table>  
                        <div class="modal-footer">                        	
                            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Guardar Registro</button>						<input type="hidden" name="process" id="process" value="">
                            <button type="button" class="btn btn-danger btn-flat" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cancelar</button>
                            <input type="hidden" name="id" id="id" value="">                            
                        </div>
					</form>
      			</div>      		
    	   </div>
  	  </div>
</div>
<div class="modal fade bs-example-modal-sm" id="elim-reg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header" style="background-color:red; color:#FFF">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
      		</div>
      		<div class="modal-body" id="body-elim"></div>
            <form action="<?=site_url('registro/EliminarReg'); ?>" method="post" accept-charset="utf-8"> 
                <input type="hidden" name="di" id="di" value="">
            <div class="modal-footer">
        		<button type="button" class="btn btn-danger btn-flat" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cancelar</button> 
                <button type="submit"  class="btn btn-success btn-flat" id="confElimEvent"><spam class='glyphicon glyphicon-ok' aria-hidden="true"></spam> Eliminar</button>
            </div> 
          </form>     		
    	</div>
  	</div>
</div>
<div class="modal fade" id="opc-reg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header" style="background-color:#00A65A; color:#FFF" id="header-opc"></div>
      		<div class="modal-body" id="body-opc"></div>            
            <div class="modal-footer" id="footer-opc">            	
            	<button type="button" class="btn btn-success btn-flat" data-dismiss="modal"  data-toggle="modal" data-target="#registro" id="edit-opc" value="edit-opc"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar</button>
                <button type="button"  class="btn btn-danger btn-flat" data-dismiss="modal" data-toggle="modal" data-target="#elim-reg" id="elim-opc" value="elim-opc"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Eliminar</button>
            </div> 
    	</div>
  	</div>
</div>
<script type="text/javascript">
function crearReg(){		
	$(".form-group").removeClass("has-error");
	$(".form-group").removeClass("has-success");	
	$('input[name="process"]').val(1);
	$("#identidadest").val("");
  	$("#nombreest").val("");
	$("#apeest").val("");
  	$("#tidentidadest").val("");
	$("#generoest").val("");
	$("#mailest").val("");
	$("#direccionest").val("");
	$("#telefonoest").val("");
	$("#gradoest").val("");	
	$('#header-ventana').html('<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title" id="myModalLabel">Nuevo Registro</h4>');	
};

function opcReg(di){	
	var di = di;	
	$('#header-opc').html('<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>	</button><h4 class="modal-title" id="myModalLabel"> Acciones para el Registro</h4>');
	$('#body-opc').html('<h4 style="color:#060;" align="center">¿Qué desea hacer con este registro?</h4>');
	
	$( "#edit-opc" ).click(function() {
		$('input[name="process"]').val(2);		
		$('#header-ventana').html('<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>				<h4 class="modal-title" id="myModalLabel"> Editar Registro</h4>');	
		var info = { id: di };
		$.ajax({	
			url: '<?=base_url();?>index.php/registro/ConsultarRegAjax', 
			data: info,
			type: "POST",
			dataType:"json",
			success: function(resp){									
					$("#identidadest").val(resp.DOCEST);
  					$("#nombreest").val(resp.NOMEST);
					$("#apeest").val(resp.APEEST);
  					$("#tidentidadest").val(resp.TIPODOC);
					$("#generoest").val(resp.GENERO);
					$("#mailest").val(resp.EMAIL);
					$("#direccionest").val(resp.DIR);
					$("#telefonoest").val(resp.TEL);					
					$("#gradoest").val(resp.GRADO);  
					$("#id").val(resp.ID);	
			}
		});
	});
	$( "#elim-opc" ).click(function() {
		$('#body-elim').html('<h4 style="color:red;" align="center">¿Realmente desea eliminar este registro?</h4>');	
		$('input[name="di"]').val(di);
	});
};
</script>