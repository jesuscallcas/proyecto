<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios_model extends CI_Model 
{
    public function __construct() {
      parent::__construct();
    }
	public function listusers() {	
		$usuarios = $this->db->order_by('nombre')
            ->get('usuarios')
            ->result_array();		
	    return $usuarios;					
	} 
	public function insertUser($di, $nom, $email, $nivel, $tdoc, $gen, $tel, $foto, $pass) {
		$query = $this->db->where('identificacion',$di);
		$query = $this->db->or_where('nombre',$nom);
		$query = $this->db->or_where('email',$email);
		$query = $this->db->get('usuarios');
	  	if($query->num_rows()==0){
			$creacion=date("Y-n-j H:i:s");		
	   		$this->db->insert('usuarios', array('identificacion' => $di, 'nombre' => $nom, 'email' => $email, 'creacion' => $creacion, 'genero' => $gen, 'tel' => $tel, 'nivel' => $nivel, 'tdoc' => $tdoc, 'foto' => $foto, 'password' => sha1($pass)));
			return 'success';
	   }else{
		    return 'error';
	   }
	}
	public function editUser($di, $nom, $email, $nivel, $tdoc, $gen, $tel, $pass, $foto) {
		if($pass!='' AND $foto!=''){
			$this->db->where('identificacion',$di);			
	   		$this->db->update('usuarios', array('nombre' => $nom, 'email' => $email, 'genero' => $gen, 'tel' => $tel, 'nivel' => $nivel, 'tdoc' => $tdoc, 'foto' => $foto, 'password' => sha1($pass)));
		}
		if($pass=='' AND $foto!=''){
			$this->db->where('identificacion',$di);
			$this->db->update('usuarios', array('nombre' => $nom, 'email' => $email, 'genero' => $gen, 'tel' => $tel, 'nivel' => $nivel, 'tdoc' => $tdoc, 'foto' => $foto));
		}
		if($pass!='' AND $foto==''){
			$this->db->where('identificacion',$di);
			$this->db->update('usuarios', array('nombre' => $nom, 'email' => $email, 'genero' => $gen, 'tel' => $tel, 'nivel' => $nivel, 'tdoc' => $tdoc, 'password' => sha1($pass)));
		}
		if($pass=='' AND $foto==''){
			$this->db->where('identificacion',$di);
			$this->db->update('usuarios', array('nombre' => $nom, 'email' => $email, 'genero' => $gen, 'tel' => $tel, 'nivel' => $nivel, 'tdoc' => $tdoc));
		}
		return 'success';
	}
	public function getUser($di) {
		$query = $this->db->where('identificacion',$di);
		$query = $this->db->get('usuarios');
		$info = array();
		foreach($query->result_array() as $datos){
			$info['di']=$di;
  			$info['nombre']=$datos['nombre'];
  			$info['tdoc']=$datos['tdoc'];
 			$info['email']=$datos['email'];
			$info['gen']=$datos['genero'];
 			$info['nivel']=$datos['nivel'];	
			$info['tel']=$datos['tel'];
			$info['foto']=$datos['foto'];
  		}
		return $info;
	}
	public function deleteUser($di){
		$query = $this->db->where('iddirgrupo',$di);		
		$query = $this->db->get('cursos');
	  	if($query->num_rows()!=0){
			return 'error';
		}else{
			$this->db->where('identificacion',$di);
			$this->db->delete('usuarios');
		    return 'success';
	    }	
	}
}