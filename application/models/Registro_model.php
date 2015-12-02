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
         
         	   echo "Cadastrado com sucesso!!";
         }
        // Inserção dos dados
       
    }
}