<?php

class Upload extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	function index()
	{
		$this->load->view('upload_form', array('error' => ' ' ));
	}

	function do_upload()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|pdf|docx|doc|ppt';
		$config['max_size']	= '8100';
	/*	$config['max_width']  = '1024';
		$config['max_height']  = '768';*/

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
					print_r($error);
			// redirect('/Painel/poloinfos');
		}
		else
		{
			$data  = $this->upload->data();

			 
			$data1 = array(
   
        'arquivo_path' =>  'uploads/'.$this->input->post('id_polo_click', TRUE).'_'.$data['file_name'],
         'id_polo' => 	$this->input->post('id_polo_click', TRUE)
   					);
			 $this->db->insert('polo_arquivo', $data1);
			 // redirect('/Painel/poloinfos');
			 			// adiciona arquivo na tabela polo_arquivo mais de um arquivo pode ser linkado a um polo


		}
	}


	
}
?>