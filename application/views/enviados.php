<section class="content">
	<div class="row">
		<div class="col-xs-3">
			<a href="" class="btn btn-primary btn-block margin-bottom" data-toggle="modal" data-target="#NewMensaje" onClick="crearMensaje();"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Redactar</a>
			<div class="box box-solid">
				<div class="box-header with-border">
					<h3 class="box-title">Carpetas</h3>
				</div>
				<div class="box-body no-padding">
					<ul class="nav nav-pills nav-stacked">
                    	<li><a href="<?=site_url('mensajeria/bandeja'); ?>"><i class="fa fa-inbox"></i> Bandeja de entrada <? if ($nummp>0){?><span class="label label-primary pull-right"><?=$nummp?></span><? }?></a></li>
                    	<li class="active"><a href="<?=site_url('mensajeria/enviados'); ?>"><i class="fa fa-envelope-o"></i> Enviados</a></li>
                    	<li><a href="<?=site_url('mensajeria/papelera'); ?>"><i class="fa fa-trash-o"></i> Papelera <? if ($nummpp>0){?><span class="label label-primary pull-right"><?=$nummpp?></span><? }?></a></li>
                  	</ul>
                </div><!-- /.box-body -->
			</div><!-- /. box -->
		</div><!-- /.col -->
		<div class="col-xs-9">
			<div class="box box-primary">
				<div class="box-header">
                  <h3 class="box-title">Mensajes Enviados</h3>                  
                </div><!-- /.box-header -->                
                <div class="box-body no-padding">                  
                  <div class="table-responsive mailbox-messages">
                  	<table class="table table-bordered table-striped table-hover" id="usuarios"> 
                   		<thead>
          					<tr>            				
            					<th>Asunto</th>
                            	<th>Destinatario</th>            				
            					<th>Fecha</th>
          					</tr>
        				</thead>       			
        				<tbody>
                        <? foreach($listmensajes as $mensaje):
							if($mensaje['papelera']=='no'){							   
							  if($mensaje['leido']=='no'){	?> 
          						<tr style="font-weight:bold;" data-toggle="modal" data-target="#leer" id="<?=$mensaje['idmp']; ?>" onClick="leer(<?=$mensaje['idmp']; ?>)">                        
                          			<td class="mailbox-subject"><i class="fa fa-envelope-o"></i> <?=$mensaje['asunto'];?></td>
                          			<td class="mailbox-name"><?=$mensaje['destinatario'];?></td>   
                          			<td class="mailbox-date" data-toggle="tooltip" data-placement="bottom" title="<?=$mensaje['fecha_envio'];?>"><?php echo fechainteligente($mensaje['fecha_envio']);?></td>
          						</tr> 
                        <? 	  }else{?>
                        		<tr data-toggle="modal" data-target="#leer" id="<?=$mensaje['idmp']; ?>" onClick="leer(<?=$mensaje['idmp']; ?>)">
                          			<td class="mailbox-subject"><i class="fa fa-envelope-o"></i> <?=$mensaje['asunto'];?></td>
                          			<td class="mailbox-name"><?=$mensaje['destinatario'];?></td>   
                          			<td class="mailbox-date" data-toggle="tooltip" data-placement="bottom" title="<?=$mensaje['fecha_envio'];?>"><?php echo fechainteligente($mensaje['fecha_envio']);?></td>
          						</tr>
                        <? 	  }
							}endforeach;?>		
        				</tbody>      			   
                  	</table><!-- /.table -->
				</div><!-- /.mail-box-messages -->
			</div><!-- /.box-body -->
		</div><!-- /. box -->
	</div><!-- /.col -->
