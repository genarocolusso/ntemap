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
		$config['allowed_types'] = '*';
		$config['max_size']	= '8100';

		$file_name = $_FILES['userfile']['name']; 

		$config['file_name'] = $this->input->post('id_polo_click', TRUE).'_'.$file_name;
	 
		$this->load->library('upload', $config);

	if ( ! $this->upload->do_upload())
	{
		$error = array('error' => $this->upload->display_errors());
		print_r($error);
		redirect('/Painel/poloinfos');
	}
	else
	{
		$data  = $this->upload->data();
 
		$data1 = array(

			'arquivo_path' =>  'uploads/'.$data['file_name'],
			'galeria' =>  $this->input->post('galeria'),
			'id_polo' => 	$this->input->post('id_polo_click', TRUE)
			);
		$this->db->insert('polo_arquivo', $data1);
		redirect('/Painel/poloinfos');
			 			// adiciona arquivo na tabela polo_arquivo mais de um arquivo pode ser linkado a um polo

	}
}



}
?>