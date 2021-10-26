<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karir extends CI_Controller {

	public function index()
	{
	    
		$data = [
			'title'         => 'Karir',
			'c_active'      => 'karir'
		];
		$this->template->views('karir/index', $data);
	}
	
}
