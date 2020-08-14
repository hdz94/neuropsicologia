<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {


    public function index(){
    }
    
    function addbook(){

        $this->load->view('adminpanel/addbook');

    }
    
    function addbook_post(){
        if ($_FILES) {

            $config['upload_path']          = './assets/upload/blogimg/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';

            $this->load->library('upload', $config);

            if( ! $this->upload->do_upload('file')){
                $error = array('error' => $this->upload->display_errors());

                 die("Error");
                 //$this->load->view('upload_form', $error);
            }else{

                $data = array('upload_data' => $this->upload->data());
                $fileurl = "assets/upload/blogimg/".$data['upload_data']['file_name'];

                $blog_title = $_POST['blog_title'];
                $desc = $_POST['desc'];

                $query = $this->db->query("INSERT INTO `articles`( `blog_title`, `blog_desc`, `blog_img`) 
                VALUES ('$blog_title','$desc','$fileurl')");

                if ($query){
                
                    $this->session->set_flashdata('inserted', 'yes');
                    redirect('book/addbook');
                }else{
                    $this->session->set_flashdata('inserted', 'no');
                    redirect('book/addbook');
                
                
                }
            }

        }
    }
    
}