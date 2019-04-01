<section class="content">
	<div class="row">
		<div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Listado de Juicios</h3>
                </div><!-- /.box-header -->                
                <div class="margin">
                	<div class="btn-group">
                    	<button type="button" class="btn btn-primary btn-flat dropdown-toggle" data-toggle="dropdown"><spam class='glyphicon glyphicon-cog'></spam> Acciones <span class="caret"></span><span class="sr-only">Menú</span></button>	
                      	<ul class="dropdown-menu" role="menu">
                        	<li><a data-toggle="modal" data-target="#nuevo-juicio"><i class="fa fa-legal"></i> Nuevo Juicio</a></li>						
                            <li class="divider"></li>
                        	<li><a href="#"><spam class='glyphicon glyphicon-print'></spam> Imprimir Listado</a></li>
                        	<li class="divider"></li>
                        	<li><a href="#"><spam class='glyphicon glyphicon-export'></spam> Importación Masiva</a></li>
                      	</ul>
                    </div>
               	</div>
                <div class="box-body">
                   <table class="table table-bordered table-striped table-hover" id="usuarios">
        			<thead>
          				<tr>
                        	<th>Juicio</th>
            				<th>tipo</th>
                            <th>Creado por</th>
            				<th>Editado por</th>
          				</tr>
        			</thead>
        			<tbody>
        				<? foreach($listjuicios as $juicio): ?>
          				<tr data-toggle="modal" data-target="#opc-juicio" id="<?=$juicio['id']; ?>" onClick="opcJuicio('<?=$juicio['id']; ?>')">
                        	<td><?=$juicio['juicio']; ?></td>
            				<td><?=$juicio['tipo']; ?></td>
            				<td><?=$juicio['creado_por']; ?></td>
                            <td><?=$juicio['editado_por']; ?></td>
          				</tr>
          				<? endforeach; ?>
        			</tbody>
      			</table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
		</div><!-- /.col -->
	</div><!-- /.row -->
</section><!-- /.content -->
<div class="modal fade" id="nuevo-juicio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="background-color:#3c8dbc; color:#FFF" id="header-new">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title" id="myModalLabel">Nuevo Juicio</h4>
            </div>
      		<div class="modal-body">  
        		<form action="<?=site_url('juicios/NuevoJuicio'); ?>" method="post" accept-charset="utf-8">
                	<div class="form-group" id="divtjuicio">
                      	<label>Tipo de Juicio</label>
                      	<select class="form-control" id="tjuicio" name="tjuicio" onChange="tJuicio(this)" required>
                      		<option value="" selected>Seleccionar...</option>
                        	<option value="1">Convivencia Social</option>
                        	<option value="2">Estimulos</option>
                        	<option value="3">Correctivos</option> 
                            <option value="4">Académicos</option>                       
                      	</select>
                    </div>
                    <div class="form-group" style="display:none" id="select-academico">
                      	<label>Desempeño</label>
                      	<select class="form-control" id="desempeno" name="desempeno">                      		
                        	<option value="Bajo">Bajo</option>
                        	<option value="Básico">Básico</option>
                        	<option value="Alto">Alto</option> 
                            <option value="Superior">Superior</option>                       
                      	</select>
                    </div>
                    <div class="form-group" id="divjuicio">
                      	<label for="nombre">Descripción del Juicio</label>
                        <textarea class="form-control" rows="3" id="juicio" name="juicio" required onChange="check_juicio(this)"></textarea>
                    </div>
                	<div class="modal-footer">
        				<button type="button" class="btn btn-danger btn-flat" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cancelar</button> 
                		<button type="submit"  class="btn btn-success btn-flat"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear</button>					</div>
                </form>
      		</div>      		
    	</div>
  	</div>
</div>
<div class="modal fade" id="edit-juicio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="background-color:#3c8dbc; color:#FFF" id="header-edit">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close" onClick="limpiar()"><span aria-hidden="true">&times;</span></button>				<h4 class="modal-title" id="myModalLabel">Editar Juicio</h4>
            </div>
      		<div class="modal-body">  
        		<form action="<?=site_url('juicios/EditarJuicio'); ?>" method="post" accept-charset="utf-8">
                	<div class="form-group" id="edivtjuicio">
                      	<label>Tipo de Juicio</label>
                      	<select class="form-control" id="etjuicio" name="etjuicio" onChange="etJuicio(this)" required>
                        	<option value="1">Convivencia Social</option>
                        	<option value="2">Estimulos</option>
                        	<option value="3">Correctivos</option> 
                            <option value="4">Académicos</option>                       
                      	</select>
                    </div>                    
                    <div class="form-group" style="display:none" id="eselect-academico">
                      	<label>Desempeño</label>
                      	<select class="form-control" id="edesempeno" name="edesempeno">                      		
                        	<option value="Bajo">Bajo</option>
                        	<option value="Básico">Básico</option>
                        	<option value="Alto">Alto</option> 
                            <option value="Superior">Superior</option>                       
                      	</select>
                    </div>
                    <div class="form-group" id="edivjuicio">
                      	<label for="nombre">Descripción del Juicio</label>
                        <textarea class="form-control" rows="3" id="ejuicio" name="ejuicio" required onChange="echeck_juicio(this)"></textarea>                      	
                    </div>
                    <div class="modal-footer">
        				<button type="button" class="btn btn-danger btn-flat" data-dismiss="modal" onClick="limpiar()"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cancelar</button>
                        <input type="hidden" name="eid" id="eid" value=""> 
                		<button type="submit"  class="btn btn-success btn-flat"><span class='glyphicon glyphicon-edit' aria-hidden="true"></span> Editar</button>
            		</div>
                </form>
      		</div>      		
    	</div>
  	</div>
