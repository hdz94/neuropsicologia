<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diplomados extends CI_Controller {

	public function index()
	{
		
		$this->load->view('header');
        $this->load->view('diplomados');
        $this->load->view('contacto');
        $this->load->view('footer');
        
    }
}
