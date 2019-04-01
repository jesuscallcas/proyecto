<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cursos_model extends CI_Model 
{
    public function __construct() {
      parent::__construct();
    }
	public function listcursos() {	
       $cursos = $this->db->order_by('GRADO')
            		      ->get('cursos')
            		      ->result_array();		
	    return $cursos;					
	}
	public function insertCurso($grado, $seccion, $desc, $numest, $numestreg){
 		$this->db->insert('cursos', array('GRADO' => $grado, 'SECCION' => $seccion,  'NUMEST' => $numest, 'NUMESTREG' => $numestreg, 'DESCRIPCION'=> $desc));
		return 'success'; 
	}
 	public function editCurso($grado, $seccion, $numest, $desc, $id) {
  		$query = $this->db->where('CODIGO',$id);
		$query = $this->db->get('cursos');
	  	if($query->num_rows()!=0){
			$this->db->where('CODIGO',$id);
			$this->db->update('cursos', array('GRADO' => $grado, 'SECCION' => $seccion, 'NUMEST' =>$numest, 'DESCRIPCION' => $desc));
			return 'success';
		}else{return 'error';}			   
	}
	public function deleteCurso($idcurso){
		$this->db->where('CODIGO',$idcurso);
		$this->db->delete('cursos');
		$query = $this->db->where('CODIGO',$idcurso);
		$query = $this->db->get('cursos');
		if($query->num_rows()==0){
			return 'success';
		}else{
		    return 'error';
	   }
	}	
	public function getCurso($id) {
		$query = $this->db->where('CODIGO',$id);
		$query = $this->db->get('cursos');
		$info = array();
		foreach($query->result_array() as $datos){
			$info['CODIGO']=$id;
  			$info['GRADO']=$datos['GRADO'];
  			$info['SECCION']=$datos['SECCION'];
			$info['NUMEST']=$datos['NUMEST'];
			$info['DESCRIPCION']=$datos['DESCRIPCION'];
   		}
		return $info;
	}
	
}
