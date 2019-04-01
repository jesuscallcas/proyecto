<section class="content">
	<div class="row">
		<div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Listado de Usuarios</h3>
                </div><!-- /.box-header -->                
                <div class="margin">
                	<div class="btn-group">
                    	<button type="button" class="btn btn-primary btn-flat dropdown-toggle" data-toggle="dropdown"><spam class='glyphicon glyphicon-cog'></spam> Acciones <span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>	
                      	<ul class="dropdown-menu" role="menu">
                        	<li><a data-toggle="modal" data-target="#nuevo-usuario" onClick="cargarheader()"><spam class='glyphicon glyphicon-user'></spam> Nuevo Usuario</a></li>						<li class="divider"></li>
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
                        	<th>Foto</th>
            				<th>Identificación</th>
            				<th>Nombres</th>
                            <th>Nivel de Acceso</th>
            				<th>Email</th>
            				<th>Teléfono</th>
          				</tr>
        			</thead>
        			<tbody>
        				<? foreach($listusers as $user): ?>
          				<tr data-toggle="modal" data-target="#opc-user" id="<?=$user['identificacion']; ?>" onClick="opcUser('<?=$user['identificacion']; ?>','<?=$user['nombre']; ?>')">
                        	<td style="width:60px">
                            <? if ($user['foto']==""){$foto="http://localhost/icb-academico/img/est.png";}else{$foto=$user['foto'];}?>	
                            <a class="cbox_single thumbnail"><img alt="" src="<?=$foto; ?>" style="height:50px;width:40px"></a>
							</td>
            				<td><?=$user['identificacion']; ?><br><small style="color:#999"><?=$user['tdoc']; ?></small></td>
            				<td><?=$user['nombre']; ?></td>
            				<td><?=$user['nivel']; ?></td>
                            <td><?=$user['email']; ?></td>
            				<td><?=$user['tel']; ?></td>
          				</tr>
          				<? endforeach; ?>
        			</tbody>
      			</table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
		</div><!-- /.col -->
	</div><!-- /.row -->
