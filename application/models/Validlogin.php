<?php 
class Validlogin extends CI_Model {

  public function logged(){
          $logged = $this->session->userdata('logged');
                   if (!isset($logged) || $logged != true){ 
                  echo 'Voce nao tem permissão para entrar nessa página. Efetuar Login';
                  echo '<a href="'.base_url().'Login/index"> Clique aqui</a>';
                   die();      
                 }
  
    
    }
    function logar(){

        if($this->input->post("username")=='admin' && $this->input->post("password")=="ntepolos"){

             $data = array(              
                    'username' => $this->input->post('username'),
                    'logged' => true                 );                 
             $this->session->set_userdata($data);
             redirect('Painel/index');
  

        }else{
          redirect('Login/index');
        }

    }
 

}