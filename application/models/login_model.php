<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
	function ValidarUsuario($user, $pass, $ipUser) {
		$query1 = $this->db->where('identificacion',$user);
		$query1 = $this->db->or_where('NUMAUTO',$pass);			
		$query1 = $this->db->get('registro');
	  	if($query1->num_rows()!=0){
			$query = $this->db->where('identificacion',$user);   
     		$query = $this->db->where('Password',$pass);
      		$query = $this->db->get('usuarios'); 
		}else{
			$query = $this->db->where('identificacion',$user);   
     		$query = $this->db->where('Password',sha1($pass));
      		$query = $this->db->get('usuarios');
		}
	  	if($query->num_rows == 1){
				$ip_query = $this->db->where('ip',$ipUser);
				$ip_query = $this->db->get('intentos_login');  
				if($ip_query->num_rows == 1 && $ip_query->row('intentos')>2){
					$tiempo = 300;
					$tiempo_ahora = time() - $ip_query->row('ultimo_fallo');
					$espera=(round(($tiempo-$tiempo_ahora)/60));
					if ($espera > 0){
						$result[0]=1;
						$result[1]="Ha superado el limite maximo de intentos, por lo tanto debe esperar ".$espera." minuto(s) para volver a intentar acceder";
						return $result;
					}else{						
						$result[0]=2;
						$result[1]="El tiempo de espera a finalizado, por favor intente acceder nuevamente";
						$this->db->where('ip',$ipUser);	
	  					$this->db->update('intentos_login', array('intentos' => 0, 'conectado' => "No", 'ultimo_fallo' => date("Y-n-j H:i:s"), 'idusuario' => $user));
						return $result;
					}
				}if($ip_query->num_rows == 1 && $ip_query->row('intentos')<3){
					$this->db->where('identificacion',$user);	  					
					$this->db->update('usuarios', array('conectado' => "Si", 'ultimo_acceso' => date("Y-n-j H:i:s"), 'ip_acceso' =>$ipUser));
					$this->db->where('ip',$ipUser);	
	  				$this->db->update('intentos_login', array('intentos' => 0, 'conectado' => "Si", 'ultimo_fallo' => 0, 'idusuario' => $user));										
				}else{
					$this->db->where('identificacion',$user);	  					
					$this->db->update('usuarios', array('conectado' => "Si", 'ultimo_acceso' => date("Y-n-j H:i:s"), 'ip_acceso' =>$ipUser));
					$this->db->insert('intentos_login', array('intentos' => 0, 'ip' => $ipUser, 'ultimo_fallo' => 0, 'conectado' => "Si", 'idusuario' => $user));				}				
				$this->db->insert('usuarios_online', array('id_usuario' => $user, 'ip' => $ipUser, 'fecha_ultima_conexion' => time()));
				$user_exist=0;								
				return $user_exist;
		}else{				
	   		$ip_query = $this->db->where('ip',$ipUser);			       
     		$ip_query = $this->db->get('intentos_login');			 
	  		if($ip_query->num_rows == 1){
				if($ip_query->row('intentos')>2){
					$tiempo = 300;
					$tiempo_ahora = time() - $ip_query->row('ultimo_fallo');
					$espera=(round(($tiempo-$tiempo_ahora)/60));
					if ($espera > 0){
						$result[0]=1;
						$result[1]="Ha superado el limite maximo de intentos, por lo tanto debe esperar ".$espera." minuto(s) para volver a intentar acceder";
						return $result;
					}else{
						$this->db->where('ip',$ipUser);	  					
						$this->db->update('intentos_login', array('intentos' => 0));
						$result[0]=2;
						$result[1]="El tiempo de espera a finalizado, por favor intente acceder nuevamente";
						return $result;
					}						
			 	}else{
					$num_intentos = $ip_query->row('intentos');			
					$num_intentos=$num_intentos+1;
					$this->db->where('ip',$ipUser);	
	  				$this->db->update('intentos_login', array('intentos' => $num_intentos, 'conectado' => "No", 'ultimo_fallo' => time(), 'idusuario' => $user));					$result[0]=3;
					$result[1]="El Usuario y/o Contraseña no son correctos, por favor vuelva a intentarlo";
					return $result;
				 }
			}else{
			 	$this->db->insert('intentos_login', array('intentos' => 1, 'ip' => $ipUser, 'ultimo_fallo' => time(), 'conectado' => "No", 'idusuario' => $user));				$result[0]=4;
				$result[1]="El Usuario y/o Contraseña no son correctos, por favor vuelva a intentarlo";
				return $result;			 
			}
		}
   } 
   function getNombre($user) {
		$query = $this->db->where('identificacion',$user); 
      	$query = $this->db->get('usuarios'); 
		$resultNom=$query->row('nombre');			
	    return $resultNom;					
	}
	function getNivel($user) {
		$query = $this->db->where('identificacion',$user); 
      	$query = $this->db->get('usuarios'); 		
		$resultNiv=$query->row('nivel');	
	    return $resultNiv;					
	}
}