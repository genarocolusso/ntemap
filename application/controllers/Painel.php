<?php
define('IS_AJAX', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');

class Painel extends CI_Controller {

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
	{ $this->load->helper('url');

	$data['polos'] = [];

		$this->db->select("*");
		$this->db->from('polos');
		$query = $this->db->get();
		if ($query->num_rows() > 0)
		{
		    $data['polos'] = $query->result_array();
		}


	 
		$this->load->view('painel', $data);
	}

	public function cadastrar(){
        $this->load->model('registro_model');
        $this->registro_model->cadastrar();
       
    }


}
