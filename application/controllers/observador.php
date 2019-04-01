<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Observador extends CI_Controller 
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
      $this->load->view('dashboard',array(
            'menu' => "observador",			
			'numevents' => $numEvent,
			'nument' => $numEnt,
			'numentefe' => $numEntefe,
			'listmensajes' => $MenBE,
			'fotoUser' => $fotoUser,
			'nummp' => $nummp
			));
    }
	public function MiObservador()
    { 
	  $numEvent= $this->eventos_model->getNumEvent();
	  $nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario')); 
	  $MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario'));
	  $numEnt= $this->registro_model->getNumEnt();
	  $numEntefe= $this->registro_model->getNumEntEfe();
	  $fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di')); 
	  $formMat=$this->estudiantes_model->conFormEstMat($this->session->userdata('di'));  
      $this->load->view('dashboard',array(
            'menu' => "mi-observador",			
			'numevents' => $numEvent,
			'idEst' => $this->session->userdata('di'),
			'nument' => $numEnt,
			'formMat' => $formMat, 
			'numentefe' => $numEntefe,
			'listmensajes' => $MenBE,
			'fotoUser' => $fotoUser,
			'nummp' => $nummp
			));
    }
	public function eoa(){	
       		$obs = $_POST['di'];
			$est = $_POST['est'];
	   		$elimObs= $this->observador_model->elimObs($obs);
	   		if($elimObs == 'success'){				
				$numEvent= $this->eventos_model->getNumEvent();
	  			$nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));
				$MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario'));
				$numEnt= $this->registro_model->getNumEnt();
				$numEntefe= $this->registro_model->getNumEntEfe();
				$fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
		   		$this->load->view('dashboard',array(
           			'menu' => "observador",
					'success' => "El registro fue eliminado satisfactoriamente",					
					'numevents' => $numEvent,
					'nument' => $numEnt,
					'est' => $est,
					'numentefe' => $numEntefe,
					'listmensajes' => $MenBE,
					'fotoUser' => $fotoUser,
					'nummp' => $nummp
				));		
			}else{					
				$numEvent= $this->eventos_model->getNumEvent();
	  			$nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));
				$MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario'));
				$numEnt= $this->registro_model->getNumEnt();
				$numEntefe= $this->registro_model->getNumEntEfe();
				$fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
		   		$this->load->view('dashboard',array(
           			'menu' => "observador",
					'error' => "El registro no pudo ser eliminado, por favor informe de este error al administrador",					
					'numevents' => $numEvent,
					'nument' => $numEnt,
					'est' => $est,
					'numentefe' => $numEntefe,
					'listmensajes' => $MenBE,
					'fotoUser' => $fotoUser,
					'nummp' => $nummp
				));   
			}	  	
	} 
	public function cobs(){
		if($this->input->is_ajax_request()){
       		$obs = $this->input->post('id');
	   		$conObs= array($this->observador_model->getObs($obs));
			foreach($conObs as $data){
				$info['id']=$data['id']; 
				$info['fecha']=$data['fecha']; 
  				$info['descripcion']=$data['descripcion'];
				$info['tipo']=$data['tipo'];
			}
			echo json_encode($info);
		}		
	}
	public function eobs(){
		if($this->input->is_ajax_request()){
       		$fecha  = $this->input->post('fecha');
			$desc   = $this->input->post('desc');
			$cpor   = $this->input->post('cpor');
			$cporid = $this->input->post('cporid');
			$idobs  = $this->input->post('idobs');			
	   		$editObs = array($this->observador_model->editObs($fecha,$desc,$cpor,$cporid,$idobs));								
			echo json_encode($editObs);			
		}		
	}
	public function Observacion(){		
       		$fecha  = $_POST['nacimientoest'];
			$desc   = $_POST['DesObs'];
			$cpor   = $_POST['creadopor'];
			$cporid = $_POST['creadoporid'];
			$tipo   = $_POST['TObs'];
			$est	= $_POST['idEst'];
			$Obs= $this->observador_model->newObs($fecha,$desc,$cpor,$cporid,$tipo,$est);		   					
			if($Obs == 'success'){				
				$numEvent= $this->eventos_model->getNumEvent();
	  			$nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));
				$MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario'));
				$numEnt= $this->registro_model->getNumEnt();
				$numEntefe= $this->registro_model->getNumEntEfe();
				$fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
		   		$this->load->view('dashboard',array(
           			'menu' => "observador",
					'success' => "La observación se creo satisfactoriamente",					
					'numevents' => $numEvent,
					'nument' => $numEnt,					
					'est' => $est,
					'numentefe' => $numEntefe,
					'listmensajes' => $MenBE,
					'fotoUser' => $fotoUser,
					'nummp' => $nummp
				));		
			}else{	}				
	}				
	private function is_logged_in()
    {
        return $this->session->userdata('is_logged_in');
    }
}