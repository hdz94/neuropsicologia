<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Neurodesarrollo extends CI_Controller {

	public function index()
	{
		
		$this->load->view('header');
        $this->load->view('neurodesarrollo');   
        $this->load->view('contacto');   
        $this->load->view('footer');
        
    }
}