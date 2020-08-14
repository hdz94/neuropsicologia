<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


    public function index(){

        if(isset($_SESSION['user_id'])){
            
            redirect("dashboard");
        }
        $data=[];
                
        if(isset($_SESSION['error'])){
            
            $data['error'] = $_SESSION['error'];
         }else{
            $data['error'] = "NO_ERROR";
         }
         $this->load->view('adminpanel/loginview',$data);

    }
    
    function login_post(){
        
        if(isset($_POST)){
            
            $name=$_POST['email'];
            $password=$_POST['password'];

            $query = $this->db->query("SELECT * FROM `backend_user` WHERE `username`='$name' AND `userpassword`='$password'");
            
            //that means are rows returning to this match
            if($query->num_rows()) {

                $result = $query->result_array();

                $this->session->set_userdata('user_id', $result[0]['uid']);
                redirect("dashboard");
                
            }else{
                
                //Credentials are invalid 
                $this->session->set_flashdata('error', 'Invalid credentials');
                redirect("login");
            }

        }else{
            die("Invalid Input");
        }
    }

    function logout(){
        session_destroy();
        redirect("login");
    }
}