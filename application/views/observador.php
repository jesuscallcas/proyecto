<? if(isset($est)){ ?>
	<script type="text/javascript">	
		window.onload = consulta(<?=$est?>);		
	</script> 
<? }?>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-body">                	
                <!-- Custom Tabs (Pulled to the right) -->
              		<div class="nav-tabs-custom">
                		<ul class="nav nav-tabs pull-right">
                  			<li class="active"><a href="#tab_1" data-toggle="tab"><span class="glyphicon glyphicon-education" aria-hidden="true"></span> Información del Estudiante</a></li>
                            <li><a href="#tab_2" data-toggle="tab"><span class="glyphicon glyphicon-retweet" aria-hidden="true"></span> Convivencia</a></li>
                  			<li><a href="#tab_3" data-toggle="tab"><span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span> Correctivos</a></li>
                            <li><a href="#tab_4" data-toggle="tab"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> Estimulos</a></li>
                  			<li class="col-lg-5 col-xs-18 pull-left header">
                            	<div>
              						<input type="text" name="q" id="est" class="col-md-18 form-control" placeholder="Digite el nombre o apellidos del estudiante..." autocomplete="off" onKeyDown="buscar();"/>				<!--
              						<span class="input-group-btn">
                                    <button name='search' id='search-btn' class="btn btn-flat" onClick="consulta();"><i class="fa fa-search"></i></button>
              						</span>-->
            					</div>
                            </li>
                		</ul>
                	<div class="tab-content">
                  		<div class="tab-pane active" id="tab_1">
                        <div class="alert alert-info alert-dismissible" role="alert" id="inicial"><h4><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span> Digite el nombre o apellidos del estudiante para realizar la consulta</h4></div>
                        <div style="display:none" id="loader" align="center">
                        	<img alt="" src="http://localhost/icb-academico/upload/loader.gif" style="height:200px;width:230px">
                        </div>
                        	<div style="display:none" id="div-info-est">
                    		<section class="invoice">
          						<div class="row">
            						<div class="col-xs-12">
              							<h2 class="page-header">
                                			<table width="100" border="0"><tr><td><div align="center" id="fotoEst" class="image-grabber">                                            	<!--<img alt="" src="http://localhost/bella/upload/fotos/estudiantes/unknown.png" style="height:110px;width:100px">-->
                                            </div></td></tr></table>
              							</h2>
            						</div>
          						</div>          				
          						<div class="row invoice-info">
            						<div class="col-sm-3 invoice-col">Nombre(s) y Apellidos:
              							<address>
                							<strong><div id="nest"></div></strong>                					
              							</address>
            						</div>
            						<div class="col-sm-3 invoice-col">Identificación:
              							<address>
                							<strong><div id="idest"></div></strong>
              							</address>
            						</div>
                                    <div class="col-sm-3 invoice-col">Tipo de documento:
              							<address>
                							<strong><div id="tidest"></div></strong>
              							</address>
            						</div>
                                    <div class="col-sm-3 invoice-col">Fecha de Nacimiento:
              							<address>
                							<strong><div id="fnacest"></div></strong>               					
              							</address>
            						</div>
                                    <div class="col-sm-3 invoice-col">Edad:
              							<address>
                							<strong><div id="eest"></div></strong>               					
              							</address>
            						</div>
                            		<div class="col-sm-3 invoice-col">Genero:
              							<address>
                							<strong><div id="genest"></div></strong>               					
              							</address>
            						</div>
                                    <div class="col-sm-3 invoice-col">Tipo de Sangre:
              							<address>
                							<strong><div id="tsanest"></div></strong>               					
              							</address>
            						</div>                                                                     
                                    <div class="col-sm-3 invoice-col">Curso:
              							<address>
                							<strong><div id="cest"></div></strong>                					
              							</address>
            						</div>
                                    <div class="col-sm-3 invoice-col">Jornada:
              							<address>
                							<strong><div id="jest"></div></strong>                					
              							</address>
            						</div> 
                                    <div class="col-sm-3 invoice-col">Email:
              							<address>
                							<strong><div id="emailest"></div></strong>                					
              							</address>
            						</div>
                                    <div class="col-sm-3 invoice-col">Teléfono:
              							<address>
                							<strong><div id="telest"></div></strong>                					
              							</address>
            						</div>
                                    <div class="col-sm-3 invoice-col">Dirección:
              							<address>
                							<strong><div id="direst"></div></strong>                					
              							</address>
            						</div>
                                    <div class="col-sm-3 invoice-col">Acudiente:
              							<address>
                							<strong><div id="acuest"></div></strong>                					
              							</address>
            						</div>
                                    <div class="col-sm-3 invoice-col">Teléfono del Acudiente:
              							<address>
                							<strong><div id="telacuest"></div></strong>                					
              							</address>
            						</div>  
                                    <div class="col-sm-3 invoice-col">Email del Acudiente:
              							<address>
                							<strong><div id="emailacuest"></div></strong>                					
              							</address>
            						</div>
                                    <div class="col-sm-3 invoice-col">Ocupación del Acudiente:
              							<address>
                							<strong><div id="ocuacuest"></div></strong>                					
              							</address>
            						</div>                                                                                          
          						</div>                                
        					</section><!-- /.content -->  
                          </div>              
                  		</div><!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_2">
                        	<div id="content_tab_2"></div>
                        	<section class="content">
                            	<div class="row">
                                	<div class="col-md-12">
                                    	<ul class="timeline" id="item2">                                        	
                                        </ul>
                                    </div>
                                </div>
                                <div align="center" style="display:none" id="newconv"><button type="button" class="btn btn-info btn-flat"  onClick="ObsNew('1');">Añadir Registro</button></div>
                            </section>
                  		</div><!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_3">
                        	<div id="content_tab_3"></div>
                        	<section class="content">
                            	<div class="row">
                                	<div class="col-md-12">
                                    	<ul class="timeline" id="item3">                                        	
                                        </ul>
                                    </div>
                                </div>
                                <div align="center" style="display:none" id="newcorr"><button type="button" class="btn btn-info btn-flat"  onClick="ObsNew('2');">Añadir Registro</button></div>
                            </section>
                  		</div><!-- /.tab-pane -->
                  		<div class="tab-pane" id="tab_4">
                        	<div id="content_tab_4"></div>
                        	<section class="content">
                            	<div class="row">
                                	<div class="col-md-12">
                                    	<ul class="timeline" id="item4">                                        	
                                        </ul>
                                    </div>
                                </div>
                                <div align="center" style="display:none" id="newesti"><button type="button" class="btn btn-info btn-flat"  onClick="ObsNew('3');">Añadir Registro</button></div>
                            </section>
                  		</div><!-- /.tab-pane -->
                	</div><!-- /.tab-content -->
              </div><!-- nav-tabs-custom -->
          </div><!-- /.box-body -->
       </div><!-- /.box -->
	</div><!-- /.col -->
   </div><!-- /.row -->
