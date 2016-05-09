<?php 
class Curso_model extends CI_Model {

  public function cadastrar(){

    $this->db->select("*");
    $this->db->from('curso');
    
    $this->db->where("idpolo",$this->input->post('polo', TRUE));
    $this->db->where("id",$this->input->post('hiddenidcurso', TRUE));
    $query = $this->db->get(); //checa se ja existe
    if ($query->num_rows() == 0)
    {// se nao existe

     if(empty($this->input->post('nomecurso'))  ){
        //sem nome faz nada
         Echo "Digite o nome do curso";

     }else{
      $this->db->insert('curso', array(

        'nome' =>  ($this->input->post('nomecurso', TRUE)),
        'numalunos' => htmlentities($this->input->post('numalunos', TRUE)),
        'idpolo' =>  htmlentities($this->input->post('polo', TRUE)),
        'nivelgrad' =>  htmlentities($this->input->post('graduacao', TRUE)),
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

 public function cursosporpolo($id){
        $data['cursos'] = [];
    
        $this->db->select("*");
        $this->db->from('curso');
        $this->db->where('idpolo',$id);
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

 public function cursos(){
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

public function pegaarquivoId($id){
 
 $query =  $this->db->query("SELECT * FROM   `polo_arquivo`   WHERE  id_polo = $id");        
  $data['arquivos'] =[];
  if ($query->num_rows() > 0)
  {
    $data['arquivos'] = $query->result_array();
  } 
 
  return $data['arquivos'];
 
}

  

}