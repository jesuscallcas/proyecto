<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Juicios extends CI_Controller 
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
      $juicios = $this->juicios_model->listjuicios();
	  $numEvent= $this->eventos_model->getNumEvent();
	  $nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));
	  $MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario'));
	  $numEnt= $this->registro_model->getNumEnt();
	  $numEntefe= $this->registro_model->getNumEntEfe();
	  $fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
      $this->load->view('dashboard',array(
            'menu' => "lista_juicios",
			'listjuicios' => $juicios,
			'numevents' => $numEvent,
			'nument' => $numEnt,
			'numentefe' => $numEntefe,
			'listmensajes' => $MenBE,
			'fotoUser' => $fotoUser,
			'nummp' => $nummp
			));
    }	
	public function NuevoJuicio()
	{ 	
		$tjuicio = $_POST['tjuicio'];
		$desempeno = $_POST['desempeno'];
		$juicio = $_POST['juicio'];				
		$newjuicio= $this->juicios_model->insertJuicio($tjuicio, $desempeno, $juicio);		
		if($newjuicio == 'success'){	
			$juicios = $this->juicios_model->listjuicios();
			$numEvent= $this->eventos_model->getNumEvent();
	  		$nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));
			$MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario'));
			$numEnt= $this->registro_model->getNumEnt();
			$numEntefe= $this->registro_model->getNumEntEfe();
			$fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
			$this->load->view('dashboard',array(
            'menu' => "lista_juicios",
			'success' => "El registro fue creado satisfactoriamente",
			'listjuicios' => $juicios,
			'numevents' => $numEvent,
			'nument' => $numEnt,
			'numentefe' => $numEntefe,
			'listmensajes' => $MenBE,
			'fotoUser' => $fotoUser,
			'nummp' => $nummp
			));
		}else{
			$juicios = $this->juicios_model->listjuicios();
			$numEvent= $this->eventos_model->getNumEvent();
	  		$nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));
			$MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario'));
			$numEnt= $this->registro_model->getNumEnt();
			$numEntefe= $this->registro_model->getNumEntEfe();
			$fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
			$this->load->view('dashboard',array(
            'menu' => "lista_juicios",
			'error' => "El registro no pudo ser creado",
			'listjuicios' => $juicios,
			'numevents' => $numEvent,
			'nument' => $numEnt,
			'numentefe' => $numEntefe,
			'listmensajes' => $MenBE,
			'fotoUser' => $fotoUser,
			'nummp' => $nummp
			));
		}			
    }
	public function EliminarJuicioAjax(){		
       		$juicio = $_POST['di'];
	   		$elimJuicio= $this->juicios_model->deleteJuicio($juicio);
	   		if($elimJuicio == 'success'){
				$juicios = $this->juicios_model->listjuicios();
				$numEvent= $this->eventos_model->getNumEvent();
	  			$nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));
				$MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario'));
				$numEnt= $this->registro_model->getNumEnt();
				$numEntefe= $this->registro_model->getNumEntEfe();
				$fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
		   		$this->load->view('dashboard',array(
           			'menu' => "lista_juicios",
					'success' => "El registro fue eliminado satisfactoriamente",
					'listjuicios' => $juicios,
					'numevents' => $numEvent,
					'nument' => $numEnt,
					'numentefe' => $numEntefe,
					'listmensajes' => $MenBE,
					'fotoUser' => $fotoUser,
					'nummp' => $nummp
				));		
			}else{	
				$juicios = $this->juicios_model->listjuicios();
				$numEvent= $this->eventos_model->getNumEvent();
	  			$nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));
				$MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario'));
				$numEnt= $this->registro_model->getNumEnt();
				$numEntefe= $this->registro_model->getNumEntEfe();
				$fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
		   		$this->load->view('dashboard',array(
           			'menu' => "lista_juicios",
					'error' => "El registro no pudo ser eliminado",
					'listjuicios' => $juicios,
					'numevents' => $numEvent,
					'nument' => $numEnt,
					'numentefe' => $numEntefe,
					'listmensajes' => $MenBE,
					'fotoUser' => $fotoUser,
					'nummp' => $nummp
				));   
			}	  	
	} 
	public function ConsultarJuicioAjax(){
		if($this->input->is_ajax_request()){
       		$juicio = $this->input->post('juicio');
	   		$conJuicio= array($this->juicios_model->getJuicio($juicio));
			foreach($conJuicio as $juicio){
				$info['id']=$juicio['id'];
  				$info['desempeno']=$juicio['desempeno'];
  				$info['juicio']=$juicio['juicio'];
 				$info['tipo']=$juicio['tipo'];
				$info['cod']=$juicio['cod'];
			}
			echo json_encode($info);
		}	
	}		
	public function EditarJuicio(){	
		$id = $_POST['eid'];		
		$tjuicio = $_POST['etjuicio'];
		$desempeno = $_POST['edesempeno'];
		$juicio = $_POST['ejuicio'];				
		$editjuicio= $this->juicios_model->editJuicio($id, $tjuicio, $desempeno, $juicio);		
		if($editjuicio == 'success'){	
			$juicios = $this->juicios_model->listjuicios();
			$numEvent= $this->eventos_model->getNumEvent();
	 		$nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));
			$MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario'));
			$numEnt= $this->registro_model->getNumEnt();
			$numEntefe= $this->registro_model->getNumEntEfe();
			$fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
			$this->load->view('dashboard',array(
            'menu' => "lista_juicios",
			'success' => "El registro fue editado satisfactoriamente",
			'listjuicios' => $juicios,
			'numevents' => $numEvent,
			'nument' => $numEnt,
			'numentefe' => $numEntefe,
			'listmensajes' => $MenBE,
			'fotoUser' => $fotoUser,
			'nummp' => $nummp
			));
		}else{
			$juicios = $this->juicios_model->listjuicios();
			$numEvent= $this->eventos_model->getNumEvent();
	 		$nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));
			$MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario'));
			$numEnt= $this->registro_model->getNumEnt();
			$numEntefe= $this->registro_model->getNumEntEfe();
			$fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
			$this->load->view('dashboard',array(
            'menu' => "lista_juicios",
			'error' => "El registro no pudo ser editado",
			'listjuicios' => $juicios,
			'numevents' => $numEvent,
			'nument' => $numEnt,
			'numentefe' => $numEntefe,
			'listmensajes' => $MenBE,
			'fotoUser' => $fotoUser,
			'nummp' => $nummp
			));
		}			
		
	}
	private function is_logged_in()
    {
        return $this->session->userdata('is_logged_in');
    }
}