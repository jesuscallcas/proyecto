<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registro extends CI_Controller 
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
      $registros = $this->registro_model->listReg();
      $this->load->view('dashboard',array(
            'menu' => "registro-matricula",
			'listreg' => $registros,
			'numevents' => $numEvent,
			'nument' => $numEnt,
			'numentefe' => $numEntefe,
			'listmensajes' => $MenBE,
			'fotoUser' => $fotoUser,
			'nummp' => $nummp
			));
    }
	 public function Matricula()
    { 
	  $numEvent= $this->eventos_model->getNumEvent();
	  $nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario')); 
	  $MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario'));
	  $numEnt= $this->registro_model->getNumEnt();
	  $numEntefe= $this->registro_model->getNumEntEfe();
	  $fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di')); 
	  $formMat=$this->estudiantes_model->conFormEstMat($this->session->userdata('di'));  
      $this->load->view('dashboard',array(
            'menu' => "formulario-matricula",			
			'numevents' => $numEvent,
			'nument' => $numEnt,
			'formMat' => $formMat, 
			'numentefe' => $numEntefe,
			'listmensajes' => $MenBE,
			'fotoUser' => $fotoUser,
			'nummp' => $nummp
			));
    }
	 public function ActualizarDatos()
    { 
	  $numEvent= $this->eventos_model->getNumEvent();
	  $nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario')); 
	  $MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario'));
	  $numEnt= $this->registro_model->getNumEnt();
	  $numEntefe= $this->registro_model->getNumEntEfe();
	  $fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di')); 
	  $formMat=$this->estudiantes_model->conFormEstMat($this->session->userdata('di'));  
      $this->load->view('dashboard',array(
            'menu' => "actualizar-datos",			
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
	 public function verificar()
    { 
	  $numEvent= $this->eventos_model->getNumEvent();
	  $nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));  
	  $MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario'));
	  $numEnt= $this->registro_model->getNumEnt();
	  $numEntefe= $this->registro_model->getNumEntEfe();
	  $fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
	  $formMat=$this->estudiantes_model->conFormEstMat($this->session->userdata('di'));
      $this->load->view('dashboard',array(
            'menu' => "verificar-proceso",			
			'numevents' => $numEvent,
			'idEst' => $this->session->userdata('di'),
			'nument' => $numEnt,
			'numentefe' => $numEntefe,
			'formMat' => $formMat, 
			'listmensajes' => $MenBE,
			'fotoUser' => $fotoUser,
			'nummp' => $nummp
			));
    }	
	public function Registro()
    {  
		$proceso		= $_POST['process'];
		$tdoc 			= $_POST['tidentidadest'];
		$nombreest 		= strtoupper($_POST['nombreest']);
		$apeest 		= strtoupper($_POST['apeest']);			
		$identidadest 	= $_POST['identidadest'];	
		$generoest		= $_POST['generoest'];	
		$mailest		= $_POST['mailest'];
		$direccionest	= strtoupper($_POST['direccionest']);
		$telefonoest 	= $_POST['telefonoest'];		
		$gradoest		= $_POST['gradoest'];
		$code = sha1(mt_rand().time().mt_rand().$_SERVER['REMOTE_ADDR'].$tdoc);
		$encriptCode=md5($code);
		$id				= $_POST['id'];			
    	if($proceso==1){
			$reg= $this->registro_model->insertReg($tdoc, $identidadest, $nombreest, $apeest, $generoest, $mailest, $direccionest, $telefonoest, $gradoest, $encriptCode);
		}
		if($proceso==2){		
			$reg= $this->registro_model->editReg($tdoc, $identidadest, $nombreest, $apeest, $generoest, $mailest, $direccionest, $telefonoest, $gradoest, $id);
		}
		if($reg == 'success'){		
			if($proceso==1){$success="El registro fue creado de forma exitosa";}else{$success="El registro fue editado de forma exitosa";}			
			$subject = 'Inscripción Instituto Colombo Bolívariano';     
    		$headers = "From:Instituto Colombo Bolivariano <administrador@colombobolivariano.edu.co>\r\n"; 
    		$headers .= "Reply-To: administrador@colombobolivariano.edu.co\r\n";
    		$headers .= "CC:Instituto Colombo Bolivariano <administrador@colombobolivariano.edu.co>\r\n";
    		$headers .= "MIME-Version: 1.0\r\n";
    		$headers .= "Content-Type: text/html; charset=UTF8\r\n";

    		$message = '<html><body>';    		
    		$message .= '<table rules="all" style="border-color: #0C85C7;" width="600">';
			$message .= "<tr><td colspan='2' align='center'><img src='http://localhost/icb-academico/img/unknown.png' border='0'></td></tr>";
			$message .= "<tr><td colspan='2' style='background: #eee;' align='justify'>Agradecemos que tuviera en cuenta nuestra institución para confiarnos la importante labor de educar a su hijo(a) y/o acudido(a).  A continuación encontrara parte de la información que nos suministro en el proceso de compra del formulario de inscripción y los datos de acceso a nuestro aplicativo en línea.</td></tr>";
    		$message .= "<tr><td><strong>Nombre del Estudiante: </strong></td><td>".($nombreest.' '.$apeest)."</td></tr>";
    		$message .= "<tr style='background: #eee;'><td><strong>Grado al que aspira ingresar: </strong></td><td>".($gradoest)."</td></tr>";
			$message .= "<tr><td><strong>Usuario: </strong></td><td>".($identidadest)."</td></tr>";
    		$message .= "<tr style='background: #eee;'><td><strong>Contraseña: </strong></td><td>".($encriptCode)."</td></tr>";
			$message .= "<tr><td colspan='2' align='center'><a href='http://icb-academico.colombobolivariano.edu.co' target='_blank'><img src='http://localhost/icb-academico/img/matricula.png' border='0'></a></td></tr>";			       
    		$message .= "</table>";
    		$message .= "</body></html>";	
			mail($mailest, $subject, $message, $headers); 	
			$numEvent= $this->eventos_model->getNumEvent();
	  		$nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario')); 
			$MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario'));
			$numEnt= $this->registro_model->getNumEnt(); 
			$numEntefe= $this->registro_model->getNumEntEfe();
			$fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));   
      		$registros = $this->registro_model->listReg();
      		$this->load->view('dashboard',array(
            	'menu' => "registro-matricula",
				'listreg' => $registros,
				'success' => $success,
				'numevents' => $numEvent,
				'nument' => $numEnt,
				'numentefe' => $numEntefe,
				'listmensajes' => $MenBE,
				'fotoUser' => $fotoUser,
				'nummp' => $nummp
			));
		}else{
			if($proceso==1){$error="El documento de identidad ".$identidadest." ya existe en la base de datos, por favor verifique la información y vuelva a intentarlo";}else{$error="El registro no pudo ser editado, por favor informe al administrador acerca de este error";}
			$numEvent= $this->eventos_model->getNumEvent();
	  		$nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario')); 
			$MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario'));
			$numEnt= $this->registro_model->getNumEnt(); 
			$numEntefe= $this->registro_model->getNumEntEfe();
			$fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));   
      		$registros = $this->registro_model->listReg();
      		$this->load->view('dashboard',array(
            	'menu' => "registro-matricula",
				'listreg' => $registros,
				'error' => $error,
				'numevents' => $numEvent,
				'numentefe' => $numEntefe,
				'nument' => $numEnt,
				'listmensajes' => $MenBE,
				'fotoUser' => $fotoUser,
				'nummp' => $nummp
			));
		}			  
    }
	public function EliminarReg(){	
		$idreg = $_POST['di'];
	   	$elimReg= $this->registro_model->deleteReg($idreg);
	   	if($elimReg == 'success'){
			$numEvent= $this->eventos_model->getNumEvent();
	  		$nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario')); 
			$MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario'));
			$numEnt= $this->registro_model->getNumEnt();
			$numEntefe= $this->registro_model->getNumEntEfe();
			$fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));    
      		$registros = $this->registro_model->listReg();
      		$this->load->view('dashboard',array(
            	'menu' => "registro-matricula",
				'listreg' => $registros,
				'success' => "El registro se elimino correctamente",
				'numevents' => $numEvent,
				'numentefe' => $numEntefe,
				'nument' => $numEnt,
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
      		$registros = $this->registro_model->listReg();
      		$this->load->view('dashboard',array(
            	'menu' => "registro-matricula",
				'listreg' => $registros,
				'error' => "El registro no pudo ser eliminado, por favor notifique de este error al administrador",
				'numevents' => $numEvent,
				'nument' => $numEnt,
				'numentefe' => $numEntefe,
				'listmensajes' => $MenBE,
				'fotoUser' => $fotoUser,
				'nummp' => $nummp
			));
		}	 
			
	}
	public function ConsultarRegAjax(){
		if($this->input->is_ajax_request()){
       		$id = $this->input->post('id');
	   		$conReg= array($this->registro_model->getReg($id));
			foreach($conReg as $reg){
				$info['ID']=$reg['ID'];
  				$info['EMAIL']=$reg['EMAIL'];
  				$info['NOMEST']=$reg['NOMEST'];
				$info['APEEST']=$reg['APEEST'];
				$info['TIPODOC']=$reg['TIPODOC'];
				$info['DOCEST']=$reg['DOCEST'];
				$info['TEL']=$reg['TEL'];	
				$info['GENERO']=$reg['GENERO'];			
				$info['DIR']=$reg['DIR'];
				$info['GRADO']=$reg['GRADO']; 							
			}
			echo json_encode($info);
		}		
	}
	public function FMat(){
		if($this->input->is_ajax_request()){
       		$id = $this->input->post('id');
	   		$conFMat= array($this->registro_model->getFormMat($id));			
			echo json_encode($conFMat);
		}		
	}
	public function ConEnt(){
		if($this->input->is_ajax_request()){
       		$id = $this->input->post('id');
	   		$conEntMat= array($this->registro_model->getEntMat($id));			
			echo json_encode($conEntMat);
		}		
	}
	public function ConFin(){
		if($this->input->is_ajax_request()){
       		$id = $this->input->post('id');
	   		$conMatFin= array($this->registro_model->getMatFin($id));			
			echo json_encode($conMatFin);
		}		
	}
	private function is_logged_in()
    {
        return $this->session->userdata('is_logged_in');
    }
}