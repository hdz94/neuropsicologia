<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Libros extends CI_Controller {

	public function index()
	{
		
		$this->load->view('header');
        $this->load->view('libros');
        $this->load->view('footer');
        
    }
}
