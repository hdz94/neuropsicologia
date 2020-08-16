<?php
require 'autoload.php';

require 'config-cloud.php';

defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {
       

    public function index(){
       
        $this->load->view('adminpanel/viewbook');

        
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
            $file=$_POST['fie']['name'];

            \Cloudinary\Uploader::upload($file, array("public_id" => $blog_title));

            $query = $this->db->query("INSERT INTO `books`( `book_title`, `book_desc`, `book_img`) 
                 VALUES ('$blog_title','$desc','$file')");

            if ($query) {
                $this->session->set_flashdata('inserted', 'yes');
                    redirect('book/addbook');
            }else{
                $this->session->set_flashdata('inserted', 'no');
                    redirect('book/addbook');
            }  

        }else{
            die("Invalid Input");
        }

    }
                      
    

}
