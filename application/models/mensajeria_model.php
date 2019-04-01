<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mensajeria_model extends CI_Model 
{
    public function __construct() {
      parent::__construct();
    }
	public function listMenBE($user) {
		$mensajes = $this->db->where('destinatario',$user)
            		->get('mp')
            		->result_array();
	    return $mensajes;					
	}
	public function listMenEN($user) {
		$mensajes = $this->db->where('remitente',$user)
            		->get('mp')
            		->result_array();
	    return $mensajes;					
	}
	public function numMenBE($user) {
		$query = $this->db->where('destinatario',$user);	
		$query = $this->db->where('leido','no');
		$query = $this->db->where('papelera','no');	
		$query = $this->db->get('mp');
		$nummp = $query->num_rows();	
	    return $nummp;					
	}
	public function insertMensaje($asunto, $dest, $mensaje, $remitente, $fechaenvio){		   	
		$this->db->insert('mp', array('asunto' => $asunto, 'remitente' => $remitente, 'fecha_envio' => $fechaenvio, 'mensaje'=> $mensaje, 'destinatario'=> $dest));		
		return 'success'; 
	}
	public function papeleraMP($idmp) {	
			$this->db->where('idmp',$idmp);		
			$this->db->update('mp', array('papelera' => 'si'));
			return 'success';
	}
	public function recuperarMP($idmp) {	
			$this->db->where('idmp',$idmp);		
			$this->db->update('mp', array('papelera' => 'no'));
			return 'success';
	}	
	public function getMP($id, $ce) {		
		$query = $this->db->where('idmp',$id);
		$query = $this->db->get('mp');
		$info = array();
		foreach($query->result_array() as $datos){
			$info['idmp']=$id;
  			$info['asunto']=$datos['asunto'];
  			$info['remitente']=$datos['remitente'];
			$info['destinatario']=$datos['destinatario'];
 			$info['fecha_envio']=$datos['fecha_envio'];	
			$info['mensaje']=$datos['mensaje'];
			$info['leido']=$datos['leido'];		
  		}
		if($info['leido']=='no' and $ce!=1){
			$this->db->where('idmp',$id);		
			$this->db->update('mp', array('leido' => 'si'));
		}
		return $info;
	}	
	public function getNumMPP(){
		$query = $this->db->where('papelera','si');				
		$query = $this->db->get('mp');
		$nummpp = $query->num_rows();	
	    return $nummpp;
	}
}