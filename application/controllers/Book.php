<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {

        

    public function index(){
        $this->load->view('adminpanel/addbook');

        
    }
	
    function addbook(){
       
        $this->load->view('adminpanel/addbook');
    }

    
    function addbook_post(){
        /*print_r($_POST);
        print_r($_FILES);*/
        if(isset($_POST)){

            $blog_title=$_POST['blog_title'];
            $desc=$_POST['desc'];
            $file=$_POST['file'];

     
            $query = $this->db->query("INSERT INTO `books`( `book_title`, `book_desc`, `book_img`) 
                 VALUES ('$blog_title','$desc','$file')");

            if ($query) {
                $this->session->set_flashdata('inserted', 'yes');
                    redirect('book/addblog');
            }else{
                $this->session->set_flashdata('inserted', 'no');
                    redirect('book/addblog');
            }  

        }else{
            die("Invalid Input");
        }

    }
                      
    

}
