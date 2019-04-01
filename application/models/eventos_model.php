<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Eventos_model extends CI_Model 
{
    public function __construct() {
      parent::__construct();
    }
	public function listeventos() {	
		$eventos = $this->db->order_by('inicio')
            		->get('eventos')
            		->result_array();		
	    return $eventos;					
	}
	public function insertEvent($tituloevent, $inicio, $fin, $descevento, $creadopor){		
	   	
		$this->db->insert('eventos', array('titulo' => $tituloevent, 'descripcion' => $descevento, 'creadopor' => $creadopor, 'editadopor'=> $creadopor, 'inicio'=> $inicio, 'finalizacion'=> $fin));
		return 'success';   
			
	}
	public function editEvent($tituloevent, $inicio, $fin, $descevento, $editadopor, $id) {
		$query = $this->db->where('id',$id);		
		$query = $this->db->get('eventos');
	  	if($query->num_rows()!=0){
			$this->db->where('id',$id);		
			$this->db->update('eventos', array('titulo' => $tituloevent, 'descripcion' => $descevento, 'editadopor'=> $editadopor, 'inicio'=> $inicio, 'finalizacion'=> $fin));
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
	public function deleteEvent($idevent){
		$this->db->where('id',$idevent);
		$this->db->delete('eventos');
		$query = $this->db->where('id',$idevent);
		$query = $this->db->get('eventos');
		if($query->num_rows()==0){
			return 'success';
		}else{
		    return 'error';
	   }
	}
	public function getEvent($id) {
		$query = $this->db->where('id',$id);
		$query = $this->db->get('eventos');
		$info = array();
		foreach($query->result_array() as $datos){
			$info['id']=$id;
  			$info['titulo']=$datos['titulo'];
  			$info['descripcion']=$datos['descripcion'];
 			$info['inicio']=$datos['inicio'];	
			$info['fin']=$datos['finalizacion'];		
  		}
		return $info;
	}
	public function getNumEvent(){
		$hoy = strtotime(date("m/d/Y"));
		$query = $this->db->get('eventos');
		$info = array();
		$num=0;
		foreach($query->result_array() as $datos){
			$fin = strtotime($datos['finalizacion']);
			if($hoy <= $fin){
				$num = $num+1;	
			}
  		}
		return $num;
	}
}