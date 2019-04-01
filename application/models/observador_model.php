<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Observador_model extends CI_Model 
{
    public function __construct() {
      parent::__construct();
    }
	public function getObs($obs) {
		$queryObs = $this->db->where('id',$obs);
		$queryObs = $this->db->get('observaciones');		
		$info = array();
		foreach($queryObs->result_array() as $datos){
			$info['id']=$obs;
			$info['fecha']=$datos['fecha']; 
  			$info['descripcion']=$datos['descripcion'];
			$info['tipo']=$datos['tipo'];
  		}
		return $info;
	}
	public function newObs($fecha,$desc,$cpor,$cporid,$tipo,$est){	
		$this->db->insert('observaciones', array('fecha' => $fecha, 'descripcion' => $desc, 'creadopor' => $cpor, 'creadopor_di'=> $cporid, 'estudiante'=> $est, 'tipo'=> $tipo));
		return 'success';   
			
	}
	public function elimObs($obs){
		$this->db->where('id',$obs);
		$this->db->delete('observaciones');
		$query = $this->db->where('id',$obs);
		$query = $this->db->get('observaciones');
		if($query->num_rows()==0){
			return 'success';
		}else{
		    return 'error';
	   }
	}
	public function editObs($fecha,$desc,$cpor,$cporid,$idobs) {
		$query = $this->db->where('id',$idobs);		
		$query = $this->db->get('observaciones');
	  	if($query->num_rows()!=0){
			$this->db->where('id',$idobs);		
			$this->db->update('observaciones', array('fecha' => $fecha, 'descripcion' => $desc, 'creadopor'=> $cpor, 'creadopor_di'=> $cporid));
			return 'success';
		}else{return 'error';}			   
	}	
}