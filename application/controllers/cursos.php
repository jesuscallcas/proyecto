<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cursos extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
		
		if (!$this->is_logged_in()) {
            redirect('login');
        }
    }
    
    public function index()
    { 
	  $numEvent= $this->eventos_model->getNumEvent();
	  $nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));
	  $MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario')); 
	  $numEnt= $this->registro_model->getNumEnt();
	  $numEntefe= $this->registro_model->getNumEntEfe();
	  $fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
	  $cursos = $this->cursos_model->listcursos();      
      $this->load->view('dashboard',array(
            	'menu' => "cursos",
				'listcursos' => $cursos,				
				'numevents' => $numEvent,
				'nument' => $numEnt,
				'numentefe' => $numEntefe,
				'listmensajes' => $MenBE,
				'fotoUser' => $fotoUser,
				'nummp' => $nummp
		));
	  
    }	
	public function Curso()
    {  
		$proceso	= $_POST['process'];
		$grado		= $_POST['grado'];
  		$seccion	= $_POST['seccion'];
		$numest		= $_POST['numest'];
		$numestreg	= 0;  	
 		$desc    	= $_POST['descripcion'];
  		$id			= $_POST['id'];
    	if($proceso==1){		
			$curso= $this->cursos_model->insertCurso($grado, $seccion, $desc, $numest, $numestreg);
		}
		if($proceso==2){		
			$curso= $this->cursos_model->editCurso($grado, $seccion, $numest, $desc, $id);
		}
		if($curso == 'success'){		
			if($proceso==1){$success="El curso ".$desc." fue creado satisfactoriamente";}else{$success="El curso ".$desc." fue editado satisfactoriamente";}
			$numEvent= $this->eventos_model->getNumEvent();
	  		$nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));
			$MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario')); 
			$numEnt= $this->registro_model->getNumEnt();
			$numEntefe= $this->registro_model->getNumEntEfe();
			$fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
            $cursos = $this->cursos_model->listcursos();
			$this->load->view('dashboard',array(
            	'menu' => "cursos",
				'listcursos' => $cursos,
				'numevents' => $numEvent,
				'nument' => $numEnt,
				'numentefe' => $numEntefe,
				'listmensajes' => $MenBE,
				'fotoUser' => $fotoUser,
				'nummp' => $nummp,
    			'success' => $success
			));
   		}else{
			if($proceso==1){$error="El curso no pudo ser creado, por favor informe al administrador acerca de este error";}else{$error="El curso no pudo ser editado, por favor informe al administrador acerca de este error";}
			$numEvent= $this->eventos_model->getNumEvent();
	  		$nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));
			$MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario')); 
			$numEnt= $this->registro_model->getNumEnt();
			$numEntefe= $this->registro_model->getNumEntEfe();
			$fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
      		$cursos = $this->cursos_model->listcursos();
   			$this->load->view('dashboard',array(
            		'menu' => "cursos",
					'listcursos' => $cursos,
					'numevents' => $numEvent,
					'nument' => $numEnt,
					'numentefe' => $numEntefe,
					'listmensajes' => $MenBE,
					'fotoUser' => $fotoUser,
					'nummp' => $nummp,
          			'error' => $error
			));
		}
     }
	public function ElimCursoAjax(){	
		$idcurso = $_POST['di'];
	   	$elimCurso= $this->cursos_model->deleteCurso($idcurso);
	   	if($elimCurso == 'success'){
			$numEvent= $this->eventos_model->getNumEvent();
	  		$nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));
			$MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario')); 
			$numEnt= $this->registro_model->getNumEnt();
			$numEntefe= $this->registro_model->getNumEntEfe();
			$fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
      		$cursos = $this->cursos_model->listcursos();
      		$this->load->view('dashboard',array(
            	'menu' => "cursos",
				'listcursos' => $cursos,
				'numevents' => $numEvent,
				'nument' => $numEnt,
				'numentefe' => $numEntefe,
				'listmensajes' => $MenBE,
				'fotoUser' => $fotoUser,
				'nummp' => $nummp,
				'success' => 'El registro fue eliminado satisfactoriamente'
			));
		}else{
			$numEvent= $this->eventos_model->getNumEvent();
	  		$nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));
			$MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario')); 
			$numEnt= $this->registro_model->getNumEnt();
			$numEntefe= $this->registro_model->getNumEntEfe();
			$fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
           	$cursos = $this->cursos_model->listcursos();
      		$this->load->view('dashboard',array(
            	'menu' => "cursos",
				'listcursos' => $cursos,
				'numevents' => $numEvent,
				'nument' => $numEnt,
				'numentefe' => $numEntefe,
				'listmensajes' => $MenBE,
				'fotoUser' => $fotoUser,
				'nummp' => $nummp,
    			'error' => 'El registro no pudo ser eliminado, por favor informe de este error al administrador'
			));
		}	 
			
	}
	public function ConsultarCursoAjax(){
		if($this->input->is_ajax_request()){
       		$idcurso = $this->input->post('id');
	   		$conCurso= array($this->cursos_model->getCurso($idcurso));
			foreach($conCurso as $curso){
				$info['CODIGO']=$curso['CODIGO'];
  				$info['GRADO']=$curso['GRADO'];				
  				$info['SECCION']=$curso['SECCION'];
				$info['NUMEST']=$curso['NUMEST'];
				$info['DESCRIPCION']=$curso['DESCRIPCION'];
    		}
			echo json_encode($info);
		}		
	}	
	public function DispoCurAjax(){
		if($this->input->is_ajax_request()){
       		$curso = $this->input->post('curso');
	   		$conCurso= array($this->cursos_model->getCurso($idcurso));
			foreach($conCurso as $curso){
				$info['CODIGO']=$curso['CODIGO'];
  				$info['GRADO']=$curso['GRADO'];				
  				$info['SECCION']=$curso['SECCION'];
				$info['NUMEST']=$curso['NUMEST'];
				$info['DESCRIPCION']=$curso['DESCRIPCION'];
    		}
			echo json_encode($info);
		}		
	}		
	private function is_logged_in()
    {
        return $this->session->userdata('is_logged_in');
    }
}
