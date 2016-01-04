<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
}
