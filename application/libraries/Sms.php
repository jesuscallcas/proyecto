<?php if (!defined('BASEPATH')) exit('No direct script access allowed');   

/* * Esta clase esta basada en investigaciones y choreos de Pablo Glanz * Envia SMS a traves de la funcion mail de PHP */

class Sms {   
	var $_empresas = array(	'Tigo'=>'sms.tigo.com.co', 'Movistar'=>'movistar.com.co', 'Claro'=>'claro.com.co', 'Uff'=>'uff.com.co' );   

	var $empresa;	var $mensaje; var $nroCel; var $emailEnvia = "administrador@colombobolivariano.edu.co";     

// ================ // // Constructor // // ================ // 

	function Sms($empresa=null){   
		if(!is_null($empresa) && in_array($empresa, $this->_empresas)) 
			$this->empresa = $empresa; 
	}
/** * Envia el sms * * @param unknown_type $mensaje * @param unknown_type $nroCel */ 
	function enviar($mensaje, $nroCel, $empresa=null){   
		if( !is_null($empresa) && isset($this->_empresas[$empresa]) ){ 
			$destinatario = $nroCel.'@'.$this->_empresas[$empresa]; 
			$mensaje = wordwrap($mensaje, 100);   
			$asunto = 'Proceso de registro en Instituto Colombo Bolivariano'; 
			$cabeceras = "From:ITC-Academico <administrador@colombobolivariano.edu.co>\r\n"; 
    		$cabeceras .= "Reply-To: administrador@colombobolivariano.edu.co\r\n";
    		$cabeceras .= "CC:ITC-Academico <administrador@colombobolivariano.edu.co>\r\n";
    		$cabeceras .= "MIME-Version: 1.0\r\n";
    		$cabeceras .= "Content-Type: text/html; charset=UTF8\r\n";   
			mail($destinatario, $asunto, $mensaje, $cabeceras); 
		}else{ 
			foreach($this->_empresas as $emp => $empresa){   
				$mensaje = wordwrap($mensaje, 100); 
				$destinatario = $nroCel.'@'.$empresa; 
				$asunto = 'tu asunto'; 
				$cabeceras = 'From: from@from.com' . "\r\n" . 'Reply-To: reply@reply.com' . "\r\n" . 'X-Mailer: PHP/';   
				mail($destinatario, $asunto, $mensaje, $cabeceras);   
			}   
		} 
	}   
}   ?>