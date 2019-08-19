<?php 
    class Login_model extends CI_Model {
        
        function getAdmin($data){

            return $this->db->query("SELECT * FROM admin WHERE admin_name=".$this->db->escape($data['user'])." AND admin_password='".$data['password']."' AND admin_status='1'  LIMIT 1")->row_array(0,"array");
        }
        function getAdmins(){

            return $this->db->query("SELECT * FROM admin")->result_array();
        }

        function addAdmin($data){

            $this->db->query("INSERT INTO admin SET admin_name='".$data['user']."' , admin_password='".$data['psw']."', admin_status='1'");
        }

    }
?>