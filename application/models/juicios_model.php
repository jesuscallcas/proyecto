<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Juicios_model extends CI_Model 
{
    public function __construct() {
      parent::__construct();
    }
	public function listjuicios() {	
		$juicios = $this->db->order_by('tipo')
            ->get('juicios')
            ->result_array();		
	    return $juicios;					
	} 
	public function insertJuicio($tjuicio, $desempeno, $juicio) {
			$creacion=date("Y-n-j");
			$creado=$this->session->userdata('usuario');
			if($tjuicio==4){						
	   			$this->db->insert('juicios', array('desempeno' => $desempeno, 'juicio' => $juicio, 'tipo' => "Académico", 'cod'=>$tjuicio,'fecha_creacion' => $creacion, 'creado_por' => $creado, 'fecha_edicion' => $creacion, 'editado_por' => $creado));
			}
			if($tjuicio==1){
				$this->db->insert('juicios', array('desempeno' => "Convivencia Social", 'juicio' => $juicio, 'tipo' => "Convivencia Social", 'cod'=>$tjuicio,'fecha_creacion' => $creacion, 'creado_por' => $creado, 'fecha_edicion' => $creacion, 'editado_por' => $creado));
			}
			if($tjuicio==2){
				$this->db->insert('juicios', array('desempeno' => "Estimulo", 'juicio' => $juicio, 'tipo' => "Estimulo", 'cod'=>$tjuicio, 'fecha_creacion' => $creacion, 'creado_por' => $creado, 'fecha_edicion' => $creacion, 'editado_por' => $creado));
			}
			if($tjuicio==3){
				$this->db->insert('juicios', array('desempeno' => "Correctivo", 'juicio' => $juicio, 'tipo' => "Correctivo", 'cod'=>$tjuicio, 'fecha_creacion' => $creacion, 'creado_por' => $creado, 'fecha_edicion' => $creacion, 'editado_por' => $creado));
			}
			
			return 'success';	   
	}
	public function deleteJuicio($di){
		$this->db->where('id',$di);
		$this->db->delete('juicios');
		$query = $this->db->where('id',$di);
		$query = $this->db->get('juicios');
		if($query->num_rows()==0){
			return 'success';
		}else{
		    return 'error';
	   }
	}
	public function getJuicio($di) {
		$query = $this->db->where('id',$di);
		$query = $this->db->get('juicios');
		$info = array();
		foreach($query->result_array() as $datos){
			$info['id']=$di;
  			$info['desempeno']=$datos['desempeno'];
  			$info['juicio']=$datos['juicio'];
 			$info['tipo']=$datos['tipo'];
			$info['cod']=$datos['cod'];
  		}
		return $info;
	}
	public function editJuicio($id, $tjuicio, $desempeno, $juicio) {
			$edicion=date("Y-n-j");
			$editado=$this->session->userdata('usuario');
			if($tjuicio==4){
				$this->db->where('id',$id);						
	   			$this->db->update('juicios', array('desempeno' => $desempeno, 'juicio' => $juicio, 'tipo' => "Académico", 'cod'=>$tjuicio,'fecha_edicion' => $edicion, 'editado_por' => $editado));
			}
			if($tjuicio==1){
				$this->db->where('id',$id);						
	   			$this->db->update('juicios', array('desempeno' => "Convivencia Social", 'juicio' => $juicio, 'tipo' => "Convivencia Social", 'cod'=>$tjuicio,'fecha_edicion' => $edicion, 'editado_por' => $editado));
			}
			if($tjuicio==2){
				$this->db->where('id',$id);						
	   			$this->db->update('juicios', array('desempeno' => "Estimulo", 'juicio' => $juicio, 'tipo' => "Estimulo", 'cod'=>$tjuicio, 'fecha_edicion' => $edicion, 'editado_por' => $editado));
			}
			if($tjuicio==3){
				$this->db->where('id',$id);						
	   			$this->db->update('juicios', array('desempeno' => "Correctivo", 'juicio' => $juicio, 'tipo' => "Correctivo", 'cod'=>$tjuicio, 'fecha_edicion' => $edicion, 'editado_por' => $editado));
			}
			
			return 'success';	   
	}
}