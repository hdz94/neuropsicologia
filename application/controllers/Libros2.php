<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Libros2 extends CI_Controller {

	public function index()
	{
		
		$this->load->view('header');
        $this->load->view('librosa');
        $this->load->view('footer');
        
    }
}
