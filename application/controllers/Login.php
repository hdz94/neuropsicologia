<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


    public function index(){

        $this->load->view('adminpanel/loginview');
        
    }
    
    function login_post(){
        if(isset($_POST)){
            
            $name=$_POST['email'];
            $password=$_POST['password'];

            $query = $this->db->query("SELECT * FROM `backend_user` WHERE `username`='$name' AND `userpassword`='$password'");
            
            //that means are rows returning to this match
            if($query->num_rows()) {

                $result = $query->result_array();


                redirect('dashboard');

                
            }else{
                    echo "cara de topo";
            }

        }else{
            die("Invalid Input");
        }
    }

    function logout(){
        redirect("login");
    }
}