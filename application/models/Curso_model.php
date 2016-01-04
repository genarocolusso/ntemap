<?php 
class Curso_model extends CI_Model {

  public function cadastrar(){

    $this->db->select("*");
    $this->db->from('curso');
    
    $this->db->where("idpolo",$this->input->post('polo', TRUE));
    $query = $this->db->get();
    if ($query->num_rows() == 0)
    {

     if(empty($this->input->post('nomecurso'))  ){


     }else{
      $this->db->insert('curso', array(

        'nome' =>  ($this->input->post('nomecurso', TRUE)),
        'numalunos' => htmlentities($this->input->post('numalunos', TRUE)),
        'idpolo' =>  htmlentities($this->input->post('polo', TRUE)),
        'ativo' =>   $this->input->post('ativo', TRUE) 

        ));  
 

     echo "<p>".$this->input->post('nomecurso', TRUE)."</p> ".
     "Cadastrado com sucesso!";

   }
        // Inserção dos dados

 }else{

  foreach ($query->result() as $row)
{
    $data = array(
   
        'nome' =>  ($this->input->post('nomecurso', TRUE)),
        'numalunos' => htmlentities($this->input->post('numalunos', TRUE)),
        'idpolo' =>  htmlentities($this->input->post('polo', TRUE)),
        'ativo' =>   $this->input->post('ativo', TRUE) 
   );
  $this->db->where('id', $row->id);
  $this->db->update('curso', $data);
  Echo "Update realizado com sucesso";
}
  
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