</section><!-- /.content -->
<div class="modal fade" id="nuevo-usuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="background-color:#3c8dbc; color:#FFF" id="header-new"></div>
      		<div class="modal-body">  
        		<form action="<?=site_url('usuarios/NuevoUsuario'); ?>" method="post" accept-charset="utf-8" id="FormNewUser">
                	<table width="100%" border="0">
  					<tr>
    					<td width="300">
                		<div class="form-group" id="divtdoc">
                      		<label class="control-label">Tipo de Documento</label>
                      		<select class="form-control" id="tdoc" name="tdoc" required onchange="gettdoc(this);">
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
    					<td width="300">
                        <div class="form-group" id="divdiusuario">
                      		<label class="control-label">Documento de Identidad</label>
                      		<input type="text" class="form-control" id="diusuario" name="diusuario" pattern="[0-9]{6,10}" required oninput="check_diusuario(this);">
                    	</div>
                        </td>
                    </tr>
                    <tr>
                    	<td width="300">
                        <div class="form-group" id="divnomusuario">
                      		<label class="control-label">Nombres y Apellidos</label>
                      		<input type="text" class="form-control" id="nomusuario" name="nomusuario" pattern="[A-Za-z ñáéíóú/\s]{10,100}" required oninput="check_nomuser(this);">
                    	</div>
                        </td>
                        <td>&nbsp;</td>
    					<td width="300">
                        <div class="form-group" id="divgenero">
                      		<label class="control-label">Genero</label>
                      		<select class="form-control" id="genero" name="genero" required onchange="getgenero(this);">
                            	<option value="" selected>Seleccionar...</option>
                        		<option value="Femenino">Femenino</option>
                        		<option value="Masculina">Masculino</option>
                      		</select>
                    	</div>
                        </td>
                     </tr>
                     <tr> 
                        <td width="300">
                        <div class="form-group" id="divemailusuario">
                      		<label class="control-label">Email</label>
                      		<input type="text" class="form-control" id="emailusuario" name="emailusuario" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required oninput="check_emailuser(this);">
                    	</div>
                        </td>
                        <td>&nbsp;</td>
    					<td width="300">
                        <div class="form-group" id="divteluser">
                      		<label class="control-label">Teléfono</label>
                      		<input type="text" class="form-control" name ="teluser" id="teluser" pattern="[0-9]{7,10}" required oninput="check_tel(this);">
                    	</div>
                        </td>
                     </tr>
                     <tr>
                        <td width="300">
                        <div class="form-group" id="divpass">
                      		<label class="control-label">Password</label>
                      		<input type="password" class="form-control" id="pass" name="pass" pattern="[A-Za-z0-9-_/./-/\s]{3,100}" required oninput="check_pass(this);">
                    	</div> 
                        </td>
                        <td>&nbsp;</td>
    					<td width="300" valign="top">
                        <div class="form-group" id="divnivelacceso">
                      		<label class="control-label">Nivel de Acceso</label>
                      		<select class="form-control" id="nivelacceso" name="nivelacceso" required onchange="getnivelacceso(this);">
                            	<option value="" selected>Seleccionar...</option>
                        		<option value="Administrador(a)">Administrador(a)</option>
                        		<option value="Docente">Docente</option>
                        		<option value="Coordinador">Coordinador(a)</option> 
                                <option value="Trabajador(a) social y/o Sicologo(a)">Trabajador(a) social y/o Sicologo(a)</option>                         		<option value="Secretaria Académica">Secretaria Académica</option>
                                <option value="Estudiante">Estudiante</option>                              
                            </select>
                    	</div>                       
                        </td>
                    </tr>   
                    <tr>
                        <td align="center">
                        <div class="form-group">                        
                        	<table border="0">
  								<tr><td align="center"><div class="image-grabber" id="foto"></div></td><td>&nbsp;</td><td align="center"><button type="button" class="btn btn-primary btn-flat" id="obturador" onClick="tomarFoto()"><span class="glyphicon glyphicon-camera" aria-hidden="true"></span></button></td></tr>
                            </table>
               			</div> 
                        </td>
                        <td>&nbsp;</td>
    					<td align="center" valign="top">
                        	<table width="60" border="0">
  								<tr><td><div class="image-grabber" id="Capturafoto" style="display:none"></div></td></tr>
							</table>
                        </td>
                    </tr> 
                </table>   
                 <div class="modal-footer">
        			<button type="button" class="btn btn-danger btn-flat" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cancelar</button> 
                	<input type="hidden" name="foto" id="foto" value="">
                	<button type="submit"  class="btn btn-success btn-flat"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear</button>
            	</div>
              </form>
      		</div>      		
    	</div>
  	</div>
