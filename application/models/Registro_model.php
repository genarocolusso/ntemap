<?php 
class Registro_model extends CI_Model {
     
    public function cadastrar(){
         
         if(empty($this->input->post('nome')) || empty($this->input->post('latitude')) || empty($this->input->post('longitude')) ){



         }else{
         	  $this->db->insert('polos', array(
             
            'name' =>  ($this->input->post('nome', TRUE)),
            'latitude' => htmlentities($this->input->post('latitude', TRUE)),
            'longitude' =>  htmlentities($this->input->post('longitude', TRUE)),
            'address' =>   $this->input->post('nome', TRUE) 
             
        ));	
         
         	   echo "<p>".$this->input->post('nome', TRUE)."</p> ".
               "Cadastrado com sucesso!!";
         }
        // Inserção dos dados
       
    }

    public function deletar(){
         
            $id = $this->input->post('deleted');
            $this->db->where('id', $id);
            $this->db->delete('polos'); 
         
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