<?php
define('IS_AJAX', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');

class Painel extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');$this->load->model('registro_model'); 
		$this->load->model('curso_model');
		 $this->load->model('Validlogin', 'membership'); 
		 $this->membership->logged();
 
            // Your own constructor code
	}
	 
	public function index()
	{  
		$data['polos'] = $this->registro_model->polos();
		$data['cursos'] = $this->curso_model->ncursos();
		$data['logado'] = $this->session->userdata('logged');
		$this->load->view('painel', $data);
		// carrega polos e cursos pra mostrar na view.
	}
	public function poloinfos(){
		$data['cursos'] = $this->curso_model->ncursos();  
		$data['polos'] = $this->registro_model->somapolos();
		$data['logado'] = $this->session->userdata('logged');
		$this->db->select("*");
		$this->db->from('polo_arquivo');
		$query = $this->db->get();
		 if ($query->num_rows() > 0)
        {
           $data['arquivos'] =  $query->result_array();
        }  
		$this->load->view('painelpolos', $data);
		// carrega polos,cursos e arquivos pra mostrar na view. 
	}

	public function polocursos(){
		$data['cursos'] = $this->curso_model->cursos();  
		$data['polos'] = $this->registro_model->somapolos();
		$data['logado'] = $this->session->userdata('logged'); 
		$this->load->view('painelcursos', $data);
		// carrega polos e cursos pra mostrar na view. 
	}

	public function atualizastatus(){
		$data['cursos'] = $this->registro_model->atualizarativo(); 
		redirect('painel'); 
	}
	public function deletarpolo(){
		$data['cursos'] = $this->registro_model->deletar(); 
		redirect('painel');
	}
			public function deletarcurso(){
		$data['cursos'] = $this->registro_model->deletarCurso(); 
		redirect('painel/polocursos');
	}


	public function cadastrar(){ 
		$this->registro_model->cadastrar(); 
	}
	public function cadastrarcurso(){ 
		$this->curso_model->cadastrar(); 
	}
	public function atualizarpolo(){ 
		$this->registro_model->atualizar(); 
	}

	public function mostratabela(){ 
		$data['polos'] = $this->registro_model->polos();  
	     echo $this->load->view('admin/tabelapolos', $data, true); 
	 }
	 public function mostraarquivos(){ 
		$data['dadosarquivos'] = $this->registro_model->getarquivo();  
	     echo $this->load->view('admin/tabelaarquivos', $data, true); 
	 }
	 public function mostradadosatualizados(){ 
	 	$data['polos'] = $this->registro_model->somapolos();  
	 	$data['cursos'] = $this->curso_model->ncursos();  
	     echo $this->load->view('admin/editpolostable', $data, true); 
	 }
	  public function mostradadosatualizadosCURSOS(){ 
	 	$data['cursos'] = $this->curso_model->cursos();  
	     echo $this->load->view('admin/tabelacursos', $data, true); 
	 }
	 	function baixararquivo(){
    // $this->load->helper('download');
    // $data = file_get_contents(APPPATH .'/uploads/'.$this->uri->segment(3)); // Read the file's contents
    // $name = $this->uri->segment(3);
    // force_download($name, $data);

    		$file_name = $this->uri->segment(3);
        $mime = 'application/force-download';
        header('Pragma: public');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Cache-Control: private',false);
        header('Content-Type: '.$mime);
        header('Content-Disposition: attachment; filename="'.basename($file_name).'"');
        header('Content-Transfer-Encoding: binary');
         
        header('Connection: close');
        readfile(APPPATH .'/uploads/'.$file_name);
        exit();
		}
	}
