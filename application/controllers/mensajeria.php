<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mensajeria extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
		
		if (!$this->is_logged_in()) {
            redirect('login');
        }
    }
    
    public function bandeja()
    { $MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario')); 
	  $nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));
	  $numEnt= $this->registro_model->getNumEnt();
	  $numEntefe= $this->registro_model->getNumEntEfe();
	  $fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
	  $nummpp = $this->mensajeria_model->getNumMPP();
	  $numEvent= $this->eventos_model->getNumEvent();     
      $users = $this->usuarios_model->listusers();	  
      $this->load->view('dashboard',array(
            'menu' => "bandeja",
			'listusers' => $users,
			'listmensajes' => $MenBE,
			'numevents' => $numEvent,
			'nument' => $numEnt,
			'numentefe' => $numEntefe,
			'nummp' => $nummp,
			'fotoUser' => $fotoUser,
			'nummpp' => $nummpp
			));
    }
	public function enviados()
    { $MenEN = $this->mensajeria_model->listMenEN($this->session->userdata('usuario')); 
	  $nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));
	  $numEnt= $this->registro_model->getNumEnt();
	  $numEntefe= $this->registro_model->getNumEntEfe();
	  $fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
	  $nummpp = $this->mensajeria_model->getNumMPP();
	  $numEvent= $this->eventos_model->getNumEvent();     
      $users = $this->usuarios_model->listusers();	  
      $this->load->view('dashboard',array(
            'menu' => "enviados",
			'listusers' => $users,
			'listmensajes' => $MenEN,
			'numevents' => $numEvent,
			'nument' => $numEnt,
			'numentefe' => $numEntefe,
			'nummp' => $nummp,
			'fotoUser' => $fotoUser,
			'nummpp' => $nummpp
			));
    }
	 public function papelera()
    { $MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario')); 
	  $nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));
	  $numEnt= $this->registro_model->getNumEnt();
	  $numEntefe= $this->registro_model->getNumEntEfe();
	  $fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
	  $nummpp = $this->mensajeria_model->getNumMPP();
	  $numEvent= $this->eventos_model->getNumEvent();     
      $users = $this->usuarios_model->listusers();	  
      $this->load->view('dashboard',array(
            'menu' => "papelera",
			'listusers' => $users,
			'listmensajes' => $MenBE,
			'numevents' => $numEvent,
			'nument' => $numEnt,
			'numentefe' => $numEntefe,
			'nummp' => $nummp,
			'fotoUser' => $fotoUser,
			'nummpp' => $nummpp
			));
    }
	public function NewMensaje()
    {   
		if(isset($_POST['asunto'])){   
        	$asunto		= $_POST['asunto'];
	    	$dest		= $_POST['destinatario'];
  			$mensaje	= $_POST['mensaje']; 	
 			$remitente	= $_POST['remitente'];	
		}
		if(isset($_POST['Respasunto'])){   
        	$asunto		= $_POST['Respasunto'];
	    	$dest		= $_POST['RespDest2'];
  			$mensaje	= $_POST['Respmensaje']; 	
 			$remitente	= $_POST['Respremitente'];	
		}
		$fechaenvio	= date("d-m-Y H:i:s");		
		$mensaje= $this->mensajeria_model->insertMensaje($asunto, $dest, $mensaje, $remitente, $fechaenvio);		
		if($mensaje == 'success'){			
			$MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario')); 
	  		$nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));
			$numEnt= $this->registro_model->getNumEnt();
			$numEntefe= $this->registro_model->getNumEntEfe();
			$fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
	  		$nummpp = $this->mensajeria_model->getNumMPP();
	  		$numEvent= $this->eventos_model->getNumEvent();     
      		$users = $this->usuarios_model->listusers();	  
      		$this->load->view('dashboard',array(
            	'menu' => "bandeja",
				'listusers' => $users,
				'listmensajes' => $MenBE,
				'numevents' => $numEvent,
				'nument' => $numEnt,
				'numentefe' => $numEntefe,
				'nummp' => $nummp,
				'nummpp' => $nummpp,
				'fotoUser' => $fotoUser,
				'success' => 'Su mensaje ha sido envido con exito a '.$dest.'.'
			));
		}else{			
			$MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario')); 
	  		$nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));
			$numEnt= $this->registro_model->getNumEnt();
			$numEntefe= $this->registro_model->getNumEntEfe();
			$fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
	  		$nummpp = $this->mensajeria_model->getNumMPP();
	  		$numEvent= $this->eventos_model->getNumEvent();     
      		$users = $this->usuarios_model->listusers();	  
      		$this->load->view('dashboard',array(
            	'menu' => "bandeja",
				'listusers' => $users,
				'listmensajes' => $MenBE,
				'numevents' => $numEvent,
				'nument' => $numEnt,
				'numentefe' => $numEntefe,
				'nummp' => $nummp,
				'nummpp' => $nummpp,	
				'fotoUser' => $fotoUser,			
				'error' => 'Su mensaje no pudo ser enviado, consulte al administrador acerca de este error.'
			));	
		}			
    }
	public function ConsultarMPAjax(){
		if($this->input->is_ajax_request()){
       		$idmp = $this->input->post('id');
			$ce = $this->input->post('ce');
			if(isset($ce)){
				$conMP= array($this->mensajeria_model->getMP($idmp, $ce));
			}else{
	   			$conMP= array($this->mensajeria_model->getMP($idmp));
			}
			foreach($conMP as $mp){
				$info['idmp']=$mp['idmp'];
  				$info['asunto']=$mp['asunto'];
  				$info['remitente']=$mp['remitente'];
				$info['destinatario']=$mp['destinatario'];
 				$info['fecha_envio']=$mp['fecha_envio'];
				$info['mensaje']=$mp['mensaje'];				
			}
			echo json_encode($info);
		}		
	}
	public function papeleraMPAjax(){	
		$idmp = $_POST['di'];
	   	$papeleraMP= $this->mensajeria_model->papeleraMP($idmp);
	   	if($papeleraMP == 'success'){
			$MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario')); 
	  		$nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));
			$numEnt= $this->registro_model->getNumEnt();
			$numEntefe= $this->registro_model->getNumEntEfe();
			$fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
	  		$nummpp = $this->mensajeria_model->getNumMPP();
	  		$numEvent= $this->eventos_model->getNumEvent();     
     		$users = $this->usuarios_model->listusers();	  
      		$this->load->view('dashboard',array(
            	'menu' => "bandeja",
				'listusers' => $users,
				'listmensajes' => $MenBE,
				'numevents' => $numEvent,
				'nument' => $numEnt,
				'numentefe' => $numEntefe,
				'nummp' => $nummp,
				'nummpp' => $nummpp,
				'fotoUser' => $fotoUser,
				'success' => 'Su mensaje ha sido movido a la papelera.'
			));
		}else{
			$MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario')); 
	 		$nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));
			$numEnt= $this->registro_model->getNumEnt();
			$numEntefe= $this->registro_model->getNumEntEfe();
			$fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
	  		$nummpp = $this->mensajeria_model->getNumMPP();
	  		$numEvent= $this->eventos_model->getNumEvent();     
      		$users = $this->usuarios_model->listusers();	  
      		$this->load->view('dashboard',array(
            	'menu' => "bandeja",
				'listusers' => $users,
				'listmensajes' => $MenBE,
				'numevents' => $numEvent,
				'nument' => $numEnt,
				'numentefe' => $numEntefe,
				'nummp' => $nummp,
				'nummpp' => $nummpp,
				'fotoUser' => $fotoUser,
				'error' => 'Su mensaje ha no pudo ser movido a la papelera, por favor informe de este error al administrador.'
			));
		}	 
			
	}
	public function recuperarMPAjax(){	
		$idmp = $_POST['di'];
	   	$recuperarMP= $this->mensajeria_model->recuperarMP($idmp);
	   	if($recuperarMP == 'success'){
			$MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario')); 
	  		$nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));
			$numEnt= $this->registro_model->getNumEnt();
			$numEntefe= $this->registro_model->getNumEntEfe();
			$fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
	  		$nummpp = $this->mensajeria_model->getNumMPP();
	  		$numEvent= $this->eventos_model->getNumEvent();     
     		$users = $this->usuarios_model->listusers();	  
      		$this->load->view('dashboard',array(
            	'menu' => "bandeja",
				'listusers' => $users,
				'listmensajes' => $MenBE,
				'numevents' => $numEvent,
				'nument' => $numEnt,
				'numentefe' => $numEntefe,
				'nummp' => $nummp,
				'nummpp' => $nummpp,
				'fotoUser' => $fotoUser,
				'success' => 'Su mensaje ha sido movido a la bandeja de entrada.'
			));
		}else{
			$MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario')); 
	 		$nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));
			$numEnt= $this->registro_model->getNumEnt();
			$numEntefe= $this->registro_model->getNumEntEfe();
			$fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
	  		$nummpp = $this->mensajeria_model->getNumMPP();
	  		$numEvent= $this->eventos_model->getNumEvent();     
      		$users = $this->usuarios_model->listusers();	  
      		$this->load->view('dashboard',array(
            	'menu' => "bandeja",
				'listusers' => $users,
				'listmensajes' => $MenBE,
				'numevents' => $numEvent,
				'nument' => $numEnt,
				'numentefe' => $numEntefe,
				'nummp' => $nummp,
				'nummpp' => $nummpp,
				'fotoUser' => $fotoUser,
				'error' => 'Su mensaje ha no pudo ser movido a la bandeja de entrada, por favor informe de este error al administrador.'
			));
		}	 
			
	}				
	private function is_logged_in()
    {
        return $this->session->userdata('is_logged_in');
    }
}