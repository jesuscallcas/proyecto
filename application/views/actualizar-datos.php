<section class="content">
	<div class="row">
		<div class="col-xs-12">
              <div class="box box-primary">                           
                <div class="margin"></div>
                <div class="box-body">
                <div class="stepwizard col-md-offset-3">
    					<div class="stepwizard-row setup-panel">
          					<div class="stepwizard-step">
        						<a href="#step-1" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Información Personal"><h4><i class="fa fa-user"></i></h4></a>
      						</div>
          					<div class="stepwizard-step">
        						<a href="#step-2" type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Información Familiar" disabled="disabled"><h4><i class="fa fa-users"></i></h4></a>        						
      						</div>
                            <div class="stepwizard-step">
        						<a href="#step-3" type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Información Financiera" disabled="disabled"><h4><i class="fa fa-usd"></i></h4></a>        						
      						</div>
          					<div class="stepwizard-step">
        						<a href="#step-4" type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Información Académica" disabled="disabled"><h4><span class="glyphicon glyphicon-education" aria-hidden="true"></span></h4></a>        						
      						</div>                            
        				</div>
  					</div>
            		<form action="<?=site_url('estudiantes/Est'); ?>" method="post" accept-charset="utf-8" id="newest" name="newest">
                    	<div class="row setup-content" id="step-1"> 
                        	<div class="col-md-12">  
        							<table width="100%">
        								<tr>
                                        	<td align="center">
                                            <div class="form-group">                        
                        						<table border="0">
  													<tr><td align="center"><div class="image-grabber" id="foto2"></div></td><td>&nbsp;</td><td align="center"><button type="button" class="btn btn-primary btn-flat" id="obturador2" data-toggle="modal" data-target="#fotoest" onClick="tomarFoto2()"><span class="glyphicon glyphicon-camera" aria-hidden="true"></span></button></td></tr>
                                                </table>
               								</div>
                                            </td>
                                            <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                                        </tr>                                        
                                        <tr>
            								<td>
                                            	<div class="form-group">
													<label class="control-label">Nombre(s)</label>
													<input type="text" class="form-control" name="nombreest" id="nombreest" pattern="[A-Za-z ñáéíóú/\s]{3,50}" value="" required/>										
                                                </div>
                							</td>
                                            <td>&nbsp;</td>
                                            <td>
                                            	<div class="form-group">
													<label class="control-label">Apellidos</label>
													<input type="text" class="form-control" name="apeest" id="apeest" pattern="[A-Za-z ñáéíóú/\s]{3,50}" value="" required/>										
                                                </div>
                							</td>
                                            <td>&nbsp;</td>
               								<td>
                    							<div class="form-group">
                        							<label class="control-label">Tipo Identificación</label>
													<select class="form-control" id="tidentidadest" name="tidentidadest" value="" required>
                                						<option value="" selected>Seleccionar...</option>
														<option value="Registro Civil">Registro Civil</option>
														<option value="Tarjeta Identidad">Tarjeta Identidad</option>
                                                        <option value="NUIP">NUIP</option>
														<option value="Cedula Ciudadania">Cedula Ciudadania</option>	
														<option value="Cedula Extranjeria">Cedula Extranjeria</option>
                                						<option value="Pasaporte">Pasaporte</option>											
													</select>
                                                </div>    
                  							</td>
                                            <td>&nbsp;</td>
                  							<td>
                                            	<div class="form-group">
													<label class="control-label">Identificación</label>
													<input type="text" class="form-control"  name="identidadest" id="identidadest" value="" required/>
                                               </div>   
                                            </td>
                                       </tr>
                                       <tr>
                                       		<td>
                                            	<div class="form-group">
													<label class="control-label">Lugar de Nacimiento</label>
                                                    <input type="text" class="form-control" id="lugnacest" name="lugnacest" value="" required/>
                                                </div>    
                                            </td>
                                            <td>&nbsp;</td>
                                            <td>
                                            	<div class="form-group">
													<label class="control-label">Fecha Nacimiento</label>
                                                    <div class="input-append date" id="fecha_nac">
									        				<input type="text" class="form-control" id="nacimientoest" name="nacimientoest" onchange="Calcular_Edad(this.value)" value="" required><span class="add-on"><i class="splashy-calendar_day"></i></span>
													</div>
                                                </div>     
                                            </td>
                                            <td>&nbsp;</td>
                                            <td>
                                            	<div class="form-group">
                                            		<label class="control-label">Edad</label>
													<input type="text" class="form-control" id="edadest" name="edadest" value="" required/>
                                                </div>   
                                            </td>
                                            <td>&nbsp;</td>
                                            <td>
                                            	<div class="form-group">
													<label class="control-label">Genero</label>
													<select class="form-control" id="generoest" name="generoest" value="" required>
                                            				<option value="">Seleccionar...</option>
															<option value="Femenino">Femenino</option>
															<option value="Masculino">Masculino</option>
													</select>
                                                </div>   	
                                            </td>
                                        </tr>
                                        <tr>
                                        	<td>
                                            	<div class="form-group">
                                            		<label class="control-label">Grupo Sanguineo</label>													
                                                    <select class="form-control" id="grupsangest" name="grupsangest" value="" required>
                                            			<option value="">Seleccionar...</option>
														<option value="A+">A+</option>
                                                        <option value="A-">A-</option>
                                                        <option value="B+">B+</option>
                                                        <option value="B-">B-</option>
                                                        <option value="AB+">AB+</option>	
                                                        <option value="AB-">AB-</option>	
                                                        <option value="O+">O+</option>	
                                                        <option value="O-">O-</option>					
													</select>
                                                </div>
                                            </td>
                                            <td>&nbsp;</td>
                                            <td>
                                            	<div class="form-group">
													<label class="control-label">Email</label>
													<input type="email" class="form-control" id="mailest" name="mailest" value="" required/>
                                                </div>    
                                            </td>
                                       		<td>&nbsp;</td>
                                            <td>
                                            	<div class="form-group">
													<label class="control-label">Dirección</label>
													<input type="text" class="form-control" id="direccionest" name="direccionest" required/>
                                               </div>   
                                            </td>
                                            <td>&nbsp;</td>
                                            <td>
                                            	<div class="form-group">
													<label class="control-label">Teléfono</label>
													<input type="text" class="form-control" id="telefonoest" name="telefonoest" value="" required/>
                                                </div>    
                                            </td>
                                        </tr>
                                        <tr>
                                        	<td>
                                            	<div class="form-group">
                                            		<label class="control-label">Vive con</label>
													<select class="form-control" id="vivepadres" name="vivepadres" value="" required>																	
                                                    		<option value="">Seleccionar...</option>					
                                                        	<option value="Padre">Padre</option>
															<option value="Madre">Madre</option>
                                            				<option value="Padre y Madre">Padre y Madre</option>
                                            				<option value="Otro">Otro</option>												
													</select>
                                            	</div>
                                            </td>
                                            <td>&nbsp;</td>
                                            <td>
                                            	<div class="form-group">
													<label class="control-label">Tipo de Vivienda</label>
													<select class="form-control" id="tipovivienda" name="tipovivienda" required value="" >
                            							<option value="" selected>Seleccionar...</option>
                            							<option value="Familiar">Familiar</option>
                                						<option value="Propia">Propia</option>
                                						<option value="Arrendada">Arrendada</option>
                                						<option value="Otro">Otro</option>                                						
                      								</select>	
                        						</div>   
                                            </td>
                                            <td>&nbsp;</td>
                                        	<td>
                                            	<div class="form-group">
                                            		<label class="control-label">Jornada</label>
													<select class="form-control" id="jornadaest" name="jornadaest" value="" required>
                                            			<option value="">Seleccionar...</option>
                                                        <option value="Unica">Unica</option>
														<option value="Mañana">Mañana</option>
														<option value="Tarde">Tarde</option>	
														<option value="Noche">Noche</option>												
													</select>
                                                </div>    
                                            </td>
                                            <td>&nbsp;</td>
                                            <td>
                                            	<div class="form-group">
													<label class="control-label">Grado</label>
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
													<label class="control-label">Afiliación a Salud</label>
													<input type="text" class="form-control" id="asalud" name="asalud" value="" required/>
                                                </div>    
                                            </td>
                                            <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                                         </tr>
                                        <tr>
                                            <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>                                          
                                            <td align="right">
                                            	<button class="btn btn-primary nextBtn btn-lg pull-right" type="button"><spam class='glyphicon glyphicon-chevron-right'></spam> </button>  
                                            </td>
                                        </tr>
                                        </table>
   									 </div>
                                     </div>
    								 <div class="row setup-content" id="step-2">
                                     	<div class="col-md-12">
    									<table width="100%" border="0">
        									<tr>
                                        		<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                                                <td>&nbsp;</td><td>&nbsp;</td>
                                        	</tr>                                           	
                                          	<tr>
                                            	<td>
                                            		<div class="form-group">
														<label class="control-label">Nombre del Padre</label>
														<input type="text" class="form-control" name="nombrepadre" id="nombrepadre" pattern="[A-Za-z ñáéíóú/\s]{3,50}" value="" required/>
													</div>
                                            	</td>
                                                <td>&nbsp;</td>
                                            	<td>
                                            		<div class="form-group">
														<label class="control-label">Ocupación</label>
														<input type="text" class="form-control" name="ocupapadre" id="ocupapadre" pattern="[A-Za-z ñáéíóú/\s]{3,50}" value="" required/>
													</div>	
                                            	</td>
                                                <td>&nbsp;</td>
                                                <td>
                                            	<div class="form-group">
													<label class="control-label">Nivel de Estudios Padre</label>
													<select class="form-control" id="nivelestpadre" name="nivelestpadre" required value="">
                            							<option value="" selected>Seleccionar...</option>
                            							<option value="Ninguno">Ninguno</option>
                                						<option value="Primaria">Primaria</option>
                                						<option value="Secundaria">Secundaria</option>
                                						<option value="Tecnologo">Tecnologo</option>
                                						<option value="Universitario">Universitario</option>
                                						<option value="Postgrado">Postgrado</option>
                                						<option value="Doctorado">Doctorado</option>
                      								</select>	
                        						</div>     
                                            	</td>
                                                <td>&nbsp;</td>
                                            	<td>
                                            		<div class="form-group">
														<label class="control-label">Email del Padre</label>
														<input type="email" class="form-control" id="emailpadre" name="emailpadre" value="" required/>
													</div>	
                                            	</td>
                                                <td>&nbsp;</td>
                                            	<td>
                                            		<div class="form-group">
														<label class="control-label">Teléfono del Padre</label>
														<input type="text" class="form-control" id="telefonopadre" name="telefonopadre" value="" required/>
													</div>	
                                            	</td>
                                         	</tr>
                                          	<tr>
                                            	<td>
                                            		<div class="form-group">
														<label class="control-label">Nombre de la Madre</label>
														<input type="text" class="form-control" name="nombremadre" id="nombremadre" pattern="[A-Za-z ñáéíóú/\s]{3,50}" value="" required/>
													</div>
                                            	</td>
                                                <td>&nbsp;</td>
                                            	<td>
                                            		<div class="form-group">
														<label class="control-label">Ocupación</label>
														<input type="text" class="form-control" name="ocupamadre" id="ocupamadre" pattern="[A-Za-z ñáéíóú/\s]{3,50}" value="" required/>
													</div>	
                                            	</td>
                                                <td>&nbsp;</td>
                                                <td>
                                            	<div class="form-group">
													<label class="control-label">Nivel de Estudios Madre</label>
													<select class="form-control" id="nivelestmadre" name="nivelestmadre" required value="">
                            							<option value="" selected>Seleccionar...</option>
                            							<option value="Ninguno">Ninguno</option>
                                						<option value="Primaria">Primaria</option>
                                						<option value="Secundaria">Secundaria</option>
                                						<option value="Tecnologo">Tecnologo</option>
                                						<option value="Universitario">Universitario</option>
                                						<option value="Postgrado">Postgrado</option>
                                						<option value="Doctorado">Doctorado</option>
                      								</select>	
                        						</div>     
                                            	</td>
                                                <td>&nbsp;</td>
                                            	<td>
                                            		<div class="form-group">
														<label class="control-label">Email de la Madre</label>
														<input type="email" class="form-control" id="emailmadre" name="emailmadre" value="" required/>
													</div>	 
                                            	</td>
                                                <td>&nbsp;</td>
                                            	<td>
                                            		<div class="form-group">
														<label class="control-label">Teléfono de la Madre</label>
														<input type="text" class="form-control" id="telefonomadre" name="telefonomadre" value="" required/>
													</div>	
                                            	</td>
                                         	</tr>
                                            <tr>
                                            	<td>
                                            		<div class="form-group">
														<label class="control-label">Nombre del Acudiente</label>
														<input type="text"class="form-control" name="nombreacu" id="nombreacu" pattern="[A-Za-z ñáéíóú/\s]{3,50}" value="" required/>
													</div>
                                            	</td>
                                                <td>&nbsp;</td>
                                            	<td>
                                            		<div class="form-group">
														<label class="control-label">Ocupación</label>
														<input type="text" class="form-control" name="ocupaacu" id="ocupaacu" pattern="[A-Za-z ñáéíóú/\s]{3,50}" value="" required/>
													</div>	
                                            	</td>
                                                <td>&nbsp;</td>
                                                <td>
                                            	<div class="form-group">
													<label class="control-label">Nivel de Estudios Acudiente</label>
													<select class="form-control" id="nivelestacu" name="nivelestacu" required value="">
                            							<option value="" selected>Seleccionar...</option>
                            							<option value="Ninguno">Ninguno</option>
                                						<option value="Primaria">Primaria</option>
                                						<option value="Secundaria">Secundaria</option>
                                						<option value="Tecnologo">Tecnologo</option>
                                						<option value="Universitario">Universitario</option>
                                						<option value="Postgrado">Postgrado</option>
                                						<option value="Doctorado">Doctorado</option>
                      								</select>	
                        						</div>     
                                            	</td>
                                                <td>&nbsp;</td>
                                            	<td>
                                            		<div class="form-group">
														<label class="control-label">Email del Acudiente</label>
														<input type="email" class="form-control" id="emailacu" name="emailacu" value="" required/>
													</div>	 
                                            	</td>
                                                <td>&nbsp;</td>
                                            	<td>
                                            		<div class="form-group">
														<label class="control-label">Teléfono Acudiente</label>
														<input type="text" class="form-control" id="telacu" name="telacu" value="" required/>
													</div>	
                                            	</td>
                                         	</tr>
                                            <tr>
                                          		
                                                <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                                           		<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                                        	</tr>
                                        	<tr>
                                            <tr>
                                           		<td align="left">
                                                	<button class="btn btn-primary antBtn btn-lg pull-left" type="button" ><spam class='glyphicon glyphicon-chevron-left'></spam> </button>		
                                                </td>
                                            	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>                               					<td>&nbsp;</td><td>&nbsp;</td>
                                            	<td align="right">
                                                	<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" ><spam class='glyphicon glyphicon-chevron-right'></spam> </button>		
                                                </td>
                                       		</tr>
                                    	</table>
    								</div></div>
                                    <div class="row setup-content" id="step-3">
                                     	<div class="col-md-12">
    									<table width="100%" border="0">
        									<tr>
                                        		<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                                                <td>&nbsp;</td><td>&nbsp;</td>
                                        	</tr>                                           	
                                          	<tr>                                            	
                                            	<td>
                                                <div class="form-group">
                                                	<label class="control-label">Ingresos Padres</label>
                    								<div class="input-group">
                      									<div class="input-group-addon">
                        									<i class="fa fa-usd"></i>
                      									</div>
                      									<input type="text" class="form-control" name="ingresospadres" id="ingresospadres" pattern="[0-9/\s]{6,8}" placeholder="0" value="" required onchange="total();"/>
                    								</div><!-- /.input group -->
                  								</div><!-- /.form group -->                                            	
                                            	</td>
                                                <td>&nbsp;</td>
                                                <td>
                                                <div class="form-group">
													<label class="control-label">Ingresos Acudiente</label>
													<div class="input-group">
                      									<div class="input-group-addon">
                        									<i class="fa fa-usd"></i>
                      									</div>
                      									<input type="text" class="form-control" name="ingresoacu" id="ingresoacu" pattern="[0-9/\s]{6,8}" placeholder="0" value="" required onchange="total();"/>
                    								</div>
												</div>
                                            	</td>
                                                <td>&nbsp;</td>
                                                <td>
                                                <div class="form-group">
													<label class="control-label">Otros Ingresos</label>
													<div class="input-group">
                      									<div class="input-group-addon">
                        									<i class="fa fa-usd"></i>
                      									</div>
                      									<input type="text" class="form-control" name="otrosingresos" id="otrosingresos" pattern="[0-9/\s]{6,8}" placeholder="0" value="" required onchange="total();"/>
                    								</div>
												</div>
                                            	</td>
                                                <td>&nbsp;</td>
                                                <td>
                                                <div class="form-group">
													<label class="control-label">Total Ingresos</label>
													<div class="input-group">
                      									<div class="input-group-addon">
                        									<i class="fa fa-usd"></i>
                      									</div>
                      									<input type="text" class="form-control" name="totalingresos" id="totalingresos" pattern="[0-9/\s]{6,8}" placeholder="0" value="" required/>
                    								</div>
												</div>
                                            	</td>
                                         	</tr>
                                            <tr>
                                          		
                                                <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                                           		<td>&nbsp;</td><td>&nbsp;</td>
                                        	</tr>
                                        	<tr>
                                            <tr>
                                           		<td align="left">
                                                	<button class="btn btn-primary antBtn btn-lg pull-left" type="button" ><spam class='glyphicon glyphicon-chevron-left'></spam> </button>		
                                                </td>
                                            	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>                              					
                                            	<td align="right">
                                                	<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" ><spam class='glyphicon glyphicon-chevron-right'></spam> </button>		
                                                </td>
                                       		</tr>
                                    	</table>
    								</div></div>
    								<div class="row setup-content" id="step-4">
                                    	<div class="col-md-12">
    									<table width="100%" border="0">  
        									<tr>
                                        		<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                                        	</tr>                                               	
                                          	<tr>
                                            	<td>
                                            		<div class="form-group">
                                            			<label class="control-label">Tipo Estudiante</label>
														<select class="form-control" id="tipoest" name="tipoest" value="" required onChange="Test(this)">
                                            				<option value="">Seleccionar...</option>
															<option value="Antiguo">Antiguo</option>
															<option value="Nuev@ - Cambio de Escuela">Nuev@ - Cambio de Escuela</option>
                                                            <option value="Nuev@ - Educación Inicial">Nuev@ - Educación Inicial</option>
                                            				<option value="Repitente">Repitente</option>
														</select>
                                            		</div>
                                           		</td>
                                                <td>&nbsp;</td>
                                            	<td>
                                            		<div class="form-group">
														<label class="control-label">Colegio Anterior</label>
														<input type="text" class="form-control" name="colanterior" id="colanterior" value="" required/>
													</div>	
                                            	</td>
                                            	<td>&nbsp;</td>
                                                <td>
                                                <div class="form-group" style="display:none" id="divmotret">
                      								<label>Motivo de retiro IE anterior</label>
                        							<textarea class="form-control" rows="3" id="motret" name="motret"></textarea>
                    							</div>
                                                <div class="form-group" style="display:none" id="divanoingreso">
													<label class="control-label">Año de ingreso al Colombo</label>
													<input type="text" class="form-control" name="anoingreso" id="anoingreso" value=""/>
												</div>
                                                </td> 
                                         	</tr>
                                            <tr>
                                            	<td align="left">
                                                	<button class="btn btn-primary antBtn btn-lg pull-left" type="button" ><spam class='glyphicon glyphicon-chevron-left'></spam> </button>		
                                                </td>
                                        		<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                                            	<td align="right">
                                            		<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Guardar Estudiante</button>		<input type="hidden" name="foto2" id="foto2" value="" required><input type="hidden" name="process" id="process" value=""><input type="hidden" name="menu" id="menu" value="1" required>
                                            	</td>
                                       		</tr>
                                        </table>
    								</div>
                                </div>
						</form>
              </div><!-- /.box-body -->
           </div><!-- /.box -->
		</div><!-- /.col -->
	</div><!-- /.row -->
