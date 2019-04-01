<section class="content">
	<div class="row">
		<div class="col-xs-12">
              <div class="box box-primary">                
                <div class="box-body">                	
                <!-- Custom Tabs (Pulled to the right) -->
              		<div class="nav-tabs-custom">
                		<ul class="nav nav-tabs pull-right">
                  			<li class="active"><a href="#tab_1" data-toggle="tab"><i class="fa fa-refresh"></i> Proceso de Matricula</a></li>
                  			<li class="col-lg-5 col-xs-18 pull-left header">
                            	<div>
              						<input type="text" name="q" id="est" class="col-md-18 form-control" placeholder="CONSULTAR..." autocomplete="off" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"  onKeyDown="buscar();"/>			
            					</div>
                            </li>
                		</ul>
                	<div class="tab-content">
                  		<div class="tab-pane active" id="tab_1">
                        	<div class="alert alert-info alert-dismissible" role="alert" id="inicial"><h4><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span> Digite el nombre o apellidos del estudiante para realizar la consulta</h4>
                            </div>
                            <div class="row margin">
                    			<div class="col-sm-12" style="display:none" id="div-estado-matricula" align="center">
                                	<table width="100%" border="0">
  										<tr>
    										<td align="center"><img alt="" src="http://localhost/icb-academico/img/registro1.png" style="height:200px;width:200px"></td>							
                                            <td align="center" id="formmatri"></td>							
											<td align="center" id="entrevista"></td>						
                                            <td align="center" id="financiera"></td>
  										</tr>
                                        <tr>
    										<td align="center"><h4>REGISTRO</h4></td>
                                            <td align="center"><h4>FORMULARIO DE MATRICULA</h4></td>
                                            <td align="center"><h4>ENTREVISTA</h4></td>
                                            <td align="center"><h4>MATRICULA FINANCIERA</h4></td>
  										</tr>
									</table>
                            	</div>
                            </div>
                            <div style="display:none" id="loader" align="center">
                        		<img alt="" src="http://localhost/icb-academico/upload/loader.gif" style="height:200px;width:230px">
                        	</div>      
                  		</div><!-- /.tab-pane -->
                    </div> 
                </div><!-- nav-tabs-custom -->
          </div><!-- /.box-body -->
       </div><!-- /.box -->
	</div><!-- /.col -->
   </div><!-- /.row -->
</section><!-- /.content -->
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
				new PNotify({
					styling: 'bootstrap3',					
            		title:'Proceso de Matricula',
            		text: 'Proceso de matricula del estudiante '+resp.nombres+' '+resp.apellidos+'.',
					type: 'success'	
        		});					
				$("#div-estado-matricula").show(500);
			}
		 });
		 $.ajax({	
				url: '<?=base_url();?>index.php/registro/FMat', 
				cache: false,
				data: info,
				type: "POST",
				dataType:"json",
				success: function(fmat){
					if(fmat=="Si"){
						$("#formmatri").html('<img alt="" src="http://localhost/icb-academico/img/matricula1.png" style="height:200px;width:200px">');
					}else{
						$("#formmatri").html('<img alt="" src="http://localhost/icb-academico/img/matricula2.png" style="height:200px;width:200px">')
						}
				}
		 });
		 $.ajax({	
				url: '<?=base_url();?>index.php/registro/ConEnt', 
				cache: false,
				data: info,
				type: "POST",
				dataType:"json",
				success: function(ent){
					if(ent=="Si"){
						$("#entrevista").html('<img alt="" src="http://localhost/icb-academico/img/entrevista1.png" style="height:200px;width:200px">');
					}else{
						$("#entrevista").html('<img alt="" src="http://localhost/icb-academico/img/entrevista2.png" style="height:200px;width:200px">');
						}
				}
		 });
		 $.ajax({	
				url: '<?=base_url();?>index.php/registro/ConFin', 
				cache: false,
				data: info,
				type: "POST",
				dataType:"json",
				success: function(fin){
					if(fin=="Si"){
						$("#financiera").html('<img alt="" src="http://localhost/icb-academico/img/financiera1.png" style="height:200px;width:200px">');
					}else{
						$("#financiera").html('<img alt="" src="http://localhost/icb-academico/img/financiera2.png" style="height:200px;width:200px">');
						}
				}
		 });
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
</script>