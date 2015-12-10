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
                             $this->db->insert('poloinfo', array(
             
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

     public function atualizar(){
        
        $data = array(
               
               'contato' => $this->input->post('contato', TRUE),
               'email' => $this->input->post('email', TRUE),
               'coordenacao' => $this->input->post('coordenacao', TRUE),
               'coordemail' => $this->input->post('coordemail', TRUE),
               'endereco' => $this->input->post('endereco', TRUE) 
            );
        $this->db->where('idpolo', $this->input->post('polo'));
        $this->db->update('poloinfo', $data);
            Echo "Polo Atualizado!";
    }


    public function somapolos(){
    $query =  $this->db->query("SELECT * FROM  `polos` , `poloinfo`   WHERE  polos.id = poloinfo.idpolo");        
          
        if ($query->num_rows() > 0)
        {
            $data['polos'] = $query->result_array();
        }

        return $data['polos'];
    }

}