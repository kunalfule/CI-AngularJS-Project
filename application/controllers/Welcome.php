<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	
	public function index()
	{
		$this->load->view('header/header');
		$this->load->view('welcome_message');
		$this->load->view('footer/footer');
	}
        
        public function insertData(){
            $data = $this->request->amp;
            
            print_r($data);
        }
}