</section><!-- /.content -->
<div class="modal fade bs-example-modal-sm" id="consulta-est" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header" style="background-color:red; color:#fff">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title" id="myModalLabel"><strong>Error</strong></h4>
      		</div>
      		<div class="modal-body" id="body-consulta" align="center">             
            </div>
            <div class="modal-footer">
        		<button type="button" class="btn btn-danger btn-flat" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cerrar</button> 
            </div> 
    	</div>
  	</div>
</div>
<div class="modal fade" id="observacion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="background-color:#3c8dbc; color:#FFF" id="header-ventanaObs"></div>
      			<div class="modal-body">         		
            		<form action="<?=site_url('observador/Observacion'); ?>" method="post" accept-charset="utf-8" id="formObs" name="formObs">
                    	<div class="form-group">
							<label class="control-label">Fecha</label>
							<input type="text" class="form-control" id="nacimientoest" name="nacimientoest" required>
                        </div>     
                        <div class="form-group">
                    		<label class="control-label">Tipo de Observación</label>
                      		<input type="text" class="form-control" name="TObs1" id="TObs1" disabled/> 
                  		</div>
                    	<div class="form-group">
                      		<label for="nombre">Descripción</label>
                        	<textarea class="form-control" rows="3" id="DesObs" name="DesObs" required></textarea>
                    	</div>
                        	<input type="hidden" name="idEst" id="idEst" value="" required> 
                        	<input type="hidden" name="creadopor" id="creadopor" value="<?=$this->session->userdata('usuario');?>">
                        	<input type="hidden" name="creadoporid" id="creadoporid" value="<?=$this->session->userdata('di');?>" required>
                        	<input type="hidden" name="process" id="process" value="" required>
                            <input type="hidden" name="TObs" id="TObs" value="" required>
                        <div class="modal-footer">
                        	<button type="submit" class="btn btn-primary" id="guardarObs"><i class="fa fa-check"></i> Guardar</button>
                        	<button type="button" class="btn btn-danger btn-flat"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cancelar</button>
                        </div>
					</form>
      			</div>      		
    	   </div>
  	  </div>