</div>
<div class="modal fade bs-example-modal-sm" id="elim-juicio" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header" style="background-color:red; color:#FFF">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title" id="myModalLabel">Eliminar Juicio</h4>
      		</div>
      		<div class="modal-body" id="body-elim">
            	<h4 style="color:red;" align="center">¿Realmente desea eliminar este Juicio?</h4>
            </div>
            <form action="<?=site_url('juicios/EliminarJuicioAjax'); ?>" method="post" accept-charset="utf-8"> 
                <input type="hidden" name="di" id="di" value="">
            <div class="modal-footer">
        		<button type="button" class="btn btn-danger btn-flat" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cancelar</button> 
                <button type="submit"  class="btn btn-success btn-flat" id="confElimJuicio"><spam class='glyphicon glyphicon-ok' aria-hidden="true"></spam> Eliminar</button>
            </div> 
          </form>     		
    	</div>
  	</div>
</div>
<div class="modal fade bs-example-modal-sm" id="opc-juicio" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header" style="background-color:#00A65A; color:#FFF" id="header-opc">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>	</button><h4 class="modal-title" id="myModalLabel"> Acciones para Juicios</h4>
            </div>
      		<div class="modal-body" id="body-opc">
            	<h4 style="color:#060;" align="center">¿Qué desea hacer con este juicio?</h4>
            </div>            
            <div class="modal-footer" id="footer-opc">
            	<button type="button" class="btn btn-success btn-flat" data-dismiss="modal"  data-toggle="modal" data-target="#edit-juicio" id="edit-opc" value="edit-opc"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar</button>
                <button type="button"  class="btn btn-danger btn-flat" data-dismiss="modal" data-toggle="modal" data-target="#elim-juicio" id="elim-opc" value="elim-opc"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Eliminar</button>
            </div> 
    	</div>
  	</div>
</div>
<script type="text/javascript">
function tJuicio(sel) {
	if (sel.value=="4"){
		$("#select-academico").show(500);
	}
	if (sel.value!="4"){
		$("#select-academico").hide(500);         
	}
	if(sel.value==""){
       	$("#divtjuicio").addClass("has-error");
	}else{
		$("#divtjuicio").removeClass("has-error");		
		$("#divtjuicio").addClass("has-success");
		$("#select-academico").addClass("has-success");
	}
}
function etJuicio(sel) {
	if (sel.value=="4"){
		$("#eselect-academico").show(500);
	}
	if (sel.value!="4"){
		$("#eselect-academico").hide(500);         
	}
	if(sel.value==""){
       	$("#edivtjuicio").addClass("has-error");
	}else{
		$("#edivtjuicio").removeClass("has-error");		
		$("#edivtjuicio").addClass("has-success");
		$("#eselect-academico").addClass("has-success");
	}	
}

function opcJuicio(di){	
	var di = di;	
	$( "#edit-opc" ).click(function() {	
		var info = { juicio: di };
		$.ajax({	
			url: '<?=base_url();?>index.php/juicios/ConsultarJuicioAjax', 
			data: info,
			type: "POST",
			dataType:"json",
			success: function(resp){
				$("#etjuicio").val(resp.cod);
				$("#ejuicio").val(resp.juicio);
				$("#edesempeno").val(resp.desempeno);
				$("#eid").val(resp.id);
				if(resp.cod==4){
					$("#eselect-academico").show(500);
				}
				if(resp.cod!=4){
					$("#eselect-academico").hide(500);
				}				
			}
		});
	});
	$( "#elim-opc" ).click(function() {		
		$('input[name="di"]').val(di);
	});
};

function limpiar(){	
	delete json;
	$("#etjuicio").val('');
	$("#ejuicio").val('');
	$("#edesempeno").val('');
}
</script>