</div>
<div class="modal fade" id="edit-user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="background-color:#3c8dbc; color:#FFF" id="header-edit"></div>
      		<div class="modal-body">  
        		<form action="<?=site_url('usuarios/EditarUsuario'); ?>" method="post" accept-charset="utf-8">
                <table width="100%" border="0">
  					<tr>
    					<td width="300">
                        <div class="form-group">
                      		<label class="control-label">Tipo de Documento</label>
                      		<select class="form-control" id="etdoc" name="etdoc" value="">
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
    					<td width="300">
                        <div class="form-group">
                      		<label class="control-label">Documento de Identidad</label>
                      		<input type="text" class="form-control" id="di" name="di" disabled>
                            <input type="hidden" id="ediusuario" name="ediusuario" value="">
                    	</div>
                        </td>
  					</tr>
  					<tr>
    					<td width="300">
                        <div class="form-group">
                      		<label class="control-label">Nombres y Apellidos</label>
                      		<input type="text" class="form-control" id="enomusuario" name="enomusuario" value="" required>
                    	</div>
                        </td>
                        <td>&nbsp;</td>
    					<td width="300">
                        <div class="form-group">
                      		<label class="control-label">Genero</label>
                      		<select class="form-control" id="egenero" name="egenero" value="">                            	
                        		<option value="Femenino">Femenino</option>
                        		<option value="Masculino">Masculino</option>
                      		</select>
                    	</div>
                       </td>
  					</tr>
  					<tr>
    					<td width="300">
                        <div class="form-group">
                      		<label class="control-label">Email</label>
                      		<input type="email" class="form-control" id="eemailusuario" name="eemailusuario" value="" required>
                    	</div>                                                 
                        </td>
                        <td>&nbsp;</td>
    					<td width="300">
                        <div class="form-group">
                      		<label class="control-label">Teléfono</label>
                      		<input type="text" class="form-control" name="eteluser" id="eteluser" pattern="[0-9]{7,10}" value="" oninput="check_tel(this);" required>
                    	</div>
                        </td>
  					</tr>
  					<tr>
    					<td width="300">
                         <div class="form-group">
                      		<label class="control-label">Password</label>
                      		<input type="password" class="form-control" id="epass" name="epass" pattern="[A-Za-z0-9-_/./-/\s]{3,100}" value="" oninput="check_pass(this);"><small style="color:#999">Si no desea cambiar el Password, dejelo en blanco.</small>
                    	</div>          
                        </td>
                        <td>&nbsp;</td>
    					<td width="300" valign="top">
                        <div class="form-group">
                      		<label class="control-label">Nivel de Acceso</label>
                      		<select class="form-control" id="enivelacceso" name="enivelacceso" value="">
                        		<option value="" selected>Seleccionar...</option>
                        		<option value="Administrador(a)">Administrador(a)</option>
                        		<option value="Docente">Docente</option>
                        		<option value="Coordinador">Coordinador(a)</option> 
                                <option value="Trabajador(a) social y/o Sicologo(a)">Trabajador(a) social y/o Sicologo(a)</option>                         		<option value="Secretaria Académica">Secretaria Académica</option>
                                <option value="Estudiante">Estudiante</option>
                      		</select>
                    	</div>                  
                        </td>
  					</tr>                    
  					<tr>
    					<td align="center">
                        	<div class="form-group">                        
                        		<table border="0">
  									<tr><td align="center"><div class="image-grabber" id="foto1"></div></td><td>&nbsp;</td><td align="center"><button type="button" class="btn btn-primary btn-flat" id="obturador1" onClick="tomarFoto1()"><span class="glyphicon glyphicon-camera" aria-hidden="true"></span></button></td></tr>
                            	</table>
               				</div> 
                        </td>
                        <td>&nbsp;</td>
    					<td align="center" valign="top">
                        	<table width="60" border="0">
  								<tr><td><div class="image-grabber" id="eCapturafoto"></div></td></tr>
							</table>
                        </td>
  					</tr>                                      
				</table>
                <div class="modal-footer">
        			<button type="button" class="btn btn-danger btn-flat" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cancelar</button>
                	<input type="hidden" name="efoto" id="efoto" value=""> 
                	<button type="submit"  class="btn btn-success btn-flat"><span class='glyphicon glyphicon-edit' aria-hidden="true"></span> Editar</button>
           		</div>
             </form>
      	</div>      		
    </div>
  </div>
</div>
<div class="modal fade bs-example-modal-sm" id="elim-user" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header" style="background-color:red; color:#FFF">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>				<h4 class="modal-title" id="myModalLabel">Eliminar Usuario</h4>
      		</div>
      		<div class="modal-body" id="body-elim"></div>
            <form action="<?=site_url('usuarios/EliminarUsuarioAjax'); ?>" method="post" accept-charset="utf-8"> 
                <input type="hidden" name="di" id="di" value="">
            <div class="modal-footer">
        		<button type="button" class="btn btn-danger btn-flat" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cancelar</button> 
                <button type="submit"  class="btn btn-success btn-flat" id="confElimUser"><spam class='glyphicon glyphicon-ok' aria-hidden="true"></spam> Eliminar</button>
            </div> 
          </form>     		
    	</div>
  	</div>
</div>
<div class="modal fade bs-example-modal-sm" id="opc-user" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header" style="background-color:#00A65A; color:#FFF" id="header-opc"></div>
      		<div class="modal-body" id="body-opc"></div>            
            <div class="modal-footer" id="footer-opc">
            	<button type="button" class="btn btn-success btn-flat" data-dismiss="modal"  data-toggle="modal" data-target="#edit-user" id="edit-opc" value="edit-opc"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar</button>
                <button type="button"  class="btn btn-danger btn-flat" data-dismiss="modal" data-toggle="modal" data-target="#elim-user" id="elim-opc" value="elim-opc"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Eliminar</button>
            </div> 
    	</div>
  	</div>
