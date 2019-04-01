<? $this->load->view('includes/header-login'); ?>
<? $this->load->view('includes/nli_navbar'); ?>
<div>
  <div class="login">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall">
            	<div align="center">
                	<img src="<?=base_url('img/unknown.png'); ?>" alt="">
                </div>
                <div style="position: absolute;width: 50%;height: 150px;left: -70px;top: 150px;">
                <form class="form-signin" action="<?=site_url('login/Registro'); ?>" method="post" accept-charset="utf-8" id="registro">             	
                <table width="600" border="0">
  						<tr>
    						<td>
                            <div class="form-group">
								<label class="control-label">Nombre(s)</label>
								<input type="text" class="form-control" name="nombreest" id="nombreest" pattern="[A-Z ÑÁÉÍÓÚ/\s]{3,50}" value="" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required/>										
                        	</div>
                            </td>
    						<td>&nbsp;</td>
    						<td>
                            <div class="form-group">
								<label class="control-label">Apellidos</label>
								<input type="text" class="form-control" name="apeest" id="apeest" pattern="[A-Z ÑÁÉÍÓÚ/\s]{3,50}" value="" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required/>										
                        	</div>
                            </td>
                            <td>&nbsp;</td>
                            <td>
                            <div class="form-group">
                        		<label class="control-label">Tipo Identificaci&oacute;n</label>
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
                      	</tr>
                      	<tr>
                        	<td>
                            <div class="form-group">
								<label class="control-label">Identificaci&oacute;n</label>
								<input type="text" class="form-control"  name="identidadest" id="identidadest" pattern="[0-9]{6,10}" value="" required/>					
                            </div>
                            </td>
                            <td>&nbsp;</td>
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
								<input type="email" class="form-control" id="mailest" name="mailest" value="" required/>
                        	</div>                        	
                        	</td>
                        	<td>&nbsp;</td>
                        	<td>
                            <div class="form-group">
								<label class="control-label">Direcci&oacute;n</label>
								<input type="text" class="form-control" id="direccionest" name="direccionest" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required/>
                        	</div>                        	
                        	</td>
                            <td>&nbsp;</td>
                            <td>
                        	<div class="form-group">
								<label class="control-label">Tel&eacute;fono</label>
								<input type="text" class="form-control" id="telefonoest" name="telefonoest" pattern="[0-9]{6,10}" value="" required/>
                        	</div>
                            </td>
                        </tr>
                    	</table>
                        <div style="position: absolute;width: 100%;height: 150px;left: 200px;">
                			<button class="btn btn-lg btn-primary btn-block" name="enviar" type="submit" aria-label="center Align"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Registrar</button>  
                			<br />                
                			<a href="<?=site_url('login/ValidarUsuario'); ?>" class="btn btn-lg btn-primary btn-block"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Acceder</a>
                		</div>      
					</form>
                </div>
         	</div> 
         </div>         
      </div>
	</div>
</div>  
<script src="<?=base_url('plugins/jQuery/jQuery-2.1.3.min.js'); ?>"></script>
<script src="<?=base_url('dist/js/validar.js'); ?>"></script>
<script src="<?=base_url('plugins/pnotify/pnotify.custom.min.js'); ?>" type="text/javascript"></script>
<div class="main-footer">
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
  <p align="center"><strong>Copyright &copy; 2017 <a href="http://#">SG-Acad&eacute;mico</a>.</strong> Todos los derechos reservados.</p>
</div>

