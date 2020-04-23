<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Neuropsicologia extends CI_Controller {

	public function index()
	{
		
		$this->load->view('header');
        $this->load->view('neuropsicologia');   
        $this->load->view('footer');
        
    }
}