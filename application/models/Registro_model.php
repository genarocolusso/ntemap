<?php 
class Registro_model extends CI_Model {
 
  public function cadastrar(){
   
    $this->db->select("*");
    $this->db->from('polos');
    $this->db->where("name",$this->input->post('nome', TRUE));
    $query = $this->db->get();
    if ($query->num_rows() == 0)
    {  
     if(empty($this->input->post('nome')) || empty($this->input->post('latitude')) || empty($this->input->post('longitude')) ){
      }else{
      $this->db->insert('polos', array(
       
        'name' =>  ($this->input->post('nome', TRUE)),
        'latitude' => htmlentities($this->input->post('latitude', TRUE)),
        'longitude' =>  htmlentities($this->input->post('longitude', TRUE)),
        'address' =>   $this->input->post('nome', TRUE) 
        
        )); 
      $this->db->select("*");
      $this->db->from('polos');
      $this->db->where("name",$this->input->post('nome', TRUE));
      $query = $this->db->get();
      if ($query->num_rows() > 0)
      {
        foreach ($query->result() as $row)
        {
         $this->db->insert('polo_info', array(
           
          'idpolo' =>  ($row->id) 
          
          ));
       }
     } 
     echo "<p>".$this->input->post('nome', TRUE)."</p> ".
     "Cadastrado com sucesso!!"; 
   }
        // Inserção dos dados

 }else{
  echo "<p> Este Polo já está cadastrado!</p> ";
}
 
}

public function deletar(){
 
  $id = $this->input->post('deleted');
  $this->db->where('id', $id);
  $this->db->delete('polos');  
  echo "Deletado!"; 
}

public function deletarCurso(){ 
  $id = $this->input->post('deleted');
  $this->db->where('id', $id);
  $this->db->delete('curso');  
  echo "Deletado!"; 
}
public function polos(){
  $data['polos'] = [];
  
  $this->db->select("*");
  $this->db->from('polos');
  $query = $this->db->get();
  if ($query->num_rows() > 0)
  {
    $data['polos'] = $query->result_array();
  }

  return $data['polos'];
}

public function polosid($id){
  $data['polos'] = [];
  
  $this->db->select("*");
  $this->db->from('polos');
  $this->db->where("id", $id);
  $query = $this->db->get();
  if ($query->num_rows() > 0)
  {
    $data['polos'] = $query->result_array();
  }

  return $data['polos'];
}

public function atualizar(){ 
    $config['upload_path'] = './img/polos/';
    $config['allowed_types'] = '*';
    $config['max_size'] = '4100';
    $config['overwrite'] = TRUE;
    $config['remove_spaces'] = TRUE;

    $userfile_extn = explode(".", strtolower($_FILES['userfile']['name']));
     
    $config['file_name'] = $this->input->post('polo').'_foto.'.$userfile_extn[1];
    
    $this->load->library('upload', $config); 
     $imgs = "nao";
    if ( !$this->upload->do_upload())
    {
      $error = array('error' => $this->upload->display_errors());
      print_r($error);
      Echo "Um erro aconteceu ao carregar a imagem";  
     
    }
    else
    {
      $data9  = $this->upload->data();
 
    $imgs= base_url().'img/polos/'.$this->input->post('polo').'_foto.'.$userfile_extn[1];
    $config['allowed_types'] = '*';
           
    // adiciona arquivo na tabela polo_arquivo mais de um arquivo pode ser linkado a um polo
 
    }
 
   
  if($imgs != "nao"){
    $data['img'] = $imgs;
  }
   
   $data['contato'] = $this->input->post('contato', TRUE);
   $data['email'] = $this->input->post('email', TRUE);
   $data['nomepolo'] = $this->input->post('nomepolo', TRUE);
   $data['site'] = $this->input->post('site', TRUE);
   $data['coordenacao'] = $this->input->post('coordenacao', TRUE);
   $data['coordemail'] = $this->input->post('coordemail', TRUE);
   $data['endereco'] = $this->input->post('endereco', TRUE);
    

   
  $this->db->where('idpolo', $this->input->post('polo'));
  $this->db->update('polo_info', $data);
  Echo "Polo Atualizado!";
  redirect("painel/poloinfos");
         
}

 


public function atualizarativo(){
  
  $data = array(
    
   'ativo' => $this->input->post('ativo', TRUE) 
   );
  $this->db->where('id', $this->input->post('idpolo'));
  $this->db->update('polos', $data);
  
}

public function somapolos(){
  $query =  $this->db->query("SELECT * FROM  `polos` , `polo_info`   WHERE  polos.id = polo_info.idpolo");        
  $data['polos'] = null;
  if ($query->num_rows() > 0)
  {
    $data['polos'] = $query->result_array();
  }

  return $data['polos'];
}

public function infodopolo($id){
  $query =  $this->db->query("SELECT * FROM    `polo_info`   WHERE  idpolo = $id");        
  
  if ($query->num_rows() > 0)
  {
    $data['polocontato'] = $query->result_array();
  }

  return $data['polocontato'];
}
public function getarquivo(){
$id = $this->input->post('poloarquivoid');
$query =  $this->db->query("SELECT * FROM    `polo_arquivo`   WHERE  id_polo = $id");        
  
  if ($query->num_rows() > 0)
  {
    $data['arquivos'] = $query->result_array();
  }
    $data['nomepolo'] =  $this->polosid($id);
  return $data;


}


}