</section><!-- /.content -->
<div class="modal fade bs-example-modal-sm" id="fotoest" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header" style="background-color:#3c8dbc; color:#FFF;">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title">Foto del estudiante</h4>
            </div>
      		<div class="modal-body" align="center"> 
            	<table width="60" border="0"><tr><td><div align="center" id="body-foto" class="image-grabber"></div></td></tr></table>
            </div>            
            <div class="modal-footer" id="footer-opc">
            	<button type="button" class="btn btn-info btn-flat" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cerrar</button>               
            </div> 
    	</div>
  	</div>
</div>
<script src="<?=base_url('plugins/say-cheese/say-cheese.js'); ?>" type="text/javascript"></script>
<script type="text/javascript">
var img2 = 0;
var sayCheese2 = new SayCheese('#foto2', { 
	snapshots: true,
	width: 120,
	height: 130
});
function tomarFoto2(){
    sayCheese2.takeSnapshot(130,120);
	return false;
};
sayCheese2.on('snapshot', function(snapshot){
	img2 = document.createElement('img');	
	$(img2).on('load', function(){		
		$('#body-foto').html(img2).show(500);
	});
	img2.src=snapshot.toDataURL('image/png');
	var src2 = img2.src;
	$('input[name="foto2"]').val(src2);
});

