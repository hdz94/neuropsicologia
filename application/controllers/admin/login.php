<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


    public function index(){

        /*if(isset($_SESSION['user_id'])){
            
            redirect("admin/dashboard");
        }
        $data=[];
        
        if(isset($_SESSION['error'])){
            
           $data['error'] = $_SESSION['error'];
        }else{
           $data['error'] = "NO_ERROR";
        }*/


        $this->load->view('adminpanel/loginview');
        
    }
    
   /* function login_post(){
                
        //that means that the array is not empty
        if(isset($_POST)){
            
            $email=$_POST['email'];
            $password=$_POST['password'];

            $query = $this->db->query("SELECT * FROM `backend_user` WHERE `username`='$email' AND `password`='$password'");
            
            //that means are rows returning to this match
            if($query->num_rows()) {
                //Credentials are valid
                $result = $query->result_array();
                /*echo "<pre>";
                print_r($result); die();

                $this->session->set_userdata('user_id', $result[0]['uid']);
                redirect("admin/dashboard");

            }else{
                //Credentials are invalid 
                $this->session->set_flashdata('error', 'Invalid credentials');
                redirect("admin/login");
                
            }
        }else{
            die("Invalid Input!");
        }


    }*/

    function logout(){
        session_destroy();
        redirect("admin/login");
    }
}