<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Enfermedades_model extends CI_Model 
{
    public function __construct() {
      parent::__construct();
    }
	public function listEnf() {	
		$enf = $this->db->get('enfermedades')
            			->result_array();		
	    return $enf;					
	}
	public function insertEnf($nomenf, $descenf){
		$query = $this->db->where('nombre',$nomenf);
		$query = $this->db->get('enfermedades');
	  	if($query->num_rows()==0){
 			$this->db->insert('enfermedades', array('nombre' => $nomenf, 'descripcion' => $descenf));
			return 'success'; 
		}else{return 'error'; }
	}
 	public function editEnf($nomenf, $descenf, $id) {
  		$query = $this->db->where('codigo',$id);
		$query = $this->db->get('enfermedades');
	  	if($query->num_rows()!=0){
			$this->db->where('codigo',$id);
			$this->db->update('enfermedades', array('nombre' => $nomenf, 'descripcion' => $descenf));
			return 'success';
		}else{return 'error';}			   
	}
	public function deleteEnf($id){
		$this->db->where('codigo',$id);
		$this->db->delete('enfermedades');
		$query = $this->db->where('codigo',$id);
		$query = $this->db->get('enfermedades');
		if($query->num_rows()==0){
			return 'success';
		}else{
		    return 'error';
	   }
	}	
	public function getEnf($enf) {
		$query = $this->db->where('codigo',$enf);
		$query = $this->db->get('enfermedades');
		$info = array();
		foreach($query->result_array() as $datos){
			$info['codigo']=$enf;
  			$info['nombre']=$datos['nombre'];
  			$info['descripcion']=$datos['descripcion'];
		}
		return $info;
	}
	
}