window.onload = function() {
	var di = <?=$idEst?>;	
		$('input[name="process"]').val(2);
		if($('#foto2').html()==''){sayCheese2.start();}	
		var info = { est: di };
		$.ajax({	
			url: '<?=base_url();?>index.php/estudiantes/ConsultarEstAjax', 
			data: info,
			type: "POST",
			dataType:"json",
			success: function(resp){
				if(resp.identificacion==di){					
					$("#identidadest").val(resp.identificacion);
  					$("#nombreest").val(resp.nombres);
					$("#apeest").val(resp.apellidos);
  					$("#tidentidadest").val(resp.tipoidentificacion);
 					$("#lugnacest").val(resp.lugnacimiento);
					$("#generoest").val(resp.genero);
 					$("#nacimientoest").val(resp.fechanac);	
					$("#edadest").val(resp.edad);
					$("#mailest").val(resp.email);
					$("#direccionest").val(resp.direccion);
					$("#telefonoest").val(resp.telefono);
					$("#gradoest").val(resp.curso);
					$("#jornadaest").val(resp.jornada);
					$("#grupsangest").val(resp.sangre);
					$("#nombrepadre").val(resp.padre);
					$("#ocupapadre").val(resp.ocupadre);
					$("#telefonopadre").val(resp.telpadre);
					$("#nombremadre").val(resp.madre);
					$("#ocupamadre").val(resp.ocumadre);
					$("#telefonomadre").val(resp.telmadre);
					$("#nombreacu").val(resp.acudiente);
					$("#ocupaacu").val(resp.ocuacu);
					$("#telacu").val(resp.telacu);
					$("#emailacu").val(resp.emailacu);
					$("#emailpadre").val(resp.emailpadre);
					$("#emailmadre").val(resp.emailmadre);
					$("#vivepadres").val(resp.vivepadres);
					$("#nivelestpadre").val(resp.nivelestpadre);
					$("#nivelestmadre").val(resp.nivelestmadre);
					$("#nivelestacu").val(resp.nivelestacu);
					$("#tipovivienda").val(resp.tipovivienda);
					$("#ingresospadres").val(resp.ingresospadres);
					$("#ingresoacu").val(resp.ingresoacu);
					$("#asalud").val(resp.asalud);
					$("#otrosingresos").val(resp.otrosingresos);
					$("#totalingresos").val(resp.totalingresos);
					$("#tipoest").val(resp.tipoest);
					if(resp.tipoest=="Nuev@ - Cambio de Escuela"){
						$("#divmotret").show();
					}
					if(resp.tipoest!="Nuev@ - Cambio de Escuela"){
						$("#divmotret").hide();
					}
					if(resp.tipoest=="Antiguo"){
						$("#divanoingreso").show();
					}
					if(resp.tipoest!="Antiguo"){
						$("#divanoingreso").hide();
					}	
					$("#colanterior").val(resp.ieanterior);
					$("#motret").val(resp.mot_ret_ie_ant);
					$("#motret").val(resp.mot_ret_ie_ant);
					$("#anoingreso").val(resp.aingreso);
					$('#EstCapturafoto').html('<img alt="" src="'+resp.foto+'" style="height:50px;width:40px">');	
				}else{
					alert("Error al intentar cargar los datos del estudiante");
				}
			}
		});
};
function Calcular_Edad(Fecha){
fecha = new Date(Fecha);
hoy = new Date();

ed = parseInt((hoy -fecha)/365/24/60/60/1000);
document.getElementById('edadest').value = ed + " años";
}
function total(){
$('input[name="totalingresos"]').val("")	
var ip = $("#ingresospadres").val();
var ia = $("#ingresoacu").val();
var oi = $("#otrosingresos").val();
if(ip==""){ip=0}
if(ia==""){ia=0}
if(oi==""){oi=0}
$('input[name="totalingresos"]').val((parseFloat(ip) + parseFloat(ia) + parseFloat(oi)));
}
function Test(sel){
	if (sel.value=="Nuev@ - Cambio de Escuela"){
		$("#divmotret").show(500);
	}
	if (sel.value=="Antiguo"){
		$("#divanoingreso").show(500);
	}
	if (sel.value!="Nuev@ - Cambio de Escuela"){
		$("#divmotret").hide(500); 
	}
	if (sel.value!="Antiguo"){		
		$("#divanoingreso").hide(500);      
	}	
}
</script>