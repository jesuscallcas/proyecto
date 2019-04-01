<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Enfermedades extends CI_Controller 
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
      $enf = $this->enfermedades_model->listEnf();
	  $numEvent= $this->eventos_model->getNumEvent();
	  $nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));
	  $MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario')); 
	  $numEnt= $this->registro_model->getNumEnt();
	  $numEntefe= $this->registro_model->getNumEntEfe();
	  $fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
      $this->load->view('dashboard',array(
            'menu' => "enfermedades",
			'listenfermedades' => $enf,
			'numevents' => $numEvent,
			'numentefe' => $numEntefe,
			'nument' => $numEnt,
			'listmensajes' => $MenBE,
			'fotoUser' => $fotoUser,
			'nummp' => $nummp
			));
    }
	public function Enfermedad()
	{ 		$id = $_POST['id'];
			$nomenf = $_POST['nomenf'];
			$descenf = $_POST['descripcionenf'];
			$process = $_POST['process'];
			if($process==1){				
				$enfermedad= $this->enfermedades_model->insertEnf($nomenf, $descenf);
			}else{
				$enfermedad= $this->enfermedades_model->editEnf($nomenf, $descenf, $id);
			}
			if($enfermedad == 'success'){	
				if($process == 1){$mensaje="La patología ".$nomenf." fue creada satisfactoriamente";}else{$mensaje="La patología ".$nomenf." fue editada satisfactoriamente";}
				$enf = $this->enfermedades_model->listEnf();
				$numEvent= $this->eventos_model->getNumEvent();
	  			$nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));
				$MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario')); 
				$numEnt= $this->registro_model->getNumEnt();
				$numEntefe= $this->registro_model->getNumEntEfe();
				$fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
				$this->load->view('dashboard',array(
            	'menu' => "enfermedades",
				'success' => $mensaje,
				'listenfermedades' => $enf,
				'numevents' => $numEvent,
				'numentefe' => $numEntefe,
				'nument' => $numEnt,
				'listmensajes' => $MenBE,
				'fotoUser' => $fotoUser,
				'nummp' => $nummp
				));
			}else{
				if($process == 1){$mensaje="Algunos de los datos suministrados ya existen en la base de datos.";}else{$mensaje="El registro no pudo ser editado, por favor informe de este error al administrador.";}
				$enf = $this->enfermedades_model->listEnf();
				$numEvent= $this->eventos_model->getNumEvent();
	  			$nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));
				$MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario')); 
				$numEnt= $this->registro_model->getNumEnt();
				$numEntefe= $this->registro_model->getNumEntEfe();
				$fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
				$this->load->view('dashboard',array(
            	'menu' => "enfermedades",
				'error' => $mensaje,
				'listenfermedades' => $enf,
				'numevents' => $numEvent,
				'numentefe' => $numEntefe,
				'nument' => $numEnt,
				'listmensajes' => $MenBE,
				'fotoUser' => $fotoUser,
				'nummp' => $nummp
				));
			}		
    }
	public function ElimEnf(){		
       		$id = $_POST['di'];
	   		$elimEnf= $this->enfermedades_model->deleteEnf($id);
	   		if($elimEnf == 'success'){
				$enf = $this->enfermedades_model->listEnf();
				$numEvent= $this->eventos_model->getNumEvent();
	  			$nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));
				$MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario')); 
				$numEnt= $this->registro_model->getNumEnt();
				$numEntefe= $this->registro_model->getNumEntEfe();
				$fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
				$this->load->view('dashboard',array(
					'menu' => "enfermedades",
					'success' => 'La patología se elimino satisfactoriamente.',
					'listenfermedades' => $enf,
					'numevents' => $numEvent,
					'numentefe' => $numEntefe,
					'nument' => $numEnt,
					'listmensajes' => $MenBE,
					'fotoUser' => $fotoUser,
					'nummp' => $nummp
				));
			}else{	
				$enf = $this->enfermedades_model->listEnf();
				$numEvent= $this->eventos_model->getNumEvent();
	  			$nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));
				$MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario')); 
				$numEnt= $this->registro_model->getNumEnt();
				$numEntefe= $this->registro_model->getNumEntEfe();
				$fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
				$this->load->view('dashboard',array(
					'menu' => "enfermedades",
					'error' => 'El registro no pudo ser eliminado, por favor informe de este error al administrador.',
					'listenfermedades' => $enf,
					'numevents' => $numEvent,
					'numentefe' => $numEntefe,
					'nument' => $numEnt,
					'listmensajes' => $MenBE,
					'fotoUser' => $fotoUser,
					'nummp' => $nummp
				));
			}	  	
	} 
	public function ConsultarEnfAjax(){
		if($this->input->is_ajax_request()){
       		$enf = $this->input->post('id');
	   		$conEnf= array($this->enfermedades_model->getEnf($enf));
			foreach($conEnf as $enfe){				
				$info['codigo']=$enfe['codigo'];
  				$info['nombre']=$enfe['nombre'];
  				$info['descripcion']=$enfe['descripcion'];
			}
			echo json_encode($info);
		}	
	}			
	private function is_logged_in()
    {
        return $this->session->userdata('is_logged_in');
    }
}