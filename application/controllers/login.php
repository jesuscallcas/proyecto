<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	
    public function index()
    {
		if($this->session->userdata('is_logged_in')){
			redirect('dashboard');
        }else{
        	$this->load->view('login');	
        }
    } 
	
    public function ValidarUsuario()    {   
		if(!isset($_POST['usuario'])){
         	$this->load->view('login');
      	}
      	else{						
        	 $ipUsuario = $this->input->ip_address();     
			 $data['respuesta']=$this->login_model->ValidarUsuario($_POST['usuario'],$_POST['pass'],$ipUsuario);  
			 if($data['respuesta']==0){
					$usuario=$this->login_model->getNombre($_POST['usuario']);
					$nivel=$this->login_model->getNivel($_POST['usuario']);													
					$datos = array(
                    'usuario' => $usuario,					
					'nivel' => $nivel,					
					'di' => $_POST['usuario'],
					'mb' => 'Bienvenid@ '.$usuario,					
                    'is_logged_in' => TRUE                    
                	);
					$this->session->set_userdata($datos);
					redirect('dashboard');
			  }else{
            		$this->load->view('login',$data);	
			  }
		}
    } 
	public function Registro()    {   
		if(!isset($_POST['nombreest'])){
         	$this->load->view('registro');
      	}else{		
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
			$reg= $this->registro_model->insertReg($tdoc, $identidadest, $nombreest, $apeest, $generoest, $mailest, $direccionest, $telefonoest, $gradoest, $encriptCode);
			if($reg == 'success'){		
				$success="El registro fue creado de forma exitosa, le fue enviado un correo electronico a ".$mailest." con las instrucciones de acceso";			
				$subject = 'Inscripción Instituto Colombo Bolívariano';     
				$headers = "From:Instituto Colombo Bolivariano <administrador@colombobolivariano.edu.co>\r\n"; 
				$headers .= "Reply-To: administrador@colombobolivariano.edu.co\r\n";
				$headers .= "CC:Instituto Colombo Bolivariano <administrador@colombobolivariano.edu.co>\r\n";
				$headers .= "MIME-Version: 1.0\r\n";
				$headers .= "Content-Type: text/html; charset=UTF8\r\n";
	
				$message = '<html><body>';    		
				$message .= '<table rules="all" style="border-color: #0C85C7;" width="600">';
				$message .= "<tr><td colspan='2' align='center'><img src='http://colombobolivariano.edu.co/icb-academico/img/unknown.png' border='0'></td></tr>";
				$message .= "<tr><td colspan='2' style='background: #eee;' align='justify'>Agradecemos que tuviera en cuenta nuestra institución para confiarnos la importante labor de educar a su hijo(a) y/o acudido(a).  A continuación encontrara parte de la información que nos suministro en el proceso de compra del formulario de inscripción y los datos de acceso a nuestro aplicativo en línea.</td></tr>";
				$message .= "<tr><td><strong>Nombre del Estudiante: </strong></td><td>".($nombreest.' '.$apeest)."</td></tr>";
				$message .= "<tr style='background: #eee;'><td><strong>Grado al que aspira ingresar: </strong></td><td>".($gradoest)."</td></tr>";
				$message .= "<tr><td><strong>Usuario: </strong></td><td>".($identidadest)."</td></tr>";
				$message .= "<tr style='background: #eee;'><td><strong>Contraseña: </strong></td><td>".($encriptCode)."</td></tr>";
				$message .= "<tr><td colspan='2' align='center'><a href='http://colombobolivariano.edu.co/icb-academico' target='_blank'><img src='http://colombobolivariano.edu.co/icb-academico/img/matricula.png' border='0'></a></td></tr>";			       
				$message .= "</table>";
				$message .= "</body></html>";	
				mail($mailest, $subject, $message, $headers);           
				$this->load->view('registro',array(
					'success' => $success
				));
			}else{
				$error="El documento de identidad ".$identidadest." ya existe en la base de datos, por favor verifique la información y vuelva a intentarlo";
				$this->load->view('registro',array(
					'error' => $error
				));	
			}
		}
    }         
	public function logout()
    {
        if (!$this->is_logged_in()) {
            redirect('login');
        } else {
            $this->session->set_userdata(array('is_logged_in' => FALSE));
            $this->session->sess_destroy();
            $this->load->view('login');
        }
    }
	private function is_logged_in()
    {
        return $this->session->userdata('is_logged_in');
    }	
}