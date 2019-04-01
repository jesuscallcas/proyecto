<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
		
		if (!$this->is_logged_in()) {
            redirect('login');
        }
    }
    
    public function index()
    {	
      $nest = $this->dashboard_model->getnumest();
	  $njui = $this->dashboard_model->getnumjui();
	  $nusers=$this->dashboard_model->getnumusers();
	  $eventos = $this->eventos_model->listeventos();
	  $numEvent= $this->eventos_model->getNumEvent();
	  $numEnt= $this->registro_model->getNumEnt();
	  $numRegMat= $this->registro_model->getNumRegMat();
	  $formMat=$this->estudiantes_model->conFormEstMat($this->session->userdata('di'));
	  $EntEst= $this->estudiantes_model->getEntEst($this->session->userdata('di')); 	 
	  $numEntefe= $this->registro_model->getNumEntEfe();
	  $nummp = $this->mensajeria_model->numMenBE($this->session->userdata('usuario'));	 
	  $MenBE = $this->mensajeria_model->listMenBE($this->session->userdata('usuario')); 
	  $fotoUser = $this->dashboard_model->fotoUser($this->session->userdata('di'));
	  $this->load->view('dashboard', array(
	  		'menu'	=> "contenido_dashboard",
            'numest' => $nest,
			'usuarios' => $nusers, 
			'juicios' => $njui,	
			'numRegMat' => $numRegMat,
			'listevent' => $eventos,
			'listmensajes' => $MenBE,
			'numevents' => $numEvent,
			'EntEst' => $EntEst,
			'nument' => $numEnt, 
			'formMat' => $formMat, 		
			'numentefe' => $numEntefe,
			'fotoUser' => $fotoUser,
			'nummp' => $nummp		
        ));
    }	
	
	private function is_logged_in()
    {
        return $this->session->userdata('is_logged_in');
    }
}