</div>
<script src="<?=base_url('plugins/say-cheese/say-cheese.js'); ?>" type="text/javascript"></script>
<script type="text/javascript">
var img1 = 0;
var img = 0;

var sayCheese = new SayCheese('#foto', { 
	snapshots: true,
	width: 120,
	height: 130
});
var sayCheese1 = new SayCheese('#foto1', { 
	snapshots: true,
	width: 120,
	height: 130
});

function tomarFoto(){
    sayCheese.takeSnapshot(100,110);
	return false;
};
function tomarFoto1(){
    sayCheese1.takeSnapshot(100,110);
	return false;
};
sayCheese.on('snapshot', function(snapshot){
	img = document.createElement('img');
	
	$(img).on('load', function(){
		$('#Capturafoto').html(img).show(500);
	});
	img.src=snapshot.toDataURL('image/png');
	var src = img.src;
	$('input[name="foto"]').val(src);
});
sayCheese1.on('snapshot', function(snapshot){
	img1 = document.createElement('img');
	
	$(img1).on('load', function(){
		$('#eCapturafoto').html(img1).show(500);
	});
	img1.src=snapshot.toDataURL('image/png');
	var src1 = img1.src;
	$('input[name="efoto"]').val(src1);
});	

function cargarheader(){
	if($('#foto').html()==''){sayCheese.start();}
	if($('input[name="nomusuario"]').val()==''){
		$('#header-new').html('<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title" id="myModalLabel">Nuevo Usuario</h4>');
	}
	$("input[name=nomusuario]").change(function(){
		var user = $('input[name="nomusuario"]').val();
		if(user==''){
			$('#header-new').html('<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title" id="myModalLabel">Nuevo Usuario</h4>');
		}else{
		$('#header-new').html('<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title" id="myModalLabel">'+user+'</h4>');	
		}
	});
};

function opcUser(diuser,nomuser){	
	var di = diuser;
	var nom = nomuser;
	$('#header-opc').html('<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>	</button><h4 class="modal-title" id="myModalLabel"> '+nom+'</h4>');
	$('#body-opc').html('<h4 style="color:#060;" align="center">¿Qué desea hacer con el usuario de '+nom+'?</h4>');
	
	$("#edit-opc").click(function() {
		if($('#foto1').html()==''){sayCheese1.start();}	
		$('#header-edit').html('<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>				<h4 class="modal-title" id="myModalLabel">Editar '+nom+'</h4>');	
		var info = { usuario: di };
		$.ajax({	
			url: '<?=base_url();?>index.php/usuarios/ConsultarUsuarioAjax', 
			data: info,
			type: "POST",
			dataType:"json",
			success: function(resp){
				if(resp.di==di){
					$("#etdoc").val(resp.tdoc);
					$("#enomusuario").val(resp.nom);
					$("#eemailusuario").val(resp.email);
					$("#enivelacceso").val(resp.nivel);
					$("#di").val(resp.di);
					$("#ediusuario").val(resp.di);
					$("#egenero").val(resp.gen);
					$("#eteluser").val(resp.tel);
					$("#epass").val('');
					if (resp.foto==null){
						var foto = 'http://localhost/icb-academico/img/est.png';
						$('#eCapturafoto').html('<img alt="" src="'+foto+'" style="height:110px;width:100px">');
					}else{
						$('#eCapturafoto').html('<img alt="" src="'+resp.foto+'" style="height:110px;width:100px">');	
					}
				}else{
					alert("Error al intentar cargar los datos del usuario");
				}
			}
		});
	});
	$( "#elim-opc" ).click(function() {
		$('#body-elim').html('<h4 style="color:red;" align="center">¿Realmente desea eliminar el usuario de '+nom+'?</h4>');	
		$('input[name="di"]').val(di);
	});
};
</script>