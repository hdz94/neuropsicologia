<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


    public function index(){

        if(isset($_SESSION['user_id'])){
            $this->load->view('adminpanel/addblog');
        }else{
            $this->load->view('adminpanel/viewblog');
            //redirect('admin/login');
        }
        
        
    }
    

    

    
}