<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');$this->load->model('registro_model');
		$this->load->helper('file');
		$this->load->model('curso_model');
            // index carrega polos ativos e inativos e todos polos. para mostrar no mapa 
			  
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

	for ($i=0; $i < count($data['polos']); $i++) { 

	 	    $data['polos'][$i]['id'] =  $data['polos'][$i]['id']*2+1234; 
	 		$str = explode('-', $data['polos'][$i]['name']);
			$url = strtolower(trim($str[0]));
			$data['polos'][$i]['uri'] = $url."_".$data['polos'][$i]['id'];

	 		//echo $data['polos'][$i]['id']."<br>".$data['polos'][$i]['uri']."<br>";
	 	  
	 }  
	$this->load->view('welcome_message',$data);
}


function poloinfo(){ 

	$poloidreal = ($this->uri->segment(2,0)-1234)/2;
	$data['polos'] = $this->registro_model->polosid($poloidreal);
	$data['infocontato'] = $this->registro_model->infodopolo($poloidreal);
	$data['infopolo'] = $this->curso_model->cursosporpolo($poloidreal);
	$data['imagens'] = $this->curso_model->pegaarquivoId($poloidreal);
 
  	$data['existearquivo'] = 0;

    foreach($data['imagens'] as $key => $value) {  
        
         if( $value['galeria']==0){  
 				$data['existearquivo'] += 1;
      } 

    } 
 

	$this->load->view('infopolo',$data);
}

}
 