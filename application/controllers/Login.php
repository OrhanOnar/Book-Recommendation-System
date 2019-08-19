<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
  public function index(){
  $this->load->model("Login_model");

    
    if(isset($this->session->userdata['admin']['admin_id'])){
      redirect('http://localhost/bookstore/index.php/Profile','refresh');
    }
    else{
      $data['title'] = "BooksThatYouLove - Giriş";

 
      if($this->input->post()){

        $admin = $this->Login_model->getAdmin($this->input->post());

        

        if(empty($admin)){
          $this->session->set_flashdata('error', 'Hatalı kullanıcı adı veya şifre girdiniz.');
          redirect('http://localhost/bookstore/index.php/Login','refresh');
        }
        else{
          $this->session->set_userdata('admin',$admin);
          redirect('http://localhost/bookstore/index.php/Profile','refresh');
        }
      }
      else{
        $this->load->view('layouts/login',$data);
      }
    }
  }

  public function out(){
    $this->session->sess_destroy();
    redirect('http://localhost/bookstore/index.php/Login','refresh');
  }
 
  public function signup_enter(){
  $data['title'] = "Sign Up";

  $this->load->model("Login_model");

  $this->load->view('layouts/signup',$data);

  }

  public function real_sign(){
   $this->load->model("Login_model");

   $admins=$this->Login_model->getAdmins();

   if($this->input->post()){

    $know=$this->input->post();

    $counter=0;

    foreach ($admins as $ad) {
      if($ad['admin_name']==$know['user']){
        $counter++;
      }
    }

    if($counter!=0){
      redirect('http://localhost/bookstore/index.php/Login/signup_enter','refresh');
    }
    else{
      $this->Login_model->addAdmin($know);
      redirect('http://localhost/bookstore/index.php/Login','refresh');
    }
  


   }
   else{
    redirect('http://localhost/bookstore/index.php/Login/signup_enter','refresh');
   }


  }

}