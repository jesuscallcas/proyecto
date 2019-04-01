<section class="content">
	<div class="row">
    	<? if($this->session->userdata('nivel')!="Estudiante"){?>
    	<div class="col-lg-3 col-xs-6">
        	<div class="small-box bg-aqua">
            	<div class="inner">
                	<h3><?=$numest; ?></h3><p>Estudiantes</p>
                </div>
                <div class="icon">
                	<span class="glyphicon glyphicon-education" aria-hidden="true"></span> 
                </div>
                <a href="<?=site_url('estudiantes/index'); ?>" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
             </div>
		</div>
        <? }else{?>
        <div class="col-lg-3 col-xs-6">
        	<div class="small-box bg-aqua">
            	<div class="inner">
                	<h3>Informes</h3><p>Académicos</p>
                </div>
                <div class="icon">
                	<span class="glyphicon glyphicon-education" aria-hidden="true"></span> 
                </div>
                <a href="<?=site_url('estudiantes/index'); ?>" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
             </div>
		</div>
        <? }if($this->session->userdata('nivel')!="Estudiante"){?>
        <div class="col-lg-3 col-xs-6">
        	<div class="small-box bg-green">
            	<div class="inner">
                	<h3><?=$numRegMat?></h3><p>Registros de Matricula</p>
                </div>
               	<div class="icon">
               		<i class="ion ion-stats-bars"></i>
               	</div>
               	<a href="#" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
           	</div>
    	</div>
        <? }else{?>
        <div class="col-lg-3 col-xs-6">
        	<div class="small-box bg-green">
            	<div class="inner">
                	<h3>Historial</h3><p> de Pagos</p>
                </div>
               	<div class="icon">
               		<i class="fa fa-usd"></i> 
               	</div>
               	<a href="#" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
           	</div>
    	</div>
        <? }if($this->session->userdata('nivel')!="Estudiante"){?>
        <div class="col-lg-3 col-xs-6">
        	<div class="small-box bg-yellow">
            	<div class="inner">
                	<h3><?=$usuarios; ?></h3><p>Usuarios Registrados</p>
                </div>
                <div class="icon">
                	<i class="ion ion-person-add"></i>
                </div>
                <a href="<?=site_url('usuarios/index'); ?>" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
         	</div>
		</div>
        <? }else{?>
		<div class="col-lg-3 col-xs-6">
        	<div class="small-box bg-yellow">
            	<div class="inner">
                	<h3>Mi Perfíl</h3><p>Curriculum</p>
                </div>
                <div class="icon">
                	<i class="fa fa-user"></i> 
                </div>
                <a href="<?=site_url('usuarios/index'); ?>" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
         	</div>
		</div>
		<? }if($this->session->userdata('nivel')!="Estudiante"){?>
        <div class="col-lg-3 col-xs-6">
			<div class="small-box bg-red">
    			<div class="inner">
              		<h3><?=$juicios; ?></h3><p>Matricula Oficial</p>
             	</div>
          		<div class="icon">
           			<i class="fa fa-legal"></i>
                </div>
                <a href="<?=site_url('juicios/index'); ?>" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
        <? }else{?>
        <div class="col-lg-3 col-xs-6">
			<div class="small-box bg-red">
    			<div class="inner">
              		<h3>Observador</h3><p>Estudiantil</p>
             	</div>
          		<div class="icon">
           			<i class="fa fa-legal"></i>
                </div>
                <a href="<?=site_url('juicios/index'); ?>" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
        <? }?>
	</div>
	<div class="row">
    	<? if($this->session->userdata('nivel')!="Estudiante"){?>
		 <section class="col-lg-6 connectedSortable">
			<div class="box box-primary">
				<div class="box-header">
                	<i class="fa fa-inbox"></i><h3 class="box-title"> Matricula x Año</h3>
                </div>
				<div class="tab-content no-padding">
                	<div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 335px;"></div>
                	<div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
             	</div>
       		 </div>
            </section>
            <? }else{?>
             <section class="col-lg-6 connectedSortable">
			<div class="box box-primary">
				<div class="box-header">
					<i class="fa fa-bell-o"></i><h3 class="box-title">Notificaciones</h3>	
               	</div>
              	<div class="box-body">
               		<ul class="todo-list">
                     <? if($nummp!=0){
					 	if ($nummp=1){?>   
						<li class="alert alert-info" role="alert"><i class="fa fa-envelope"></i> Usted tiene <?=$nummp?> mensaje sin leer.</li>	
                     <? }if ($nummp>1){?>   
                     	<li class="alert alert-info" role="alert"><i class="fa fa-envelope"></i> Usted tiene <?=$nummp?> mensajes sin leer.</li>
                     <? }}foreach($EntEst as $fhe): 
					 	$hoy = strtotime(date("m/d/Y"));
						$fin = strtotime($fhe['fecha']);
						if($hoy <= $fin){?>       				
                        <li class="alert alert-info" role="alert"><i class="fa fa-check-square-o"></i> Su entrevista para el proceso de matricula es el día <?=$fhe['fecha'];?> a las <?=$fhe['hora'];?>.</li> 	<? }endforeach; 
						if($formMat==0){?>
						<li class="alert alert-error" role="alert"><i class="fa fa-file-text-o"></i> Por favor diligencie el formulario de matricula para continuar con el proceso.</li>		
						<? }?>
                        
                  	</ul>
                </div>
			</div><!-- /.box -->
		</section><!-- /.content -->
        <? }?>
        <section class="col-lg-6 connectedSortable">
			<div class="box box-primary">
				<div class="box-header">
					<i class="fa fa-calendar"></i><h3 class="box-title">Eventos recientes</h3>	
               	</div>
              	<div class="box-body">
               		<ul class="todo-list">
                     <? foreach($listevent as $event): 
					 	$hoy = strtotime(date("m/d/Y"));
						$fin = strtotime($event['finalizacion']);
						if($hoy <= $fin){	 ?>                     
						<li class="alert alert-success" role="alert" data-toggle="tooltip" data-placement="top" title="<?=$event['descripcion']; ?>"><i class="fa fa-calendar"></i> <?=$event['titulo']; ?> - Inicia el <?=$event['inicio']; ?> y Finaliza el <?=$event['finalizacion']; ?>           					
                    	</li>	
                     <? }endforeach; ?>                    	
                  	</ul>
                </div>
			</div><!-- /.box -->
		</section><!-- /.content -->
     </div><!-- /.content-wrapper -->
</section><!-- /.content -->
<? if($this->session->userdata('mb')){ ?>
       <script type="text/javascript">
			function success(){
				new PNotify({
					styling: 'bootstrap3',
					title:'Acceso a SG-Académico',
        			text: '<?=$this->session->userdata('mb')?>',
					type: 'success'	
     			});
			};
			window.onload = success;	
		</script>
	<? }
	$this->session->unset_userdata('mb');
	?>      