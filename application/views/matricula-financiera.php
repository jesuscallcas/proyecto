<section class="content">
	<div class="row">
		<div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Aspirantes para legalización de Matricula Financiera</h3>
                </div><!-- /.box-header --> 
                <div class="box-body">
                   <table class="table table-bordered table-striped table-hover" id="estudiantes">
        			<thead>
          				<tr>
                        	<th>Foto</th>
            				<th>Identificación</th>
            				<th>Nombre del Aspirante</th>
                            <th>Grado al que aspira</th>
                            <th>Acudiente</th>
            				<th>Email Acudiente</th>
            				<th>Teléfono Acudiente</th>
                            <th>Estado</th>
          				</tr>
        			</thead>
        			<tbody>
        				<? foreach($listest as $est):?>                        
          				<tr data-toggle="modal" data-target="#opc-ent" id="<?=$est['identificacion']; ?>" <? if($est['pro_entrevista_mat']=="No"){?>onClick="proEnt('<?=$est['identificacion']; ?>','<?=$est['nombre_completo']; ?>','<?=$est['emailacu']; ?>');" <? }else{?> onClick="editEnt('<?=$est['identificacion']; ?>','<?=$est['nombre_completo']; ?>','<?=$est['emailacu']; ?>');" <? }?>>
                        	<td style="width:60px">
                            <? if ($est['foto']==""){$foto="http://localhost/icb-academico/img/est.png";}else{$foto=$est['foto'];}?>							
                            <a class="thumbnail"><img alt="" src="<?=$foto; ?>" style="height:50px;width:40px"></a>                            
							</td>
            				<td><?=$est['identificacion']; ?><br><p style="color:#999"><?=$est['tipoidentificacion']; ?></td>
            				<td><?=$est['nombre_completo'] ?></td>
            				<td><?=$est['curso']; ?></td>
                            <td><?=$est['nomacu']; ?></td>
                            <td><?=$est['emailacu']; ?></td>
            				<td><?=$est['telacu']; ?></td>
                            <td onmouseover="conEnt('<?=$est['identificacion']?>','<?=$est['id']; ?>');" id="<?=$est['id']; ?>"><? if($est['pro_entrevista_mat']=="Si"){?> <span class="label label-success">Entrevista Programada</span><? }else{?> <span class="label bg-red">Pendiente de Programación</span><? }?></td>
          				</tr>
          				<? endforeach; ?>
        			</tbody>
      			</table>
              </div><!-- /.box-body -->
           </div><!-- /.box -->
		</div><!-- /.col -->
	</div><!-- /.row -->
</section><!-- /.content -->
<div class="modal fade" id="progent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="background-color:#3c8dbc; color:#FFF" id="header-ventanaEnt"></div>
      			<div class="modal-body">         		
            		<form action="<?=site_url('estudiantes/ProEnt'); ?>" method="post" accept-charset="utf-8" id="newent" name="newent">
                    	<div class="form-group" id="divfechaEnt">
                        	<label>Fecha de la Entrevista</label>
                			<input type='text' class="form-control" name="nacimientoest" id="nacimientoest" required oninput="check_FechaEnt(this);"/>
              			</div>                    	
                        <div class="bootstrap-timepicker relativeWrapp" style="vertical-align: middle;" id="divhoraEnt">
                        	<label>Hora de la Entrevista</label>
					 		<input class="form-control" id="horaent" name="horaent" type="text" required oninput="check_HoraEnt(this);"/>
				 		</div>
                    	<div class="form-group" id="divobsEnt">
                      		<label>Observaciones</label>
                        	<textarea class="form-control" rows="3" id="obsent" name="obsent" required oninput="check_ObsEnt(this);"></textarea>
                    	</div>
                        	<input type="hidden" name="idEst" id="idEst" value="" required> 
                            <input type="hidden" name="emailacu" id="emailacu" value="" required> 
                            <input type="hidden" name="process" id="process" value="" required> 
                         	<input type="hidden" name="creadopor" id="creadopor" value="<?=$this->session->userdata('usuario');?>">
                         	<input type="hidden" name="creadoporid" id="creadoporid" value="<?=$this->session->userdata('di');?>">
                        <div class="modal-footer" id="progent-footer"> 
                        </div>
					</form>
      			</div>      		
    	   </div>
  	  </div>
