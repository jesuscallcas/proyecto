<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Estudiantes extends CI_Controller 
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
      $est = $this->estudiantes_model->listestMat();
	  $numEvent= $this->eventos_model->getNumEvent();
	  $nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));
	  $MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario')); 
	  $numEnt= $this->registro_model->getNumEnt();
	  $numEntefe= $this->registro_model->getNumEntEfe();
	  $fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
      $this->load->view('dashboard',array(
            'menu' => "lista_estudiantes",
			'listest' => $est,
			'numevents' => $numEvent,
			'nument' => $numEnt,
			'numentefe' => $numEntefe,
			'listmensajes' => $MenBE,
			'fotoUser' => $fotoUser,
			'nummp' => $nummp
			));
    }
	public function entrevista()
    {
      $est = $this->estudiantes_model->listestEnt();
	  $numEvent= $this->eventos_model->getNumEvent();
	  $nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));
	  $MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario')); 
	  $numEnt= $this->registro_model->getNumEnt();
	  $numEntefe= $this->registro_model->getNumEntEfe();
	  $fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
      $this->load->view('dashboard',array(
            'menu' => "entrevistas-matricula",
			'listest' => $est,
			'numevents' => $numEvent,
			'nument' => $numEnt,
			'numentefe' => $numEntefe,
			'listmensajes' => $MenBE,
			'fotoUser' => $fotoUser,
			'nummp' => $nummp
			));
    }
	public function financiera()
    {
      $est = $this->estudiantes_model->listestFin();
	  $numEvent= $this->eventos_model->getNumEvent();
	  $nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));
	  $MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario')); 
	  $numEnt= $this->registro_model->getNumEnt();
	  $numEntefe= $this->registro_model->getNumEntEfe();
	  $fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
      $this->load->view('dashboard',array(
            'menu' => "matricula-financiera",
			'listest' => $est,
			'numevents' => $numEvent,
			'nument' => $numEnt,
			'numentefe' => $numEntefe,
			'listmensajes' => $MenBE,
			'fotoUser' => $fotoUser,
			'nummp' => $nummp
			));
    }
	public function Est()
	{ 	$proceso=$_POST['process'];
		$foto = $_POST['foto2'];
		$tdoc = $_POST['tidentidadest'];
		$nombreest = $_POST['nombreest'];
		$apeest = $_POST['apeest'];
		$nacimientoest = $_POST['nacimientoest'];				
		$identidadest = $_POST['identidadest'];
		$edadest =$_POST['edadest'];
		$lugnacest = $_POST['lugnacest'];			
		$genero = $_POST['generoest'];
		$grupsangest= $_POST['grupsangest'];
		$mailest= $_POST['mailest'];
		$direccionest= $_POST['direccionest'];
		$telefonoest = $_POST['telefonoest'];
		$jornadaest= $_POST['jornadaest'];	
		$gradoest= $_POST['gradoest'];
		$nombrepadre= $_POST['nombrepadre'];
		$ocupapadre= $_POST['ocupapadre'];
		$telefonopadre= $_POST['telefonopadre'];
		$nombremadre= $_POST['nombremadre'];
		$ocupamadre= $_POST['ocupamadre'];
		$telefonomadre= $_POST['telefonomadre'];
		$nombreacu= $_POST['nombreacu'];
		$ocupaacu= $_POST['ocupaacu'];
		$telacu= $_POST['telacu'];
		$tipovivienda=$_POST['tipovivienda'];
		$mailacu= $_POST['emailacu'];
		$mailpadre= $_POST['emailpadre'];
		$mailmadre= $_POST['emailmadre'];
		$nivelestpadre= $_POST['nivelestpadre'];
		$nivelestmadre= $_POST['nivelestmadre'];
		$nivelestacu= $_POST['nivelestacu'];
		$ingresospadres = $_POST['ingresospadres'];
		$ingresoacu = $_POST['ingresoacu'];
		$otrosingresos = $_POST['otrosingresos'];
		$totalingresos = $_POST['totalingresos'];
		$motret = $_POST['motret'];
		$anoingreso = $_POST['anoingreso'];
		$vivepadres= $_POST['vivepadres'];		
		$tipoest= $_POST['tipoest'];
		$asalud= $_POST['asalud'];
		$colanterior= $_POST['colanterior'];
		$menu= $_POST['menu'];
		if($anoingreso==""){$aingreso=date("Y");}else{$aingreso=$anoingreso;}	
		if($proceso==1){		
		$estuest= $this->estudiantes_model->insertEst($foto, $tdoc, $nombreest, $apeest, $nacimientoest, $identidadest, $edadest, $lugnacest, $genero, $grupsangest, $mailest, $direccionest, $telefonoest, $jornadaest, $gradoest, $nombrepadre, $ocupapadre, $telefonopadre, $nombremadre, $ocupamadre, $telefonomadre, $nombreacu, $ocupaacu, $telacu, $mailacu, $vivepadres, $tipoest, $colanterior, $tipovivienda, $mailpadre, $mailmadre, $nivelestpadre, $nivelestmadre, $nivelestacu, $ingresospadres, $ingresoacu, $otrosingresos, $totalingresos, $motret, $aingreso, $asalud);
		}
		if($proceso==2){		
		$estuest= $this->estudiantes_model->editEst($foto, $tdoc, $nombreest, $apeest, $nacimientoest, $identidadest, $edadest, $lugnacest, $genero, $grupsangest, $mailest, $direccionest, $telefonoest, $jornadaest, $gradoest, $nombrepadre, $ocupapadre, $telefonopadre, $nombremadre, $ocupamadre, $telefonomadre, $nombreacu, $ocupaacu, $telacu, $mailacu, $vivepadres, $tipoest, $colanterior, $tipovivienda, $mailpadre, $mailmadre, $nivelestpadre, $nivelestmadre, $nivelestacu, $ingresospadres, $ingresoacu, $otrosingresos, $totalingresos, $motret, $aingreso, $asalud);
		}
		if($estuest == 'success'){	
			if($proceso==1){$success="El estudiante ".$nombreest." ".$apeest." fue creado(a) satisfactoriamente";}else{$success="El estudiante ".$nombreest." ".$apeest." fue editado(a) satisfactoriamente";}
			if($menu=0){
				$est = $this->estudiantes_model->listest();
				$item = "lista_estudiantes";			
				$numEvent= $this->eventos_model->getNumEvent();
				$nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));
				$MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario')); 
				$numEnt= $this->registro_model->getNumEnt();
				$numEntefe= $this->registro_model->getNumEntEfe();
				$fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));				
				$this->load->view('dashboard',array(
					'menu' => $item,
					'success' => $success,
					'listest' => $est,
					'numevents' => $numEvent,
					'nument' => $numEnt,
					'numentefe' => $numEntefe,
					'listmensajes' => $MenBE,
					'fotoUser' => $fotoUser,
					'nummp' => $nummp			
				));
			}else{
				$emailtsocial="tsocial@colombobolivariano.edu.co";
				$subject = 'Diligenciamiento de Formulario de Matricula';     
				$headers = "From:Instituto Colombo Bolivariano <administrador@colombobolivariano.edu.co>\r\n"; 
				$headers .= "Reply-To: administrador@colombobolivariano.edu.co\r\n";
				$headers .= "CC:Coordinacion <coordinacion@colombobolivariano.edu.co>\r\n";
				$headers .= "MIME-Version: 1.0\r\n";
				$headers .= "Content-Type: text/html; charset=UTF8\r\n";
	
				$message = '<html><body>';    		
				$message .= '<table rules="all" style="border-color: #0C85C7;" width="600">';
				$message .= "<tr><td colspan='2' align='center'><img src='http://localhost/icb-academico/img/unknown.png' border='0'></td></tr>";
				$message .= "<tr><td colspan='2' style='background: #eee;' align='justify'>Notificación de diligenciamiento de Formulario de Matricula.</td></tr>";
				$message .= "<tr><td><strong>Estudiante: </strong></td><td>".$nombreest." ".$apeest."</td></tr>";
				$message .= "<tr style='background: #eee;'><td><strong>Documento de Identidad: </strong></td><td>".$identidadest."</td></tr>";
				$message .= "<tr><td><strong>Grado al que aspira: </strong></td><td>".$gradoest."</td></tr>";				
				$message .= "<tr><td colspan='2' align='center'><a href='http://icb-academico.colombobolivariano.edu.co' target='_blank'><img src='http://localhost/icb-academico/img/ir.png' border='0'></a></td></tr>";			       
				$message .= "</table>";
				$message .= "</body></html>";				
				mail($emailtsocial, $subject, $message, $headers);
				  $nest = $this->dashboard_model->getnumest();
				  $njui = $this->dashboard_model->getnumjui();
				  $nusers=$this->dashboard_model->getnumusers();
				  $eventos = $this->eventos_model->listeventos();
				  $numEvent= $this->eventos_model->getNumEvent();
				  $numEnt= $this->registro_model->getNumEnt();
				  $formMat=$this->estudiantes_model->conFormEstMat($this->session->userdata('di'));
				  $EntEst= $this->estudiantes_model->getEntEst($this->session->userdata('di')); 	 
				  $numEntefe= $this->registro_model->getNumEntEfe();
				  $nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));	 
				  $MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario')); 
				  $fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
				  $this->load->view('dashboard', array(
						'menu'	=> "contenido_dashboard",
						'numest' => $nest,
						'success' => $success,
						'usuarios' => $nusers, 
						'juicios' => $njui,	
						'listevent' => $eventos,
						'listmensajes' => $MenBE,
						'numevents' => $numEvent,
						'EntEst' => $EntEst,
						'nument' => $numEnt, 
						'formMat' => $formMat, 		
						'numentefe' => $numEntefe,
						'fotoUser' => $fotoUser,
						'nummp' => $nummp		
				));
			
			}
		}else{
			if($proceso==1){$error="El documento ".$identidadest." ya se encuentra registrado en la base de datos";}else{$error="El documento de identidad suministrado, no corresponde al del estudiante ".$nombreest." ".$apeest;}
			if($menu=0){
				$est = $this->estudiantes_model->listest();
				$item = "lista_estudiantes";			
				$numEvent= $this->eventos_model->getNumEvent();
	  			$nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));
				$MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario')); 
				$numEnt= $this->registro_model->getNumEnt();
				$numEntefe= $this->registro_model->getNumEntEfe();
				$fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
				$this->load->view('dashboard',array(
					'menu' => $item,
					'error' => $error,
					'listest' => $est,
					'numevents' => $numEvent,
					'nument' => $numEnt,
					'numentefe' => $numEntefe,
					'listmensajes' => $MenBE,
					'fotoUser' => $fotoUser,
					'nummp' => $nummp
				));	
			}else{
				  $nest = $this->dashboard_model->getnumest();
				  $njui = $this->dashboard_model->getnumjui();
				  $nusers=$this->dashboard_model->getnumusers();
				  $eventos = $this->eventos_model->listeventos();
				  $numEvent= $this->eventos_model->getNumEvent();
				  $numEnt= $this->registro_model->getNumEnt();
				  $formMat=$this->estudiantes_model->conFormEstMat($this->session->userdata('di'));
				  $EntEst= $this->estudiantes_model->getEntEst($this->session->userdata('di')); 	 
				  $numEntefe= $this->registro_model->getNumEntEfe();
				  $nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));	 
				  $MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario')); 
				  $fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
				  $this->load->view('dashboard', array(
						'menu'	=> "contenido_dashboard",
						'numest' => $nest,
						'error' => $error,
						'usuarios' => $nusers, 
						'juicios' => $njui,	
						'listevent' => $eventos,
						'listmensajes' => $MenBE,
						'numevents' => $numEvent,
						'EntEst' => $EntEst,
						'nument' => $numEnt, 
						'formMat' => $formMat, 		
						'numentefe' => $numEntefe,
						'fotoUser' => $fotoUser,
						'nummp' => $nummp		
				));
			}	
		}		
    }
	public function EliminarEstAjax(){	
			$idest = $_POST['di'];
	   		$elimEst= $this->estudiantes_model->deleteEst($idest);
	   		if($elimEst == 'success'){
				$est = $this->estudiantes_model->listest();
				$numEvent= $this->eventos_model->getNumEvent();
				$MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario')); 
	  			$nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));
				$numEnt= $this->registro_model->getNumEnt();
				$numEntefe= $this->registro_model->getNumEntEfe();
				$fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
      			$this->load->view('dashboard',array(
            		'menu' => "lista_estudiantes",
					'success' => "El registro fue eliminado satisfactoriamente",
					'listest' => $est,
					'numevents' => $numEvent,
					'nument' => $numEnt,
					'numentefe' => $numEntefe,
					'listmensajes' => $MenBE,
					'fotoUser' => $fotoUser,
					'nummp' => $nummp
				));
			}else{
				$est = $this->estudiantes_model->listest();
				$numEvent= $this->eventos_model->getNumEvent();
	  			$nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));
				$MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario')); 
				$numEnt= $this->registro_model->getNumEnt();
				$numEntefe= $this->registro_model->getNumEntEfe();
				$fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
      			$this->load->view('dashboard',array(
            		'menu' => "lista_estudiantes",
					'error' => "El registro no pudo ser eliminado",
					'listest' => $est,
					'numevents' => $numEvent,
					'nument' => $numEnt,
					'numentefe' => $numEntefe,
					'listmensajes' => $MenBE,
					'fotoUser' => $fotoUser,
					'nummp' => $nummp
				));
			}	  		
       		
	} 	
	public function ConsultarEstAjax(){
		if($this->input->is_ajax_request()){
       		$est = $this->input->post('est');
	   		$conEst= array($this->estudiantes_model->getEst($est));
			foreach($conEst as $estu){
				$info['identificacion']=$estu['identificacion'];
  				$info['nombres']=$estu['nombres'];
				$info['apellidos']=$estu['apellidos'];
				$info['nomcompleto']=$estu['nombre_completo'];
				if($estu['estado']=="estudiante"){
  				$info['tipoidentificacion']=$estu['tipoidentificacion'];
 				$info['lugnacimiento']=$estu['lugnacimiento'];
				$info['genero']=$estu['genero'];
 				$info['fechanac']=$estu['fechanac'];	
				$info['edad']=$estu['edad'];
				$info['email']=$estu['email'];
				$info['direccion']=$estu['direccion'];
				$info['telefono']=$estu['telefono'];
				$info['curso']=$estu['curso'];
				$info['jornada']=$estu['jornada'];
				$info['sangre']=$estu['sangre'];
				$info['asalud']=$estu['asalud'];
				$info['padre']=$estu['padre'];
				$info['ocupadre']=$estu['ocupadre'];
				$info['telpadre']=$estu['telpadre'];
				$info['emailpadre']=$estu['emailpadre'];
				$info['nivelestpadre']=$estu['nivelestpadre'];
				$info['madre']=$estu['madre'];
				$info['ocumadre']=$estu['ocumadre'];
				$info['telmadre']=$estu['telmadre'];
				$info['emailmadre']=$estu['emailmadre'];
				$info['nivelestmadre']=$estu['nivelestmadre'];
				$info['acudiente']=$estu['acudiente'];
				$info['ocuacu']=$estu['ocuacu'];
				$info['telacu']=$estu['telacu'];			
				$info['emailacu']=$estu['emailacu'];
				$info['nivelestacu']=$estu['nivelestacu'];
				$info['vivepadres']=$estu['vivepadres'];
				$info['tipovivienda']=$estu['tipovivienda'];
				$info['tipoest']=$estu['tipoest'];
				$info['ieanterior']=$estu['ieanterior'];
				$info['mot_ret_ie_ant']=$estu['mot_ret_ie_ant'];
				$info['aingreso']=$estu['aingreso'];		
				$info['foto']=$estu['foto'];	
				$info['ingresospadres']=$estu['ingresospadres'];
				$info['ingresoacu']=$estu['ingresoacu'];
				$info['otrosingresos']=$estu['otrosingresos'];
				$info['totalingresos']=$estu['totalingresos'];
				}
			}
			echo json_encode($info);
		}		
	}
	public function coca(){
		if($this->input->is_ajax_request()){
       		$est = $this->input->post('est');
	   		$conConv=$this->estudiantes_model->getConv($est);
			echo json_encode($conConv);
		}		
	}
	public function cocra(){
		if($this->input->is_ajax_request()){
       		$est = $this->input->post('est');
	   		$conCorr=$this->estudiantes_model->getCorr($est);
			echo json_encode($conCorr);
		}		
	}
	public function coea(){
		if($this->input->is_ajax_request()){
       		$est = $this->input->post('est');
	   		$conEst=$this->estudiantes_model->getEsti($est);
			echo json_encode($conEst);
		}		
	}
	public function coaa(){
		if($this->input->is_ajax_request()){
       		$est = $this->input->post('est');
	   		$conAca=$this->estudiantes_model->getAca($est);
			echo json_encode($conAca);
		}		
	}
	public function autocompletar(){  
		if($this->input->is_ajax_request()){ 
			$est = $this->input->post('query');    	
	   		$lest = $this->estudiantes_model->conlistest($est);
			if($lest!=NULL){			
				echo json_encode($lest);
			}else{
				$lest = $this->estudiantes_model->conlistasp($est);
				echo json_encode($lest);
			}
		}
	}
	public function ProEnt(){ 
		$process = $_POST['process']; 
		$fechaente = $_POST['nacimientoest'];
		$horaent = $_POST['horaent'];
		$obsent = $_POST['obsent'];
		$propor = $_POST['creadopor'];
		$idproente = $_POST['creadoporid'];
		$idestent=$_POST['idEst'];
		$emailacu=$_POST['emailacu'];
		$creado=date("Y-n-j H:i:s");
		if($process==1){		
      		$proEnt = $this->estudiantes_model->insertEnt($fechaente,$horaent,$obsent,$propor,$idproente,$idestent,$creado);
		}else{
			$proEnt = $this->estudiantes_model->editEnt($fechaente,$horaent,$obsent,$propor,$idproente,$idestent);	
		}
		if($proEnt=='success'){
			if($process==1){
			$mensaje="Se ha programado una entrevista para el día ".$fechaente." a las ".$horaent;
			$subject = 'Programación de entrevista para matricula Instituto Colombo Bolívariano';     
    		$headers = "From:Instituto Colombo Bolivariano <administrador@colombobolivariano.edu.co>\r\n"; 
    		$headers .= "Reply-To: administrador@colombobolivariano.edu.co\r\n";
    		$headers .= "CC:Instituto Colombo Bolivariano <administrador@colombobolivariano.edu.co>\r\n";
    		$headers .= "MIME-Version: 1.0\r\n";
    		$headers .= "Content-Type: text/html; charset=UTF8\r\n";

    		$message = '<html><body>';    		
    		$message .= '<table rules="all" style="border-color: #0C85C7;" width="600">';
			$message .= "<tr><td colspan='2' align='center'><img src='http://localhost/icb-academico/img/unknown.png' border='0'></td></tr>";
			$message .= "<tr><td colspan='2' style='background: #eee;' align='justify'>Despues de haber validado la información suministrada por usted en el formulario de matricula, hemos programado una entrevista para conocerlo a usted y a su hijo@ o acudid@.</td></tr>";
    		$message .= "<tr><td><strong>Fecha: </strong></td><td>".$fechaente."</td></tr>";
    		$message .= "<tr style='background: #eee;'><td><strong>Hora: </strong></td><td>".$horaent."</td></tr>";
			$message .= "<tr><td><strong>Lugar: </strong></td><td>Instituto Colombo Bolívariano</td></tr>";
    		$message .= "<tr style='background: #eee;'><td><strong>Entrevistador: </strong></td><td>".$propor."</td></tr>";
			$message .= "<tr><td colspan='2' align='center'><a href='http://icb-academico.colombobolivariano.edu.co' target='_blank'><img src='http://localhost/icb-academico/img/ir.png' border='0'></a></td></tr>";			       
    		$message .= "</table>";
    		$message .= "</body></html>";				
			mail($emailacu, $subject, $message, $headers); 		
			$est = $this->estudiantes_model->listestEnt();
			$numEvent= $this->eventos_model->getNumEvent();
	  		$nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario')); 
	  		$MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario'));
	  		$numEnt= $this->registro_model->getNumEnt();
			$numEntefe= $this->registro_model->getNumEntEfe();
	  		$fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));    
      		$this->load->view('dashboard',array(
            	'menu' => "entrevistas-matricula",
				'listest' => $est,
				'numevents' => $numEvent,
				'nument' => $numEnt,
				'numentefe' => $numEntefe,
				'listmensajes' => $MenBE,
				'fotoUser' => $fotoUser,
				'success' => $mensaje,
				'nummp' => $nummp
			));
			}else{
				$mensaje="Se ha reprogramado una entrevista para el día ".$fechaente." a las ".$horaent;
				$subject = 'Reprogramación de entrevista para matricula Instituto Colombo Bolívariano';     
    			$headers = "From:Instituto Colombo Bolivariano <administrador@colombobolivariano.edu.co>\r\n"; 
    			$headers .= "Reply-To: administrador@colombobolivariano.edu.co\r\n";
				$headers .= "CC:Instituto Colombo Bolivariano <administrador@colombobolivariano.edu.co>\r\n";
				$headers .= "MIME-Version: 1.0\r\n";
				$headers .= "Content-Type: text/html; charset=UTF8\r\n";
	
				$message = '<html><body>';    		
				$message .= '<table rules="all" style="border-color: #0C85C7;" width="600">';
				$message .= "<tr><td colspan='2' align='center'><img src='http://localhost/icb-academico/img/unknown.png' border='0'></td></tr>";
				$message .= "<tr><td colspan='2' style='background: #eee;' align='justify'>Nos permitimos informarle que su entrevista ha sido reprogramada, los detalles de la reprogramación los encontrará a continuación.</td></tr>";
				$message .= "<tr><td><strong>Fecha: </strong></td><td>".$fechaente."</td></tr>";
				$message .= "<tr style='background: #eee;'><td><strong>Hora: </strong></td><td>".$horaent."</td></tr>";
				$message .= "<tr><td><strong>Lugar: </strong></td><td>Instituto Colombo Bolívariano</td></tr>";
				$message .= "<tr style='background: #eee;'><td><strong>Entrevistador: </strong></td><td>".$propor."</td></tr>";
				$message .= "<tr><td colspan='2' align='center'><a href='http://icb-academico.colombobolivariano.edu.co' target='_blank'><img src='http://localhost/icb-academico/img/ir.png' border='0'></a></td></tr>";			       
				$message .= "</table>";
				$message .= "</body></html>";				
				mail($emailacu, $subject, $message, $headers); 		
				$est = $this->estudiantes_model->listestEnt();
				$numEvent= $this->eventos_model->getNumEvent();
				$nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario')); 
				$MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario'));
				$numEnt= $this->registro_model->getNumEnt();
				$numEntefe= $this->registro_model->getNumEntEfe();
				$fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));    
				$this->load->view('dashboard',array(
					'menu' => "entrevistas-matricula",
					'listest' => $est,
					'numevents' => $numEvent,
					'nument' => $numEnt,
					'numentefe' => $numEntefe,
					'listmensajes' => $MenBE,
					'fotoUser' => $fotoUser,
					'success' => $mensaje,
					'nummp' => $nummp
				));
			}
		}else{
			if($process==1){$mensaje="La entrevista no se ha podido programar, por favor informe de este error al administrador";}else{$mensaje="La entrevista no se ha podido reprogramar, por favor informe de este error al administrador";}
			$est = $this->estudiantes_model->listestEnt();
			$numEvent= $this->eventos_model->getNumEvent();
	  		$nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario')); 
	  		$MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario'));
	  		$numEnt= $this->registro_model->getNumEnt();
			$numEntefe= $this->registro_model->getNumEntEfe();
	  		$fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));    
			$this->load->view('dashboard',array(
            	'menu' => "entrevistas-matricula",
				'listest' => $est,
				'numevents' => $numEvent,
				'nument' => $numEnt,
				'numentefe' => $numEntefe,
				'listmensajes' => $MenBE,
				'fotoUser' => $fotoUser,
				'error' => $mensaje,
				'nummp' => $nummp
			));	
		}
	}
	public function ConsultarEntAjax(){
		if($this->input->is_ajax_request()){
       		$ent = $this->input->post('id');
	   		$conEnt= array($this->estudiantes_model->getEnt($ent));
			foreach($conEnt as $entr){
				$info['estudiante']=$entr['estudiante'];
				$info['fecha']=$entr['fecha'];
  				$info['hora']=$entr['hora'];
				$info['observaciones']=$entr['observaciones'];
			}
			echo json_encode($info);
		}		
	}
	private function is_logged_in()
    {
        return $this->session->userdata('is_logged_in');
    }
}