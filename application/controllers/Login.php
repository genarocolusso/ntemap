<?php
define('IS_AJAX', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');$this->load->model('registro_model'); 
		$this->load->model('validlogin');
		  


            // Your own constructor code
	}
	 
	public function index()
	{ 
 
		$data['logado'] = $this->session->userdata('logged');
		$this->load->view('login', $data);
		// carrega polos e cursos pra mostrar na view.
	}

	public function logout(){ 
 
		$this->session->sess_destroy();
			 redirect('Login/index');
		// carrega polos e cursos pra mostrar na view.
	}
	public function logar(){ 
 
		 $this->validlogin->logar();
		// carrega polos e cursos pra mostrar na view.
	}
 


	}
