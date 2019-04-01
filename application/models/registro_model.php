<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registro_model extends CI_Model 
{
    public function __construct() {
      parent::__construct();
    }
	public function listReg() {	
		$registros = $this->db->order_by('FECHAREG')
            		->get('registro')
            		->result_array();		
	    return $registros;					
	}
	public function insertReg($tdoc, $identidadest, $nombreest, $apeest, $generoest, $mailest, $direccionest, $telefonoest, $gradoest, $encriptCode) 
	{
		$query1 = $this->db->where('identificacion',$identidadest);
		$query1 = $this->db->get('registro');
		$query2 = $this->db->where('identificacion',$identidadest);				
		$query2 = $this->db->get('usuarios');
	  	if($query1->num_rows()==0 && $query2->num_rows()==0){
			$fechareg=date("Y-n-j H:i:s");			
	   		$this->db->insert('registro', array('TIPODOC' => $tdoc, 'identificacion' => $identidadest, 'NOMEST' => $nombreest, 'APELLIDOEST' => $apeest,  'nombre_completo' => $nombreest.' '.$apeest, 'GENERO' =>$generoest, 'EMAIL' => $mailest, 'DIR' => $direccionest, 'TEL' => $telefonoest, 'GRADO' => $gradoest, 'FECHAREG' => $fechareg, 'NUMAUTO' => $encriptCode));			
			$this->db->insert('usuarios', array('identificacion' => $identidadest, 'nombre' => $nombreest.' '.$apeest, 'email' => $mailest, 'creacion' => $fechareg, 'genero' => $generoest, 'tel' => $telefonoest, 'nivel' => 'Estudiante', 'tdoc' => $tdoc, 'password' => $encriptCode));
			return 'success';
	   }else{
		    return 'error';
	   }
	}
	public function editReg($tdoc, $identidadest, $nombreest, $apeest, $generoest, $mailest, $direccionest, $telefonoest, $gradoest, $id) {
		$query1 = $this->db->where('ID',$id);		
		$query1 = $this->db->get('registro');		
		$query2 = $this->db->where('identificacion',$identidadest);				
		$query2 = $this->db->get('usuarios');
	  	if($query1->num_rows()!=0 && $query2->num_rows()!=0){
			$this->db->where('ID',$id);		
			$this->db->update('registro', array('TIPODOC' => $tdoc, 'identificacion' => $identidadest, 'NOMEST' => $nombreest, 'APELLIDOEST' => $apeest, 'nombre_completo' => $nombreest.' '.$apeest, 'GENERO' =>$generoest, 'EMAIL' => $mailest, 'DIR' => $direccionest, 'TEL' => $telefonoest, 'GRADO' => $gradoest,));
			$this->db->where('identificacion',$identidadest);	
			$this->db->update('usuarios', array('identificacion' => $identidadest, 'nombre' => $nombreest.' '.$apeest, 'email' => $mailest, 'genero' => $generoest, 'tel' => $telefonoest, 'tdoc' => $tdoc));
			return 'success';
		}else{return 'error';}			   
	}	
	public function deleteReg($id){
		$this->db->where('identificacion',$id);
		$this->db->delete('registro');
		$this->db->where('identificacion',$id);
		$this->db->delete('usuarios');
		$query = $this->db->where('identificacion',$id);
		$query = $this->db->get('registro');
		if($query->num_rows()==0){
			return 'success';
		}else{
		    return 'error';
	   }
	}
	public function getReg($id) {
		$query = $this->db->where('identificacion',$id);
		$query = $this->db->get('registro');
		$info = array();
		foreach($query->result_array() as $datos){
			$info['ID']=$datos['ID'];
  			$info['EMAIL']=$datos['EMAIL'];
  			$info['NOMEST']=$datos['NOMEST'];
			$info['APEEST']=$datos['APELLIDOEST'];
			$info['TIPODOC']=$datos['TIPODOC'];
			$info['DOCEST']=$datos['identificacion'];
			$info['TEL']=$datos['TEL'];
			$info['GENERO']=$datos['GENERO'];				
			$info['DIR']=$datos['DIR'];
			$info['GRADO']=$datos['GRADO'];
   		}
		return $info;
	}
	public function getFormMat($id) {
		$query = $this->db->where('identificacion',$id);
		$query = $this->db->get('estudiante');
		if($query->num_rows()==0){
			return "No";
		}else{return "Si";}
	}
	public function getEntMat($id) {
		$query = $this->db->where('identificacion',$id);
		$query = $this->db->get('estudiante');
		if($query->num_rows()==1){		
			foreach($query->result_array() as $datos){			
				return $datos['entrevista_matricula'];
			}
		}else{return "No";}
		
	}
	public function getMatFin($id) {
		$query = $this->db->where('identificacion',$id);
		$query = $this->db->get('estudiante');
		if($query->num_rows()==1){		
			foreach($query->result_array() as $datos){			
				return $datos['matricula_financiera'];
			}
		}else{return "No";}
		
	}
	public function getNumEnt() {		
		$ent = $this->db->where('pro_entrevista_mat','No')						
            			->get('estudiante');
		$nument = $ent->num_rows();	
	    return $nument;					
	}
	public function getNumEntEfe() {		
		$ent = $this->db->where('pro_entrevista_mat','Si')
						->where('entrevista_matricula','No')	
						->where('matricula_financiera','No')						
            			->get('estudiante');
		$nument = $ent->num_rows();	
	    return $nument;					
	}
	public function getNumRegMat() {		
		$registros = $this->db->get('registro');		
	    $numregmat = $registros->num_rows();	
	    return $numregmat;					
	}
}