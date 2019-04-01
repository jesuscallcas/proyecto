<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_model extends CI_Model 
{
    public function __construct() {
      parent::__construct();
    }
	public function getnumest() {			
      	$query = $this->db->get('estudiante');
		$numest = $query->num_rows();
	    return $numest;					
	} 
	public function getnumjui() {		
      	$query = $this->db->get('juicios'); 
		$numjui = $query->num_rows();
	    return $numjui;					
	}
	public function getnumusers() {		
      	$query = $this->db->get('usuarios'); 
		$numusers = $query->num_rows();
	    return $numusers;					
	} 
	public function fotoUser($user) {
		$usuario = $this->db->select('foto')
						->where('identificacion',$user)											
            			->get('usuarios');
		foreach ($usuario->result_array() as $row)
		{
   			return $row['foto'];
		}				
			
	} 
	
}