</div>
<div class="modal fade bs-example-modal-sm" id="elim-obs" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header" style="background-color:red; color:#FFF" id="header-elimObs"></div>
      		<div class="modal-body" id="body-elimObs"></div>
             <form action="<?=site_url('observador/eoa'); ?>" method="post" accept-charset="utf-8"> 
                <input type="hidden" name="di" id="di" value="">
                <input type="hidden" name="est" id="est" value="">
            <div class="modal-footer">
            	<button type="submit"  class="btn btn-success btn-flat"><spam class='glyphicon glyphicon-ok' aria-hidden="true"></spam> Eliminar</button>
        		<button type="button" class="btn btn-danger btn-flat" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cancelar</button> 
            </div> 
          </form>  
    	</div>
  	</div>
</div>
<script type="text/javascript">
function consulta(item){	
		var di = item.value;	
		$("#inicial").hide(50);
		$("#loader").show(500);
		$("#idEst").val(di);
		var info  = { est: di };		
		$.ajax({	
			url: '<?=base_url();?>index.php/estudiantes/ConsultarEstAjax',
			cache: false, 
			data: info,
			type: "POST",
			dataType:"json",
			success: function(resp){
				$("#loader").hide(500);
				$("#div-info-est").show(500);
				$("#idest").html(resp.identificacion);
  				$("#nest").html(resp.nomcompleto);
  				$("#tidest").html(resp.tipoidentificacion); 				
				$("#genest").html(resp.genero);	
				$("#eest").html(resp.edad);
				$("#cest").html(resp.curso);
				$("#jest").html(resp.jornada);	
				$("#emailest").html(resp.email);
				$("#telest").html(resp.telefono);
				$("#direst").html(resp.direccion);		
				$("#tsanest").html(resp.sangre);
				$("#fnacest").html(resp.fechanac);
				$("#acuest").html(resp.acudiente);
				$("#telacuest").html(resp.telacu);
				$("#emailacuest").html(resp.emailacu);
				$("#ocuacuest").html(resp.ocuacu);
				if(resp.foto==null){
					$("#fotoEst").html('<img alt="" src="http://localhost/icb-academico/img/est.png" style="height:110px;width:100px">');
				}else{
					$("#fotoEst").html('<img alt="" src="'+resp.foto+'" style="height:110px;width:100px">');
				}
				$("#item2").hide(250);
				$("#item2").empty();	
				$("#item3").hide(250);
				$("#item3").empty();
				$("#item4").hide(250);
				$("#item4").empty();
				$.ajax({	
					url: '<?=base_url();?>index.php/estudiantes/coca',
					cache: false,
					data: info,
					type: "POST",
					dataType:"json",
					success: function(conv){
						if(conv != null && $.isArray(conv)){
							$("#content_tab_2").hide(250);
							$("#item2").show(250);                		
                			$.each(conv, function(index1, value1){              
							if(conv.length > index1+1){
                    			$("#item2").append('<li class="time-label" id="'+value1.id+'a"><span class="bg-yellow" id="'+value1.id+'b">'+value1.fecha+'</span></li><li><i class="fa fa-comments bg-yellow" id="'+value1.id+'c"></i><div class="timeline-item" id="'+value1.id+'d"><span class="time"><i class="fa fa-clock-o"></i> '+value1.fecha+'</span><h3 class="timeline-header"><a href="#">'+value1.creadopor+'</a></h3><div class="timeline-body">'+value1.descripcion+'</div><div class="timeline-footer"><a class="btn btn-primary btn-xs" onClick="ObsEdit('+value1.id+','+resp.identificacion+');"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar</a>&nbsp;<a class="btn btn-danger btn-xs" onClick="ObsElim('+value1.id+','+resp.identificacion+');"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Eliminar</a>&nbsp;<a class="btn btn-success btn-xs" onClick="ObsConvAdj('+value1.id+');"><span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span> Adjuntar soporte</a></div></div></li>');
							}
							if(conv.length == index1+1){
								$("#item2").append('<li class="time-label" id="'+value1.id+'a"><span class="bg-yellow" id="'+value1.id+'"b>'+value1.fecha+'</span></li><li><i class="fa fa-comments bg-yellow" id="'+value1.id+'c"></i><div class="timeline-item" id="'+value1.id+'d"><span class="time"><i class="fa fa-clock-o"></i> '+value1.fecha+'</span><h3 class="timeline-header"><a href="#">'+value1.creadopor+'</a></h3><div class="timeline-body">'+value1.descripcion+'</div><div class="timeline-footer"><a class="btn btn-primary btn-xs" onClick="ObsEdit('+value1.id+','+resp.identificacion+');"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar</a>&nbsp;<a class="btn btn-danger btn-xs" onClick="ObsElim('+value1.id+','+resp.identificacion+');"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Eliminar</a>&nbsp;<a class="btn btn-success btn-xs" onClick="ObsConvAdj('+value1.id+');"><span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span> Adjuntar soporte</a></div></div></li><li><i class="fa fa-clock-o bg-gray"></i></li>');
							}
                			});
            			}
						if(conv == ''){
							$("#item2").hide(250);
							$("#item2").empty();
							$("#content_tab_2").show(250);
							$("#content_tab_2").html('<div class="alert alert-info alert-dismissible" role="alert"><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span> El estudiante '+resp.nomcompleto+' no posee registros de convivencia</div>');
						}
					},
					error: function(conv){
						$("#item2").hide(250);
						$("#item2").empty();
						$("#content_tab_2").show(250);
						$("#content_tab_2").html('<div class="alert alert-info alert-dismissible" role="alert"><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span> El estudiante '+resp.nomcompleto+' no posee registros de convivencia</div>');
					}
				});	
				$.ajax({	
					url: '<?=base_url();?>index.php/estudiantes/cocra', 
					cache: false,
					data: info,
					type: "POST",
					dataType:"json",
					success: function(corr){
						if(corr != null && $.isArray(corr)){
							$("#content_tab_3").hide(250);
							$("#item3").show(250);
                		/* Recorremos tu respuesta con each */
                			$.each(corr, function(index2, value2){
                    		/* Vamos agregando a nuestra tabla las filas necesarias */
							if(corr.length > index2+1){
                    			$("#item3").append('<li class="time-label" id="'+value2.id+'a"><span class="bg-yellow" id="'+value2.id+'b">'+value2.fecha+'</span></li><li><i class="fa fa-comments bg-yellow" id="'+value2.id+'c"></i><div class="timeline-item" id="'+value2.id+'d"><span class="time"><i class="fa fa-clock-o"></i> '+value2.fecha+'</span><h3 class="timeline-header"><a href="#">'+value2.creadopor+'</a></h3><div class="timeline-body">'+value2.descripcion+'</div><div class="timeline-footer"><a class="btn btn-primary btn-xs" onClick="ObsEdit('+value2.id+','+resp.identificacion+');"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar</a>&nbsp;<a class="btn btn-danger btn-xs" onClick="ObsElim('+value2.id+','+resp.identificacion+');"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Eliminar</a>&nbsp;<a class="btn btn-success btn-xs" onClick="ObsConvAdj('+value2.id+');"><span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span> Adjuntar soporte</a></div></div></li>');
							}
							if(corr.length == index2+1){
								$("#item3").append('<li class="time-label" id="'+value2.id+'a"><span class="bg-yellow" id="'+value2.id+'"b>'+value2.fecha+'</span></li><li><i class="fa fa-comments bg-yellow" id="'+value2.id+'c"></i><div class="timeline-item" id="'+value2.id+'d"><span class="time"><i class="fa fa-clock-o"></i> '+value2.fecha+'</span><h3 class="timeline-header"><a href="#">'+value2.creadopor+'</a></h3><div class="timeline-body">'+value2.descripcion+'</div><div class="timeline-footer"><a class="btn btn-primary btn-xs" onClick="ObsEdit('+value2.id+','+resp.identificacion+');"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar</a>&nbsp;<a class="btn btn-danger btn-xs" onClick="ObsElim('+value2.id+','+resp.identificacion+');"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Eliminar</a>&nbsp;<a class="btn btn-success btn-xs" onClick="ObsConvAdj('+value2.id+');"><span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span> Adjuntar soporte</a></div></div></li><li><i class="fa fa-clock-o bg-gray"></i></li>');
							}
                			});
            			}
						if(corr == ''){
							$("#item3").hide(250);
							$("#item3").empty();
							$("#content_tab_3").show(250);
							$("#content_tab_3").html('<div class="alert alert-info alert-dismissible" role="alert"><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span> El estudiante '+resp.nomcompleto+' no posee registros de tipo correctivo</div>');
						}
					},
					error: function(corr){
						$("#item3").hide(250);
						$("#item3").empty();
						$("#content_tab_3").show(250);
						$("#content_tab_3").html('<div class="alert alert-info alert-dismissible" role="alert"><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span> El estudiante '+resp.nomcompleto+' no posee registros de tipo correctivo</div>');
					}
				});	
				$.ajax({	
					url: '<?=base_url();?>index.php/estudiantes/coea', 
					cache: false,
					data: info,
					type: "POST",
					dataType:"json",
					success: function(est){
						if(est != null && $.isArray(est)){
							$("#content_tab_4").hide(250);
							$("#item4").show(250);                		
                			$.each(est, function(index3, value3){                    		
							if(est.length > index3+1){
                    			$("#item4").append('<li class="time-label" id="'+value3.id+'a"><span class="bg-yellow" id="'+value3.id+'b">'+value3.fecha+'</span></li><li><i class="fa fa-comments bg-yellow" id="'+value3.id+'c"></i><div class="timeline-item" id="'+value3.id+'d"><span class="time"><i class="fa fa-clock-o"></i> '+value3.fecha+'</span><h3 class="timeline-header"><a href="#">'+value3.creadopor+'</a></h3><div class="timeline-body">'+value3.descripcion+'</div><div class="timeline-footer"><a class="btn btn-primary btn-xs" onClick="ObsEdit('+value3.id+','+resp.identificacion+');"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar</a>&nbsp;<a class="btn btn-danger btn-xs" onClick="ObsElim('+value3.id+','+resp.identificacion+');"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Eliminar</a>&nbsp;<a class="btn btn-success btn-xs" onClick="ObsConvAdj('+value3.id+');"><span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span> Adjuntar soporte</a></div></div></li>');
							}
							if(est.length == index3+1){
								$("#item4").append('<li class="time-label" id="'+value3.id+'a"><span class="bg-yellow" id="'+value3.id+'"b>'+value3.fecha+'</span></li><li><i class="fa fa-comments bg-yellow" id="'+value3.id+'c"></i><div class="timeline-item" id="'+value3.id+'d"><span class="time"><i class="fa fa-clock-o"></i> '+value3.fecha+'</span><h3 class="timeline-header"><a href="#">'+value3.creadopor+'</a></h3><div class="timeline-body">'+value3.descripcion+'</div><div class="timeline-footer"><a class="btn btn-primary btn-xs" onClick="ObsEdit('+value3.id+','+resp.identificacion+');"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar</a>&nbsp;<a class="btn btn-danger btn-xs" onClick="ObsElim('+value3.id+','+resp.identificacion+');"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Eliminar</a>&nbsp;<a class="btn btn-success btn-xs" onClick="ObsConvAdj('+value3.id+');"><span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span> Adjuntar soporte</a></div></div></li><li><i class="fa fa-clock-o bg-gray"></i></li>');
							}
                			});
            			}
						if(est == ''){
							$("#item4").hide(250);
							$("#item4").empty();
							$("#content_tab_4").show(250);
							$("#content_tab_4").html('<div class="alert alert-info alert-dismissible" role="alert"><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span> El estudiante '+resp.nomcompleto+' no posee registros de tipo estimulo</div>');
						}
					},
					error: function(est){
						$("#item4").hide(250);
						$("#item4").empty();
						$("#content_tab_4").show(250);
						$("#content_tab_4").html('<div class="alert alert-info alert-dismissible" role="alert"><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span> El estudiante '+resp.nomcompleto+' no posee registros de tipo estimulo</div>');
					}
				});			
			}/*,
			error: function(resp){
					$("#loader").hide(500);
					$('#body-consulta').html('<h5>El documento de identidad <strong>'+di+'</strong> no existe en la base de datos.</h5>');	
					$('#consulta-est').modal('show');
			}*/
		});
		$("#newconv").show(250);	
		$("#newcorr").show(250);	
		$("#newesti").show(250);
};
function buscar(){
	$("#est").typeahead({		
		ajax: {
              url: '<?=base_url();?>index.php/estudiantes/autocompletar',	
              method: 'post',
              triggerLength: 1,
        }, 
		displayField: "nombre_completo",
		valueField: "identificacion",   
        onSelect: consulta
     });
}
function ObsEdit(id,idest){	
	$("#header-ventanaObs").html('<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>				<h4 class="modal-title" id="myModalLabel"> Editar Observación</h4>');
	var data  = { id: id };
	$.ajax({	
			url: '<?=base_url();?>index.php/observador/cobs',
			cache: false, 
			data: data,
			type: "POST",
			dataType:"json",
			success: function(resp){
				$("#nacimientoest").val(resp.fecha);
  				$("#DesObs").val(resp.descripcion);
				if (resp.tipo==1){$("#TObs").val('Convivencia');}
				if (resp.tipo==2){$("#TObs").val('Correctivo');} 
				if (resp.tipo==3){$("#TObs").val('Estimulo');} 
			}
	});
	$('#observacion').modal('show');
}
function ObsNew(tipo){	
	$("#header-ventanaObs").html('<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title" id="myModalLabel"> Nueva Observación</h4>');
	$("#nacimientoest").val('');
  	$("#DesObs").val('');
	$("#process").val(1);
	if (tipo==1){$("#TObs").val('Convivencia');$("#TObs1").val('Convivencia');}
	if (tipo==2){$("#TObs").val('Correctivo');$("#TObs1").val('Correctivo');} 
	if (tipo==3){$("#TObs").val('Estimulo');$("#TObs1").val('Estimulo');} 
	$('#observacion').modal('show');
}
function ObsElim(id,est){
	$("#header-elimObs").html('<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>				<h4 class="modal-title" id="myModalLabel"> Eliminar Observación</h4>');
	$("#body-elimObs").html('<h4 style="color:red;" align="center">¿Realmente desea eliminar esta observación?</h4>');	
	$('#di').val(id);
	$('#est').val(est);
	$('#elim-obs').modal('show');	
}
</script>