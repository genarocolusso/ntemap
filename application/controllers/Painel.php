<?php
define('IS_AJAX', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');

class Painel extends CI_Controller {
	public function __construct()
       {
            parent::__construct();
            $this->load->helper('url');$this->load->model('registro_model');
            $this->load->model('registro_model');
            // Your own constructor code
       }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{ 
	   
	
	$data['polos'] = $this->registro_model->polos();
	
	 
		$this->load->view('painel', $data);
	}
	public function poloinfos(){


		$data['polos'] = $this->registro_model->somapolos();
	
	 
		$this->load->view('painelpolos', $data);


	}


	public function cadastrar(){
        
        $this->registro_model->cadastrar();
        
    }
    	public function atualizarpolo(){
        
        $this->registro_model->atualizar();
        
    }

    public function mostratabela(){
    	 
        
	     $data['polos'] = $this->registro_model->polos();  
	     echo $this->load->view('admin/tabelapolos', $data, true); // returns view as data
	     
	    

    }
     public function mostradadosatualizados(){
    	 
        
	     $data['polos'] = $this->registro_model->somapolos();  
	     echo $this->load->view('admin/editpolostable', $data, true); // returns view as data
	      

    }


}
