<? 
function fechainteligente($timestamp)
{
	if (!is_int($timestamp)) 
	{
		$timestamp=strtotime($timestamp, 0);
	}
		$diff = time() - $timestamp;
		if ($diff <= 0) return 'Ahora';
		else if ($diff < 60) return "hace ".ConSoSinS(floor($diff), ' segundo(s)');
		else if ($diff < 60*60) return "hace ".ConSoSinS(floor($diff/60), ' minuto(s)');
		else if ($diff < 60*60*24) return "hace ".ConSoSinS(floor($diff/(60*60)), ' hora(s)');
		else if ($diff < 60*60*24*30) return "hace ".ConSoSinS(floor($diff/(60*60*24)), ' día(s)');
		else if ($diff < 60*60*24*30*12) return "hace ".ConSoSinS(floor($diff/(60*60*24*30)), ' mes(es)');
		else return "hace ".ConSoSinS(floor($diff/(60*60*24*30*12)), ' año(s)');
}
function ConSoSinS($val, $sentence) 
{
	if ($val > 1) return $val.str_replace(array('(s)','(es)'),array('s','es'), $sentence); 
	else return $val.str_replace('(s)', '', $sentence);
}
?>
<div class="wrapper">      
  <header class="main-header">
  	<a class="logo" href="<?=site_url('dashboard'); ?>"><img src="<?=base_url('img/bella.png'); ?>"></a>    
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->          
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button" id="menu">
            <span class="sr-only">Menú</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav"> 
              <? if($this->session->userdata('nivel')!="Estudiante"){?>  	             
              <? if ($nument>0 or $nummp>0 or $numevents>0 or $numentefe>0){?>                             
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning"><?=$nument+$nummp+$numevents+$numentefe?></span>
                </a>
                <ul class="dropdown-menu">
                  <? if ($nument+$nummp+$numevents+$numentefe==1){?>
                  <li class="header">Usted tiene <?=$nument+$nummp+$numevents+$numentefe?> notificación</li>
                  <? }if ($nument+$nummp+$numevents+$numentefe>1){?>
                  <li class="header">Usted tiene <?=$nument+$nummp+$numevents+$numentefe?> notificaciones</li>
                  <? }?>
                  <li>
                    <ul class="menu">
                    <? if ($nument>0){?>
                      <li>
                        <a href="<?=site_url('estudiantes/entrevista'); ?>">
                        <? if ($nument==1){?>
                          <i class="fa fa-check-square-o text-aqua"></i><span class="label label-info"> <?=$nument?> entrevista pendiente de programación.</span>
                        <? }if ($nument>1){?>  
                          <i class="fa fa-check-square-o text-aqua"></i><span class="label label-info"> <?=$nument?> entrevistas pendientes de programación.</span>
                        <? }?>    
                        </a>
                      </li>
                    <? }
					 if ($nummp>0){?>
                      <li>
                        <a href="<?=site_url('mensajeria/bandeja'); ?>">
                          <? if ($nummp==1){?>
                          <i class="fa fa-envelope text-green"></i><span class="label label-success"> Usted tiene <?=$nummp?> mensaje sin leer.</span>
                          <? }if ($nummp>1){?>
                          <i class="fa fa-envelope text-green"></i><span class="label label-success"> Usted tiene <?=$nummp?> mensajes sin leer.</span>
                          <? }?>
                        </a>
                      </li>
                    <? }
					if ($numevents>0){?>
                      <li>                      	
                        <a href="<?=site_url('eventos/index'); ?>">                       
                          <? if ($numevents==1){?>
                          <i class="fa fa-calendar text-yellow"></i><span class="label label-warning"> Existe <?=$numevents?> evento pendiente.</span>
                          <? }if ($numevents>1){?>
                          <i class="fa fa-calendar text-yellow"></i><span class="label label-warning"> Existen <?=$numevents?> eventos pendientes.</span>
                          <? }?>
                        </a>
                      </li>
                    <? }                    
					if ($numentefe>0){?>
                      <li>
                        <a href="<?=site_url('estudiantes/entrevista'); ?>">
                          <? if ($numentefe==1){?>
                          <i class="fa fa-check-square-o text-aqua"></i><span class="label label-info"> <?=$numentefe?> entrevista por realizar.</span>
                          <? }if ($numentefe>1){?>
                          <i class="fa fa-check-square-o text-aqua"></i><span class="label label-info"> <?=$numentefe?> entrevistas pendientes por realizar.</span>
                          <? }?>
                        </a>
                      </li>
                    <? }?>
                    </ul>
                  </li>
                </ul>
              </li>
              <? }}?>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">  
                	<? if ($fotoUser==""){$imageUser="http://localhost/icb-academico/img/est.png";}else{$imageUser=$fotoUser;}?>
                  <img src="<?=$imageUser?>" class="user-image" alt="User Image"/>              
                  <span class="hidden-xs"><?=$this->session->userdata('usuario');?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?=$imageUser?>" class="img-circle" alt="User Image"/>
                    <p>
                      <?=$this->session->userdata('usuario');?>
                      <small><?=$this->session->userdata('nivel');?></small>
                    </p>
                  </li>                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                    	<? if($this->session->userdata('nivel')=="Estudiante" and $formMat==1){?>
                      <a href="<?=site_url('registro/ActualizarDatos'); ?>" class="btn btn-info btn-flat"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Pefíl</a>
                      <? }?>
                    </div>
                    <div class="pull-right">
                      <a data-toggle="modal" data-target="#salir" class="btn btn-danger btn-flat"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Cerrar Sesión</a>                      
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
        <div class="modal fade bs-example-modal-sm" id="salir" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  			<div class="modal-dialog modal-sm">
    			<div class="modal-content">
     				<div class="modal-header" style="background-color:red; color:#FFF">
        				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        				<h4 class="modal-title" id="myModalLabel">CIERRE DE SESIÓN</h4>
      				</div>
      				<div class="modal-body" align="center">
      					<h4 style="color:red">¿Realmente desea salir?</h4>
      				</div>
      				<div class="modal-footer">
      					<button type="button" class="btn btn-danger btn-flat" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> No</button>       
      					<a href="<?=site_url('login/logout'); ?>" class="btn btn-success btn-flat"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Si</a>
      				</div>
    			</div>
  			</div>
		</div>
</header>