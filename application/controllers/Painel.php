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
	public function deletararquivo(){

		$arquivo = $this->input->post('filepath');
		$id = $this->input->post('deleted');


		  $this->db->where('id', $id);
		$this->db->delete('polo_arquivo'); 
		echo $arquivo;
		unlink('/var/www/html/ntemap/'.$arquivo);  



		 redirect('painel/poloinfos');
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


		set_time_limit(0);
// Arqui você faz as validações e/ou pega os dados do banco de dados
$aquivoNome = $this->uri->segment(3); // nome do arquivo que será enviado p/ download
$arquivoLocal = '/var/www/html/ntemap/uploads/'.$aquivoNome; // caminho absoluto do arquivo
// Verifica se o arquivo não existe
if (!file_exists($arquivoLocal)) {
// Exiba uma mensagem de erro caso ele não exista
	echo "OPA";
//exit;
} 
$novoNome = $aquivoNome;
// Configuramos os headers que serão enviados para o browser
header('Content-Description: File Transfer');
header('Content-Disposition: attachment; filename="'.$novoNome.'"');
header('Content-Type: application/octet-stream');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($aquivoNome));
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Pragma: public');
header('Expires: 0');
// Envia o arquivo para o cliente
readfile($aquivoNome);


}


}
