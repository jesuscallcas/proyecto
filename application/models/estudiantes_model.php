<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Estudiantes_model extends CI_Model 
{
    public function __construct() {
      parent::__construct();
    }
	public function listestMat() {	
		$est = $this->db->where('entrevista_matricula','Si')
						->where('matricula_financiera','Si')
            			->get('estudiante')
            			->result_array();		
	    return $est;					
	}
	public function listestEnt() {	
		$est = $this->db->where('entrevista_matricula','No')
						->where('matricula_financiera','No')
            			->get('estudiante')
            			->result_array();		
	    return $est;					
	}
	public function listestFin() {	
		$est = $this->db->where('entrevista_matricula','Si')
						->where('matricula_financiera','No')
            			->get('estudiante')
            			->result_array();		
	    return $est;					
	}	  
	public function insertEst($foto, $tdoc, $nombreest, $apeest, $nacimientoest, $identidadest, $edadest, $lugnacest, $genero, $grupsangest, $mailest, $direccionest, $telefonoest, $jornadaest, $gradoest, $nombrepadre, $ocupapadre, $telefonopadre, $nombremadre, $ocupamadre, $telefonomadre, $nombreacu, $ocupaacu, $telacu, $mailacu, $vivepadres, $tipoest, $colanterior, $tipovivienda, $mailpadre, $mailmadre, $nivelestpadre, $nivelestmadre, $nivelestacu, $ingresospadres, $ingresoacu, $otrosingresos, $totalingresos, $motret, $aingreso, $asalud) 
	{
		$query = $this->db->where('identificacion',$identidadest);		
		$query = $this->db->get('estudiante');
	  	if($query->num_rows()==0){
			$creacion=date("Y-n-j H:i:s");		
	   		$this->db->insert('estudiante', array('tipoidentificacion' => $tdoc, 'identificacion' => $identidadest, 'nombres' => $nombreest, 'apellidos' => $apeest, 'nombre_completo' => $nombreest.' '.$apeest, 'lugnacimiento' => $lugnacest, 'genero' => $genero, 'fechanac' => $nacimientoest, 'edad' => $edadest, 'email' => $mailest, 'direccion' => $direccionest, 'telefono' => $telefonoest, 'curso' => $gradoest, 'jornada' => $jornadaest, 'sangre' => $grupsangest, 'vivepadres' => $vivepadres, 'tipoest' => $tipoest, 'ieanterior' => $colanterior, 'foto' => $foto, 'creado' => $creacion, 'entrevista_matricula' => 'No', 'matricula_financiera' => 'No', 'mot_ret_ie_ant' => $motret, 'tipovivienda' => $tipovivienda, 'aingreso' => $aingreso, 'ingresospadres' => $ingresospadres, 'ingresoacu'=>$ingresoacu, 'otrosingresos'=>$otrosingresos, 'totalingresos'=>$totalingresos, 'nompadre' => $nombrepadre, 'ocupadre' => $ocupapadre, 'nivelestpadre' => $nivelestpadre, 'telpadre' => $telefonopadre, 'emailpadre' => $mailpadre, 'nommadre' => $nombremadre, 'ocumadre' => $ocupamadre, 'nivelestmadre' => $nivelestmadre, 'telmadre' => $telefonomadre, 'emailmadre' => $mailmadre, 'nomacu' => $nombreacu, 'ocuacu' => $ocupaacu, 'nivelestacu' => $nivelestacu, 'telacu' => $telacu, 'emailacu' => $mailacu, 'asalud'=>$asalud));			
			return 'success';
	   }else{
		    return 'error';
	   }
	}
	public function editEst($foto, $tdoc, $nombreest, $apeest, $nacimientoest, $identidadest, $edadest, $lugnacest, $genero, $grupsangest, $mailest, $direccionest, $telefonoest, $jornadaest, $gradoest, $nombrepadre, $ocupapadre, $telefonopadre, $nombremadre, $ocupamadre, $telefonomadre, $nombreacu, $ocupaacu, $telacu, $mailacu, $vivepadres, $tipoest, $colanterior, $tipovivienda, $mailpadre, $mailmadre, $nivelestpadre, $nivelestmadre, $nivelestacu, $ingresospadres, $ingresoacu, $otrosingresos, $totalingresos, $motret, $aingreso) {
		$query = $this->db->where('identificacion',$identidadest, $asalud);		
		$query = $this->db->get('estudiante');
	  	if($query->num_rows()!=0){
			if($foto!=''){			
				$this->db->where('identificacion',$identidadest);		
				$this->db->update('estudiante', array('tipoidentificacion' => $tdoc, 'identificacion' => $identidadest, 'nombres' => $nombreest, 'apellidos' => $apeest, 'nombre_completo' => $nombreest.' '.$apeest, 'lugnacimiento' => $lugnacest, 'genero' => $genero, 'fechanac' => $nacimientoest, 'edad' => $edadest, 'email' => $mailest, 'direccion' => $direccionest, 'telefono' => $telefonoest, 'curso' => $gradoest, 'jornada' => $jornadaest, 'sangre' => $grupsangest, 'vivepadres' => $vivepadres, 'tipoest' => $tipoest, 'ieanterior' => $colanterior, 'foto' => $foto, 'mot_ret_ie_ant' => $motret, 'tipovivienda' => $tipovivienda, 'aingreso' => $aingreso, 'ingresospadres' => $ingresospadres, 'ingresoacu'=>$ingresoacu, 'otrosingresos'=>$otrosingresos, 'totalingresos'=>$totalingresos, 'nompadre' => $nombrepadre, 'ocupadre' => $ocupapadre, 'nivelestpadre' => $nivelestpadre, 'telpadre' => $telefonopadre, 'emailpadre' => $mailpadre, 'nommadre' => $nombremadre, 'ocumadre' => $ocupamadre, 'nivelestmadre' => $nivelestmadre, 'telmadre' => $telefonomadre, 'emailmadre' => $mailmadre, 'nomacu' => $nombreacu, 'ocuacu' => $ocupaacu, 'nivelestacu' => $nivelestacu, 'telacu' => $telacu, 'emailacu' => $mailacu, 'asalud'=>$asalud));
			}else{
				$this->db->where('identificacion',$identidadest);		
				$this->db->update('estudiante', array('tipoidentificacion' => $tdoc, 'identificacion' => $identidadest, 'nombres' => $nombreest, 'apellidos' => $apeest, 'nombre_completo' => $nombreest.' '.$apeest, 'lugnacimiento' => $lugnacest, 'genero' => $genero, 'fechanac' => $nacimientoest, 'edad' => $edadest, 'email' => $mailest, 'direccion' => $direccionest, 'telefono' => $telefonoest, 'curso' => $gradoest, 'jornada' => $jornadaest, 'sangre' => $grupsangest, 'vivepadres' => $vivepadres, 'tipoest' => $tipoest, 'ieanterior' => $colanterior, 'mot_ret_ie_ant' => $motret, 'tipovivienda' => $tipovivienda, 'aingreso' => $aingreso, 'ingresospadres' => $ingresospadres, 'ingresoacu'=>$ingresoacu, 'otrosingresos'=>$otrosingresos, 'totalingresos'=>$totalingresos, 'nompadre' => $nombrepadre, 'ocupadre' => $ocupapadre, 'nivelestpadre' => $nivelestpadre, 'telpadre' => $telefonopadre, 'emailpadre' => $mailpadre, 'nommadre' => $nombremadre, 'ocumadre' => $ocupamadre, 'nivelestmadre' => $nivelestmadre, 'telmadre' => $telefonomadre, 'emailmadre' => $mailmadre, 'nomacu' => $nombreacu, 'ocuacu' => $ocupaacu, 'nivelestacu' => $nivelestacu, 'telacu' => $telacu, 'emailacu' => $mailacu, 'asalud'=>$asalud));
			}
			return 'success';
		}else{return 'error';}			   
	}
	public function deleteEst($idest){
		$this->db->where('identificacion',$idest);
		$this->db->delete('estudiante');
		$query = $this->db->where('identificacion',$idest);
		$query = $this->db->get('estudiante');
		if($query->num_rows()==0){
			return 'success';
		}else{
		    return 'error';
	   }
	}
	public function getEst($est) {
		$queryEst = $this->db->where('identificacion',$est);
		$queryEst = $this->db->get('estudiante');
		if($queryEst->num_rows()==0){
			$query = $this->db->where('identificacion',$est);
			$query = $this->db->get('registro');		
			$info = array();
			foreach($query->result_array() as $datos){
				$info['identificacion']=$est;
				$info['nombres']=$datos['NOMEST'];
				$info['apellidos']=$datos['APELLIDOEST'];
				$info['nombre_completo']=$datos['nombre_completo']; 
				$info['estado']="registro"; 
			}
		}else{
			$info = array();
			foreach($queryEst->result_array() as $datos){
				$info['identificacion']=$est;
				$info['nombres']=$datos['nombres'];
				$info['apellidos']=$datos['apellidos'];
				$info['nombre_completo']=$datos['nombre_completo'];
				$info['estado']="estudiante";
				$info['tipoidentificacion']=$datos['tipoidentificacion'];
				$info['lugnacimiento']=$datos['lugnacimiento'];
				$info['genero']=$datos['genero'];
				$info['fechanac']=$datos['fechanac'];	
				$info['edad']=$datos['edad'];
				$info['email']=$datos['email'];
				$info['direccion']=$datos['direccion'];
				$info['telefono']=$datos['telefono'];
				$info['curso']=$datos['curso'];
				$info['jornada']=$datos['jornada'];
				$info['sangre']=$datos['sangre'];
				$info['asalud']=$datos['asalud'];
				$info['padre']=$datos['nompadre'];
				$info['ocupadre']=$datos['ocupadre'];
				$info['telpadre']=$datos['telpadre'];
				$info['emailpadre']=$datos['emailpadre'];
				$info['nivelestpadre']=$datos['nivelestpadre'];
				$info['madre']=$datos['nommadre'];
				$info['ocumadre']=$datos['ocumadre'];
				$info['telmadre']=$datos['telmadre'];
				$info['emailmadre']=$datos['emailmadre'];
				$info['nivelestmadre']=$datos['nivelestmadre'];
				$info['acudiente']=$datos['nomacu'];
				$info['ocuacu']=$datos['ocuacu'];
				$info['telacu']=$datos['telacu'];			
				$info['emailacu']=$datos['emailacu'];
				$info['nivelestacu']=$datos['nivelestacu'];
				$info['vivepadres']=$datos['vivepadres'];
				$info['tipovivienda']=$datos['tipovivienda'];
				$info['tipoest']=$datos['tipoest'];
				$info['ieanterior']=$datos['ieanterior'];
				$info['mot_ret_ie_ant']=$datos['mot_ret_ie_ant'];
				$info['aingreso']=$datos['aingreso'];		
				$info['foto']=$datos['foto'];	
				$info['ingresospadres']=$datos['ingresospadres'];
				$info['ingresoacu']=$datos['ingresoacu'];
				$info['otrosingresos']=$datos['otrosingresos'];
				$info['totalingresos']=$datos['totalingresos'];			
			}
		}
		 return $info;		
	}
	public function getAsp($est) {
		$queryEst = $this->db->where('identificacion',$est);
		$queryEst = $this->db->get('registro');		
		$info = array();
		foreach($queryEst->result_array() as $datos){
			$info['identificacion']=$est;
  			$info['nombres']=$datos['NOMEST'];
			$info['apellidos']=$datos['APELLIDOEST'];
			$info['nombre_completo']=$datos['nombre_completo'];  						
  		}
		return $info;
	}
	public function getConv($est) {	
		$queryCon = $this->db->order_by('fecha','desc')
							 ->where('estudiante',$est) 
							 ->where('tipo','1')           
            				 ->get('observaciones')
               			 	 ->result();
		return $queryCon;
	}
	public function getCorr($est) {	
		$queryCor = $this->db->order_by('fecha','desc')
							 ->where('estudiante',$est)
							 ->where('tipo','2')            
            				 ->get('observaciones')
               			 	 ->result();
		return $queryCor;
	} 
	public function getEsti($est) {	
		$queryEst = $this->db->order_by('fecha','desc')
							 ->where('estudiante',$est)
							 ->where('tipo','3')            
            				 ->get('observaciones')
               			 	 ->result();
		return $queryEst;
	}
	public function getAca($est) {	
		$queryAca = $this->db->order_by('fecha','desc')
							 ->where('estudiante',$est)
							 ->where('tipo','4')            
            				 ->get('observaciones')
               			 	 ->result();
		return $queryAca;
	}
	public function conlistest($est) {	
		$estu = $this->db->select('nombre_completo, identificacion')
						->like('nombres', $est)
						->or_like('apellidos', $est)
						->or_like('nombre_completo', $est)							
            			->get('estudiante')
						->result();
		return $estu;					
	}
	public function conlistasp($est) {	
		$estu = $this->db->select('nombre_completo, identificacion')
						->like('NOMEST', $est)
						->or_like('APELLIDOEST', $est)
						->or_like('nombre_completo', $est)							
            			->get('registro')
						->result();
		return $estu;					
	}
	public function insertEnt($fechaente,$horaent,$obsent,$propor,$idproente,$idestent,$creado) 
	{	$query = $this->db->where('estudiante',$idestent);		
		$query = $this->db->get('entrevistas_matricula');
	  	if($query->num_rows()==0){
	   		$this->db->insert('entrevistas_matricula', array('estudiante'=>$idestent,'fecha'=>$fechaente,'hora'=>$horaent,'observaciones'=>$obsent,'creadopor'=>$propor,'idcreador'=>$idproente,'fechacreacion'=>$creado));	
			$this->db->where('identificacion',$idestent);		
			$this->db->update('estudiante', array('pro_entrevista_mat' => 'Si'));		
			return 'success';
	   }else{
		    return 'error';
	   }
	}
	public function editEnt($fechaente,$horaent,$obsent,$propor,$idproente,$idestent) 
	{	$query = $this->db->where('estudiante',$idestent);		
		$query = $this->db->get('entrevistas_matricula');
	  	if($query->num_rows()>0){
	   		$this->db->update('entrevistas_matricula', array('fecha'=>$fechaente,'hora'=>$horaent,'observaciones'=>$obsent,'creadopor'=>$propor,'idcreador'=>$idproente));			
			return 'success';
	    }else{
		    return 'error';
	    }
	}
	public function getEnt($ent) {
		$queryEnt = $this->db->where('estudiante',$ent);
		$queryEnt = $this->db->get('entrevistas_matricula');		
		$info = array();
		foreach($queryEnt->result_array() as $datos){
			$info['estudiante']=$datos['estudiante'];
			$info['fecha']=$datos['fecha'];
  			$info['hora']=$datos['hora'];
			$info['observaciones']=$datos['observaciones'];
  		}
		return $info;
	}
	public function getEntEst($id){				
		$ent = $this->db->where('estudiante',$id)
            			->get('entrevistas_matricula')
            			->result_array();		
	    return $ent;
	}
	public function conFormEstMat($id){	
		$query = $this->db->where('identificacion',$id);
		$query = $this->db->get('estudiante');
		return $query->num_rows();
	 }
}