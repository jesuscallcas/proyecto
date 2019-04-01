<? if(isset($menu)){?>
<!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">          
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MENÚ DE NAVEGACIÓN</li>
            <? if ($menu=='contenido_dashboard') {?>
            <li class="active"><? }else{?><li><? }?><a href="<?=site_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <? if($menu=='registro-matricula' or $menu=='verificar-proceso' or $menu=='entrevistas-matricula' or $menu=='matricula-financiera' or $menu=='formulario-matricula' or $menu=='actualizar-datos'){?>             
              <li class="treeview active"><? }else{?><li class="treeview"><? }?>            
              <a href="#">
                <i class="fa fa-building-o"></i><span> Matricula</span><i class="fa fa-angle-left pull-right"></i>
				<? if ($this->session->userdata('nivel')!="Estudiante" and $nument!=0 or $numentefe!=0){?>
                	<small class="label pull-right bg-red"><?=$nument+$numentefe?></small>    
                <? }?> 
              </a>  
              <ul class="treeview-menu">
                <? if($this->session->userdata('nivel')!="Estudiante"){?>
                <? if($menu=='registro-matricula'){?>
            	<li class="active"><? }else{?><li><? }?><a href="<?=site_url('registro/index'); ?>"><i class="fa fa-file-text-o"></i> Inscripciones</a></li><? }?> 			<? if($this->session->userdata('nivel')=="Estudiante" and $formMat==0){?>
                <? if($menu=='formulario-matricula'){?>
            	<li class="active"><? }else{?><li><? }?><a href="<?=site_url('registro/Matricula'); ?>"><i class="fa fa-file-text-o"></i> Diligenciar Formulario</a></li><? }if($this->session->userdata('nivel')=="Estudiante" and $formMat==1){?>
                <? if($menu=='actualizar-datos'){?>
            	<li class="active"><? }else{?><li><? }?><a href="<?=site_url('registro/ActualizarDatos'); ?>"><i class="fa fa-file-text-o"></i>Actualizar Datos</a></li><? }?>
				<? if($menu=='verificar-proceso'){?>
            	<li class="active"><? }else{?><li><? }?><a href="<?=site_url('registro/verificar'); ?>"><i class="fa fa-refresh"></i>
 Verificar Proceso</a></li>
 				<? if($this->session->userdata('nivel')!="Estudiante"){?>
 				<? if($menu=='entrevistas-matricula'){?>
            	<li class="active"><? }else{?><li><? }?><a <? if ($nument>0 or $numentefe>0 and $this->session->userdata('nivel')!="Estudiante"){?>style="color:#F00"<? }?> href="<?=site_url('estudiantes/entrevista'); ?>"><i class="fa fa-check-square-o"></i>
 Entrevistas </a>
 				</li>
                <? if($menu=='matricula-financiera'){?>
            	<li class="active"><? }else{?><li><? }?><a href="<?=site_url('estudiantes/financiera'); ?>"><i class="fa fa-money"></i>
 Matricula Financiera</a>
 				</li>
                <? }?> 
 			  </ul>              
            </li>
			<? if($menu=='pagos'){?>              
            <li class="treeview active"><? }else{?><li class="treeview"><? }?>
              	
                <span data-toggle="tooltip" data-placement="right" title="Esta función esta en construcción"></span>              	
              	
            </li>
             <? if($this->session->userdata('nivel')!="Estudiante"){?>
             <? if($menu=='lista_estudiantes' or $menu=='lista_usuarios'){?>              
              <li class="treeview active"><? }else{?><li class="treeview"><? }?>            
              <a href="#">
                <i class="fa fa-users"></i><span> Recurso Humano</span><i class="fa fa-angle-left pull-right"></i>
              </a>  
              <ul class="treeview-menu">
                <? if($menu=='lista_estudiantes'){?>
            	<li class="active"><? }else{?><li><? }?><a href="<?=site_url('estudiantes/index'); ?>"><span class="glyphicon glyphicon-education" aria-hidden="true"></span> Estudiantes</a></li>                
                <? if($menu=='lista_usuarios'){?>
            	<li class="active"><? }else{?><li><? }?><a href="<?=site_url('usuarios/index'); ?>"><i class="fa fa-user"></i> Usuarios</a></li>              </ul>              
            </li>
            <? }?>
            <? if($this->session->userdata('nivel')!="Estudiante"){?>
            <? if($menu=='cursos'){?>              
            <li class="treeview active"><? }else{?><li class="treeview"><? }?>
              	<a href="<?=site_url('cursos/index'); ?>">
                <span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span> <span>Cursos</span>              	
              	</a>
            </li>
            <? }?>
            <? if($this->session->userdata('nivel')!="Estudiante"){?>
            <? if($menu=='lista_juicios'){?>              
            <li  }else{?><li class="treeview"><? }?>
              	<a >
                      	
              	</a>
            </li>
            <? }?>
            <? if($this->session->userdata('nivel')!="Estudiante"){?> 
            <? if($menu=='enfermedades'){?>              
            <li class="treeview active"><? }else{?><li class="treeview"><? }?>
              	<a href="<?=site_url('enfermedades/index'); ?>">
                <i class="fa fa-medkit"></i> <span>Patologías Estudiantiles</span>              	
              	</a>
            </li>
            <? }?>
            <? if($menu=='observador'){?>              
            <li class="treeview active"><? }else{?><li class="treeview"><? }?>
            <? if($this->session->userdata('nivel')!="Estudiante"){?>
              	<a href="<?=site_url('observador/index'); ?>">
            <? }else{?>
            	<a href="<?=site_url('observador/MiObservador');?>">
            <? }?>
                <i class="fa fa-book"></i> <span>Observador</span>              	
              	</a>
            </li> 
            <? if($this->session->userdata('nivel')!="Estudiante"){?> 
            
            <? }?>
            <? if($this->session->userdata('nivel')!="Estudiante"){?> 
             <? if($menu=='eventos'){?>              
             <li class="treeview active"><? }else{?><li class="treeview"><? }?>
             <a href="<?=site_url('eventos/index'); ?>">
                <i class="fa fa-calendar"></i> <span>Eventos</span>
                <? if ($numevents>0){?>
                <small class="label pull-right bg-red"><?=$numevents?></small>    
                <? }?>                
             </a>
            </li>
            <? }?> 
            <? if($menu=='bandeja'){?>              
             <li class="treeview active"><? }else{?><li class="treeview"><? }?>
             	<a href="<?=site_url('mensajeria/bandeja'); ?>">             
                <i class="fa fa-envelope"></i> <span>Mensajes</span> 
                <? if ($nummp>0){?>
                <small class="label pull-right bg-red"><?=$nummp?></small>    
                <? }?>                         
              	</a>
            </li>
            <? if($this->session->userdata('nivel')!="Estudiante"){?> 
            
            <? }?>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
<? }?>