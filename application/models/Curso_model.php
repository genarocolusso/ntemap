<?php 
class Curso_model extends CI_Model {

  public function cadastrar(){

    $this->db->select("*");
    $this->db->from('curso');
    $this->db->where("nome",$this->input->post('nome', TRUE));// e idpolo tal
    $query = $this->db->get();
    if ($query->num_rows() == 0)
    {

     if(empty($this->input->post('nome'))  ){


     }else{
      $this->db->insert('curso', array(

        'nome' =>  ($this->input->post('nome', TRUE)),
        'numalunos' => htmlentities($this->input->post('numalunos', TRUE)),
        'idpolo' =>  htmlentities($this->input->post('idpolo', TRUE)),
        'ativo' =>   $this->input->post('ativo', TRUE) 

        )); 
      
 

     echo "<p>".$this->input->post('nome', TRUE)."</p> ".
     "Cadastrado com sucesso!!";

   }
        // Inserção dos dados

 }else{
  echo "<p> Este CURSO já está cadastrado!</p> ";
}

 

}

 public function ncursos(){
        $data['cursos'] = [];
    
        $this->db->select("*");
        $this->db->from('curso');
        $query = $this->db->get();
        if ($query->num_rows() > 0)
        {
            $data['cursos'] = $query->result_array();
        }

        return $data['cursos'];
    }


public function deletar(){

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

 
 

}