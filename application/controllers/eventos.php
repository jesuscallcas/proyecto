<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Eventos extends CI_Controller 
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
      $eventos = $this->eventos_model->listeventos();
      $this->load->view('dashboard',array(
            'menu' => "eventos",
			'listevent' => $eventos,
			'numevents' => $numEvent,
			'nument' => $numEnt,
			'numentefe' => $numEntefe,
			'listmensajes' => $MenBE,
			'fotoUser' => $fotoUser,
			'nummp' => $nummp
			));
    }	
	public function Event()
    {  
		$proceso	= $_POST['process'];
		$tituloevent= $_POST['tituloevent'];
  		$fecha		= $_POST['fecha']; 	
 		$descevento	= $_POST['descevento']; 
		$creadopor	= $_POST['creadopor'];
		$editadopor	= $_POST['editadopor'];
		$id			= $_POST['id'];
		$fechas = explode("-", $fecha);
    	$inicio = $fechas[0];
    	$fin = $fechas[1]; 
    	if($proceso==1){		
			$evento= $this->eventos_model->insertEvent($tituloevent, $inicio, $fin, $descevento, $creadopor);
		}
		if($proceso==2){		
			$evento= $this->eventos_model->editEvent($tituloevent, $inicio, $fin, $descevento, $editadopor, $id);
		}
		if($evento == 'success'){		
			if($proceso==1){$success="El evento fue creado satisfactoriamente";}else{$success="El evento fue editado satisfactoriamente";}
			$eventos = $this->eventos_model->listeventos();
			$numEvent= $this->eventos_model->getNumEvent();
	  		$nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));
			$MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario'));
			$numEnt= $this->registro_model->getNumEnt();
			$numEntefe= $this->registro_model->getNumEntEfe();
			$fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
			$this->load->view('dashboard',array(
           	'menu' => "eventos",
			'success' => $success,
			'listevent' => $eventos,
			'numevents' => $numEvent,
			'numentefe' => $numEntefe,
			'listmensajes' => $MenBE,
			'nument' => $numEnt,
			'fotoUser' => $fotoUser,
			'nummp' => $nummp			
			));
		}else{
			if($proceso==1){$error="El evento no pudo ser creado, por favor informe al administrador acerca de este error";}else{$error="El evento no pudo ser editado, por favor informe al administrador acerca de este error";}
			$eventos = $this->eventos_model->listeventos();
			$numEvent= $this->eventos_model->getNumEvent();
	  		$nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));
			$MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario'));
			$numEnt= $this->registro_model->getNumEnt();
			$numEntefe= $this->registro_model->getNumEntEfe();
			$fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
			$this->load->view('dashboard',array(
            'menu' => "eventos",
			'error' => $error,
			'listevent' => $eventos,
			'numevents' => $numEvent,
			'numentefe' => $numEntefe,
			'listmensajes' => $MenBE,
			'nument' => $numEnt,
			'fotoUser' => $fotoUser,
			'nummp' => $nummp
			));	
		}			  
    }
	public function EliminarEventAjax(){	
		$idevent = $_POST['di'];
	   	$elimEvent= $this->eventos_model->deleteEvent($idevent);
	   	if($elimEvent == 'success'){
			$eventos = $this->eventos_model->listeventos();
			$numEvent= $this->eventos_model->getNumEvent();
	  		$nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));
			$MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario'));
			$numEnt= $this->registro_model->getNumEnt();
			$numEntefe= $this->registro_model->getNumEntEfe();
			$fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
      		$this->load->view('dashboard',array(
           		'menu' => "eventos",
				'success' => "El evento fue eliminado satisfactoriamente",
				'listevent' => $eventos,
				'numevents' => $numEvent,
				'nument' => $numEnt,
				'numentefe' => $numEntefe,
				'listmensajes' => $MenBE,
				'fotoUser' => $fotoUser,
				'nummp' => $nummp
			));
		}else{
			$eventos = $this->eventos_model->listeventos();
			$numEvent= $this->eventos_model->getNumEvent();
	  		$nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));
			$MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario'));
			$numEnt= $this->registro_model->getNumEnt();
			$numEntefe= $this->registro_model->getNumEntEfe();
			$fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
      		$this->load->view('dashboard',array(
           		'menu' => "eventos",
				'error' => "El evento no pudo ser eliminado, por favor informe al administrador acerca de este error",
				'listevent' => $eventos,
				'numevents' => $numEvent,
				'nument' => $numEnt,
				'numentefe' => $numEntefe,
				'listmensajes' => $MenBE,
				'fotoUser' => $fotoUser,
				'nummp' => $nummp
			));
		}	 
			
	}
	public function ConsultarEventAjax(){
		if($this->input->is_ajax_request()){
       		$idevento = $this->input->post('id');
	   		$conEvent= array($this->eventos_model->getEvent($idevento));
			foreach($conEvent as $event){
				$info['id']=$event['id'];
  				$info['titulo']=$event['titulo'];
  				$info['descripcion']=$event['descripcion'];
 				$info['fecha']=$event['inicio'].'-'.$event['fin'];				
			}
			echo json_encode($info);
		}		
	}		
	private function is_logged_in()
    {
        return $this->session->userdata('is_logged_in');
    }
}