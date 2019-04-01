<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Controller 
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
      $users = $this->usuarios_model->listusers();
	  $numEvent= $this->eventos_model->getNumEvent();
	  $nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));
	  $MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario')); 
	  $numEnt= $this->registro_model->getNumEnt();
	  $numEntefe= $this->registro_model->getNumEntEfe();
	  $fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
      $this->load->view('dashboard',array(
            'menu' => "lista_usuarios",
			'listusers' => $users,
			'numevents' => $numEvent,
			'nument' => $numEnt,
			'numentefe' => $numEntefe,
			'listmensajes' => $MenBE,
			'fotoUser' => $fotoUser,
			'nummp' => $nummp
			));
    }
	public function NuevoUsuario()
	{ 		$foto = $_POST['foto'];
			$tdoc = $_POST['tdoc'];
			$nomuser = $_POST['nomusuario'];
			$emailuser = $_POST['emailusuario'];
			$nivel = $_POST['nivelacceso'];			
			$diuser = $_POST['diusuario'];			
			$genero = $_POST['genero'];
			$teluser = $_POST['teluser'];
			$pass = $_POST['pass'];				
			$datosuser= $this->usuarios_model->insertUser($diuser, $nomuser, $emailuser, $nivel, $tdoc, $genero, $teluser, $foto, $pass);		
			if($datosuser == 'success'){	
				$users = $this->usuarios_model->listusers();
				$numEvent= $this->eventos_model->getNumEvent();
	  			$nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));
				$MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario')); 
				$numEnt= $this->registro_model->getNumEnt();
				$numEntefe= $this->registro_model->getNumEntEfe();
				$fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
				$this->load->view('dashboard',array(
            	'menu' => "lista_usuarios",
				'success' => "El usuario ".$nomuser." fue creado(a) satisfactoriamente",
				'listusers' => $users,
				'numevents' => $numEvent,
				'nument' => $numEnt,
				'numentefe' => $numEntefe,
				'listmensajes' => $MenBE,
				'fotoUser' => $fotoUser,
				'nummp' => $nummp
				));
			}else{
				$users = $this->usuarios_model->listusers();
				$numEvent= $this->eventos_model->getNumEvent();
	  			$nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));
				$MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario')); 
				$numEnt= $this->registro_model->getNumEnt();
				$numEntefe= $this->registro_model->getNumEntEfe();
				$fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
				$this->load->view('dashboard',array(
            	'menu' => "lista_usuarios",
				'error' => "Algunos de los datos suministrados ya existen en la base de datos",
				'listusers' => $users,
				'numevents' => $numEvent,
				'nument' => $numEnt,
				'numentefe' => $numEntefe,
				'listmensajes' => $MenBE,
				'fotoUser' => $fotoUser,
				'nummp' => $nummp
				));
			}		
    }
	public function EliminarUsuarioAjax(){		
       		$usuario = $_POST['di'];
	   		$elimUser= $this->usuarios_model->deleteUser($usuario);
	   		if($elimUser == 'success'){
				$users = $this->usuarios_model->listusers();
				$numEvent= $this->eventos_model->getNumEvent();
	  			$nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));
				$MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario')); 
				$numEnt= $this->registro_model->getNumEnt();
				$numEntefe= $this->registro_model->getNumEntEfe();
				$fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
		   		$this->load->view('dashboard',array(
           			'menu' => "lista_usuarios",
					'success' => "El registro fue eliminado satisfactoriamente",
					'listusers' => $users,
					'numevents' => $numEvent,
					'nument' => $numEnt,
					'numentefe' => $numEntefe,
					'listmensajes' => $MenBE,
					'fotoUser' => $fotoUser,
					'nummp' => $nummp
				));		
			}else{	
				$users = $this->usuarios_model->listusers();
				$numEvent= $this->eventos_model->getNumEvent();
	  			$nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));
				$MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario')); 
				$numEnt= $this->registro_model->getNumEnt();
				$numEntefe= $this->registro_model->getNumEntEfe();
				$fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
				$this->load->view('dashboard',array(
            		'menu' => "lista_usuarios",
					'warning' => "El usuario que intenta eliminar, esta asignado a una dirección de grupo",
					'listusers' => $users,
					'numevents' => $numEvent,
					'nument' => $numEnt,
					'numentefe' => $numEntefe,
					'listmensajes' => $MenBE,
					'fotoUser' => $fotoUser,
					'nummp' => $nummp
				));   
			}	  	
	} 
	public function ConsultarUsuarioAjax(){
		if($this->input->is_ajax_request()){
       		$usuario = $this->input->post('usuario');
	   		$conUser= array($this->usuarios_model->getUser($usuario));
			foreach($conUser as $user){
				$info['di']=$user['di'];
  				$info['nom']=$user['nombre'];
  				$info['tdoc']=$user['tdoc'];
 				$info['email']=$user['email'];
				$info['gen']=$user['gen'];
 				$info['nivel']=$user['nivel'];	
				$info['tel']=$user['tel'];
				$info['foto']=$user['foto'];
			}
			echo json_encode($info);
		}	
	}		
	public function EditarUsuario(){			
			$tdoc = $_POST['etdoc'];
			$nomuser = $_POST['enomusuario'];
			$emailuser = $_POST['eemailusuario'];
			$nivel = $_POST['enivelacceso'];			
			$diuser = $_POST['ediusuario'];			
			$genero = $_POST['egenero'];
			$teluser = $_POST['eteluser'];
			$pass = $_POST['epass'];
			$foto = $_POST['efoto'];				
			$datosuser= $this->usuarios_model->editUser($diuser, $nomuser, $emailuser, $nivel, $tdoc, $genero, $teluser, $pass, $foto);		
			if($datosuser == 'success'){	
				$users = $this->usuarios_model->listusers();
				$numEvent= $this->eventos_model->getNumEvent();
	  			$nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));
				$MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario')); 
				$numEnt= $this->registro_model->getNumEnt();
				$numEntefe= $this->registro_model->getNumEntEfe();
				$fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
				$this->load->view('dashboard',array(
            	'menu' => "lista_usuarios",
				'success' => "El usuario ".$nomuser." fue editado satisfactoriamente",
				'listusers' => $users,
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