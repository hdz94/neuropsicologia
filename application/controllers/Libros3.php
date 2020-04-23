<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Libros3 extends CI_Controller {

	public function index()
	{
		
		$this->load->view('header');
        $this->load->view('librosb');
        $this->load->view('footer');
        
    }
}
