 <?php
$this->load->view('includes/header'); 
$this->load->view('includes/navbar'); 
$this->load->view('includes/sidebar');   
?>
<div class="content-wrapper">
<?
if(isset($menu)){
	if ($menu=='contenido_dashboard') {?>		
		<section class="content-header">
			<h1><i class="fa fa-dashboard"></i>Panel de control<small>SG - Académico</small></h1>
    		<ol class="breadcrumb">
        		<li><a href="<?=site_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
        		<li class="active">Panel de control</li>
    		</ol>
		</section>
<?	$this->load->view('contenido_dashboard');
	}
	if ($menu=='lista_usuarios' and $this->session->userdata('nivel')!="Estudiante") {?>
		<section class="content-header">
			<h1><spam class='glyphicon glyphicon-user'></spam> Recurso Humano<small>Usuarios</small></h1>
    		<ol class="breadcrumb">
        		<li><a href="<?=site_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
                <li><a href=""><i class="fa fa-users"></i> Recurso Humano</a></li>
        		<li class="active">Lista de usuarios</li>
    		</ol>
		</section>
<?	$this->load->view('lista_usuarios'); 
	}
	if ($menu=='lista_juicios' and $this->session->userdata('nivel')!="Estudiante") {?>
		<section class="content-header">
			<h1><i class="fa fa-legal"></i> Juicios<small>valorativos</small></h1>
    		<ol class="breadcrumb">
        		<li><a href="<?=site_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
                <li><a href=""><i class="fa fa-legal"></i> Juicios valorativos</a></li>
        		<li class="active">Lista de juicios</li>
    		</ol>
		</section>
<?		$this->load->view('lista_juicios'); 
	}
	if ($menu=='lista_estudiantes' and $this->session->userdata('nivel')!="Estudiante") {?>
		<section class="content-header">
			<h1><span class="glyphicon glyphicon-education" aria-hidden="true"></span> Recurso Humano<small>Estudiantes</small></h1>
    		<ol class="breadcrumb">
        		<li><a href="<?=site_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
                <li><a href=""><i class="fa fa-users"></i> Recurso Humano</a></li>
        		<li class="active">Lista de estudiantes</li>
    		</ol>
		</section>
<?		$this->load->view('lista_estudiantes'); 
	}
	if ($menu=='eventos' and $this->session->userdata('nivel')!="Estudiante") {?>
		<section class="content-header">
			<h1><i class="fa fa-calendar"></i> Eventos</h1>
    		<ol class="breadcrumb">
        		<li><a href="<?=site_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
                <li class="active"><a href=""><i class="fa fa-calendar"></i> Eventos</a></li>        		
    		</ol>
		</section>
<?		$this->load->view('eventos'); 
	}	
	if ($menu=='cursos' and $this->session->userdata('nivel')!="Estudiante") {?>
		<section class="content-header">
			<h1><span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span> Cursos</h1>
    		<ol class="breadcrumb">
        		<li><a href="<?=site_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
                <li class="active"><a href=""><span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span> Cursos</a></li>        		
    		</ol>
		</section>
<?		$this->load->view('cursos'); 
	}
	if ($menu=='bandeja') {?>
		<section class="content-header">
			<h1><i class="fa fa-envelope"></i> Servicio de mensajeria</h1>
    		<ol class="breadcrumb">
        		<li><a href="<?=site_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
                <li class="active"><a href=""><i class="fa fa-envelope"></i> Mensajeria</a></li>        		
    		</ol>
		</section>
<?		$this->load->view('bandeja'); 
	}	
	if ($menu=='enviados') {?>
		<section class="content-header">
			<h1><i class="fa fa-envelope"></i> Servicio de mensajeria</h1>
    		<ol class="breadcrumb">
        		<li><a href="<?=site_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
                <li class="active"><a href=""><i class="fa fa-envelope"></i> Mensajeria</a></li>        		
    		</ol>
		</section>
<?		$this->load->view('enviados'); 
	}
	if ($menu=='papelera') {?>
		<section class="content-header">
			<h1><i class="fa fa-envelope"></i> Servicio de mensajeria</h1>
    		<ol class="breadcrumb">
        		<li><a href="<?=site_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
                <li class="active"><a href=""><i class="fa fa-envelope"></i> Mensajeria</a></li>        		
    		</ol>
		</section>
<?		$this->load->view('papelera'); 
	}
	if ($menu=='observador') {?>
		<section class="content-header">
			<h1><i class="fa fa-book"></i> Observador</h1>
    		<ol class="breadcrumb">
        		<li><a href="<?=site_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
                <li class="active"><a href=""><i class="fa fa-book"></i> Observador</a></li>        		
    		</ol>
		</section>
<?		$this->load->view('observador'); 
	}
	if ($menu=='registro-matricula' and $this->session->userdata('nivel')!="Estudiante") {?>
		<section class="content-header">
			<h1><i class="fa fa-file-text-o"></i> Inscripciones para Matricula</h1>
    		<ol class="breadcrumb">
        		<li><a href="<?=site_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
                <li class="active"><a href=""><i class="fa fa-file-text-o"></i> Activar Registro</a></li>        		
    		</ol>
		</section>
<?		$this->load->view('activar-formulario'); 
	}
	if($menu=='verificar-proceso' and $this->session->userdata('nivel')=="Estudiante"){?>
		<section class="content-header">
			<h1><i class="fa fa-refresh"></i> Verificar proceso de matricula</h1>
    		<ol class="breadcrumb">
        		<li><a href="<?=site_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
                <li class="active"><a href=""><i class="fa fa-refresh"></i> Verificar Proceso</a></li>        		
    		</ol>
		</section>
<?		$this->load->view('verificar-mi-proceso'); 
	}if($menu=='verificar-proceso' and $this->session->userdata('nivel')!="Estudiante"){?>
		<section class="content-header">
			<h1><i class="fa fa-refresh"></i> Verificar proceso de matricula</h1>
    		<ol class="breadcrumb">
        		<li><a href="<?=site_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
                <li class="active"><a href=""><i class="fa fa-refresh"></i> Verificar Proceso</a></li>        		
    		</ol>
		</section>
<?		$this->load->view('verificar-proceso'); 	
	}if ($menu=='entrevistas-matricula' and $this->session->userdata('nivel')!="Estudiante") {?>
		<section class="content-header">
			<h1><i class="fa fa-check-square-o"></i> Entrevistas para Matricula</h1>
    		<ol class="breadcrumb">
        		<li><a href="<?=site_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
                <li class="active"><a href=""><i class="fa fa-check-square-o"></i> Entrevistas para matricula</a></li>        		
    		</ol>
		</section>
<?		$this->load->view('lista_entrevistas'); 
	}
	if ($menu=='enfermedades' and $this->session->userdata('nivel')!="Estudiante") {?>
		<section class="content-header">
			<h1><i class="fa fa-medkit"></i> Patologías Estudiantiles</h1>
    		<ol class="breadcrumb">
        		<li><a href="<?=site_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
                <li class="active"><a href=""><i class="fa fa-medkit"></i> Patologías estudiantiles</a></li>        		
    		</ol>
		</section>
<?		$this->load->view('enfermedades'); 
	}	
	if ($menu=='matricula-financiera' and $this->session->userdata('nivel')!="Estudiante") {?>
		<section class="content-header">
			<h1><i class="fa fa-money"></i> Matricula Financiera</h1>
    		<ol class="breadcrumb">
        		<li><a href="<?=site_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
                <li class="active"><a href=""><i class="fa fa-money"></i> Matricula financiera</a></li>        		
    		</ol>
		</section>
<?		$this->load->view('matricula-financiera'); 
	}	
	if ($menu=='formulario-matricula' and $this->session->userdata('nivel')=="Estudiante") {?>
		<section class="content-header">
			<h1><i class="fa fa-file-text-o"></i> Formulario de Matricula</h1>
    		<ol class="breadcrumb">
        		<li><a href="<?=site_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
                <li class="active"><a href=""><i class="fa fa-file-text-o"></i> Matricula</a></li>        		
    		</ol>
		</section>
<?		$this->load->view('formulario-matricula'); 
	}
	if ($menu=='actualizar-datos' and $this->session->userdata('nivel')=="Estudiante") {?>
		<section class="content-header">
			<h1><i class="fa fa-file-text-o"></i> Actualizar Datos</h1>
    		<ol class="breadcrumb">
        		<li><a href="<?=site_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
                <li class="active"><a href=""><i class="fa fa-file-text-o"></i> Actualizar datos</a></li>        		
    		</ol>
		</section>
<?		$this->load->view('actualizar-datos'); 
	}
	if ($menu=='mi-observador' and $this->session->userdata('nivel')=="Estudiante") {?>
		<section class="content-header">
			<h1><i class="fa fa-book"></i> Mi Observador</h1>
    		<ol class="breadcrumb">
        		<li><a href="<?=site_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
                <li class="active"><a href=""><i class="fa fa-book"></i> Mi observador</a></li>        		
    		</ol>
		</section>
<?		$this->load->view('mi-observador'); 
	}						
}
?>
</div><!-- /.content-wrapper -->
<? $this->load->view('includes/footer'); ?>