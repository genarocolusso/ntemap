<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');$this->load->model('registro_model');

		$this->load->model('curso_model');
            // Your own constructor code
	}
	public function index()
	{ $this->load->helper('url');
$data['polos'] = [];
$data['ativos'] = [];
$data['inativos'] = [];
	
		$this->db->select("*");
		$this->db->from('polos');  
		$query = $this->db->get();
		if ($query->num_rows() > 0)
		{
		    $data['polos'] = $query->result_array();
		}
		$this->db->select("*");
		$this->db->from('polos');
		$this->db->where('ativo', 0);
		$query1 = $this->db->get();
		if ($query1->num_rows() > 0)
		{
		    $data['inativos'] = $query1->result_array();
		}
		$this->db->select("*");
		$this->db->from('polos');
		$this->db->where('ativo', 1);
		$query2 = $this->db->get();
		if ($query2->num_rows() > 0)
		{
		    $data['ativos'] = $query2->result_array();
		}
	 
		$this->load->view('welcome_message',$data);
	}


		 function poloinfo(){
		  	
		
		$data['polos'] = $this->registro_model->polosid( $this->uri->segment(2,0));
		$data['cursos'] = $this->curso_model->ncursos();

		$this->db->select("*");
		$this->db->from('curso');
		$this->db->where('idpolo', $this->uri->segment(2,0));
		$query2 = $this->db->get();
		if ($query2->num_rows() > 0)
		{
		    $data['infopolo'] = $query2->result_array();
		}



		 		$this->load->view('infopolo',$data);
		 }

}