</div>
<div class="modal fade bs-example-modal-sm" id="opc-ent" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header" style="background-color:#00A65A; color:#FFF" id="header-opc"></div>
      		<div class="modal-body" id="body-opc"></div>            
            <div class="modal-footer" id="footer-opc">            	
            </div> 
    	</div>
  	</div>
</div>
<script type="text/javascript">
function proEnt(id, nom, email){	
	$('#header-opc').html('<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title" id="myModalLabel">Opciones para entrevista</h4>');	
	$('#body-opc').html('<h4 style="color:#060;" align="center">Seleccione una opción</h4>');
	$('#footer-opc').html('<button type="button" class="btn btn-success btn-flat" data-dismiss="modal"  data-toggle="modal" data-target="#progent"><i class="fa fa-clock-o"></i> Programar</button><button type="button"  class="btn btn-info btn-flat" data-dismiss="modal" data-toggle="modal" data-target="#entrevistar" id="realizar" value="realizar"><i class="fa fa-check-square-o"></i> Entrevistar</button>');
	$('#progent-footer').html('<button type="submit" class="btn btn-primary" id="guardarObs"><i class="fa fa-check"></i> Programar</button><button type="button" class="btn btn-danger btn-flat" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cancelar</button>');
	$(".form-group").removeClass("has-error");
	$(".form-group").removeClass("has-success");		
  	$("#nacimientoest").val(""); 
	$("#horaent").val("");  	
 	$("#obsent").val("");
	$("#process").val(1);
	$("#idEst").val(id);
	$("#emailacu").val(email);
	$('#header-ventanaEnt').html('<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title" id="myModalLabel">Programar Entrevista para '+nom+'</h4>');	
};
function editEnt(id, nom, email){
	conEnt(id,'Editar');
	$('#header-opc').html('<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title" id="myModalLabel">Opciones para entrevista</h4>');	
	$('#body-opc').html('<h4 style="color:#060;" align="center">Seleccione una opción</h4>');
	$('#footer-opc').html('<button type="button" class="btn btn-success btn-flat" data-dismiss="modal"  data-toggle="modal" data-target="#progent"><i class="fa fa-clock-o"></i> Reprogramar</button><button type="button"  class="btn btn-info btn-flat" data-dismiss="modal" data-toggle="modal" data-target="#entrevistar" id="realizar" value="realizar"><i class="fa fa-check-square-o"></i> Entrevistar</button>');
	$('#progent-footer').html('<button type="submit" class="btn btn-primary" id="guardarObs"><i class="fa fa-check"></i> Reprogramar</button><button type="button" class="btn btn-danger btn-flat" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cancelar</button>');
	$(".form-group").removeClass("has-error");
	$(".form-group").removeClass("has-success");
	$("#process").val(2);	
	$("#idEst").val(id);
	$("#emailacu").val(email);
	$('#header-ventanaEnt').html('<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title" id="myModalLabel">Reprogramar entrevista para '+nom+'</h4>');	
};
function conEnt(di, cod){	
	var info = { id: di };
	$.ajax({	
			url: '<?=base_url();?>index.php/estudiantes/ConsultarEntAjax', 
			data: info,
			type: "POST",
			dataType:"json",
			success: function(resp){
				if (cod=="Editar"){
					$("#nacimientoest").val(resp.fecha); 
					$("#horaent").val(resp.hora);  	
 					$("#obsent").val(resp.observaciones);
				}else{									
					$('#'+cod).popover({
        				title: 'Fecha de la entrevista',
        				content: 'Se realizará el día '+resp.fecha+' a las '+resp.hora+' tenga en cuenta que '+resp.observaciones,
        				placement: 'left'
    				});
					$('#'+cod).popover('show');
					function cerrarpopover(){
						$('#'+cod).popover('hide');
					}
					setInterval(cerrarpopover, 10000);
				}
			},
			error: function(resp){	
					$('#'+cod).popover({
        				title: 'Entrevista Pendiente',
        				content: 'Aun no se ha programado entrevista para este aspirante.',
        				placement: 'left'
    				});
					$('#'+cod).popover('show');
					function cerrarpopover(){
						$('#'+cod).popover('hide');
					}
					setInterval(cerrarpopover, 8000);
			}
	});	
};
</script>