</div><!-- /.row -->
</section><!-- /.content -->
<div class="modal fade" id="NewMensaje" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="background-color:#3c8dbc; color:#FFF" id="header-ventana"></div>
      			<div class="modal-body">         		
            		<form action="<?=site_url('mensajeria/NewMensaje'); ?>" method="post" accept-charset="utf-8" id="newmensaje" name="newmensaje">
                        <div class="form-group" id="divasunto">
							<label class="control-label">Asunto</label>
							<input type="text" class="form-control" name="asunto" id="asunto" pattern="[0-9A-Za-z ñáéíóú/\s/-]{10,100}" value="" required oninput="check_asunto(this);"/>	
                        </div>
                        <div class="form-group" id="divdestinatario">
                    		<label class="control-label">Destinatario</label>
                      		<select class="form-control" id="destinatario" name="destinatario" required onchange="check_dest(this)">
                            	<option value="" selected>Seleccionar...</option>
                            	<? foreach($listusers as $user): 
                                	if ($user['identificacion'] != $this->session->userdata('di')){?>
                      					<option value="<?=$user['nombre'] ?>"><?=$user['nombre'] ?></option>
                        		<? }endforeach; ?>               
                      		</select>                   		
                  		</div>
                    	<div class="form-group" id="divmensaje">
                      		<label for="nombre">Mensaje</label>
                        	<textarea class="form-control" rows="3" id="mensaje" name="mensaje" value="" required oninput="check_mensaje(this)"></textarea>
                    	</div>
                        <div class="modal-footer">
                        	<button type="button" class="btn btn-danger btn-flat" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cancelar</button>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Enviar</button>
                            <input type="hidden" name="remitente" id="remitente" value="<?=$this->session->userdata('usuario');?>">
                        </div>
					</form>
      			</div>      		
    	   </div>
  	  </div>
</div>
<div class="modal fade" id="leer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="background-color:#3c8dbc; color:#FFF" id="header-ventanaleer"></div>
      			<div class="modal-body">         		
            		<section class="invoice">
          				<div class="row">
            				<div class="col-xs-12">
              					<h2 class="page-header">
                                <table border="0"><tr><td><i class="fa fa-envelope-o"></i>&nbsp;</td><td><div id="asuntomp"></div></td></tr></table>
              					</h2>
            				</div>
          				</div>          				
          				<div class="row invoice-info">
            				<div class="col-sm-4 invoice-col">
              					De
              					<address>
                					<strong><div id="remitentemp"></div></strong><br>                					
              					</address>
            				</div><!-- /.col -->
            				<div class="col-sm-4 invoice-col">
              					Para
              					<address>
                					<strong><div id="destinatariomp"></div></strong><br>                					
              					</address>
            				</div>
                            <div class="col-sm-4 invoice-col">
              					Fecha de envío
              					<address>
                					<strong><div id="fecha_enviomp"></div></strong><br>                					
              					</address>
            				</div><!-- /.col -->
          				</div>
                        <div class="row">
            				<div class="col-xs-12">              					          
              					<p class="text-muted well well-sm no-shadow" style="margin-top: 10px;" id="mensajemp"></p>
            				</div><!-- /.col -->
              			</div>
        			</section><!-- /.content -->
        			<div class="modal-footer">
        				<button type="button" class="btn btn-danger btn-flat" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cerrar</button>     				
        			</div>	
      		</div>      		
   		</div>
 	</div>
</div>
<script type="text/javascript">
function crearMensaje(){		
	$(".form-group").removeClass("has-error");
	$(".form-group").removeClass("has-success");	
	$("#asunto").val("");
  	$("#fecha").val("");  	
 	$("#mensaje").val("");	
	$('#header-ventana').html('<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title" id="myModalLabel">Redactar Mensaje</h4>');	
};

function leer(di){	
	var di = di;
	var ce = 1;	
	$('#header-ventanaleer').html('<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>				<h4 class="modal-title" id="myModalLabel"> Panel de Lectura de Mensajes</h4>');	
	var info = { id: di, ce: ce };
	$.ajax({	
			url: '<?=base_url();?>index.php/mensajeria/ConsultarMPAjax', 
			data: info,
			type: "POST",
			dataType:"json",
			success: function(resp){
				if(resp.idmp==di){
					$('#idmp').html(resp.idmp);
  					$("#asuntomp").html(resp.asunto);
  					$("#remitentemp").html(resp.remitente); 
					$("#destinatariomp").html(resp.destinatario); 
					$("#fecha_enviomp").html(resp.fecha_envio); 
					$("#mensajemp").html(resp.mensaje);												
				}else{
					alert("Error al intentar cargar los datos del mensaje");
				}
			}
	});
	
};
</script>