<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$data = [
			'title'         => 'Dealer Honda',
			'c_active'      => 'home',
			'costum_js'     => 'beranda/ajax'
		];
		$this->template->views('beranda/home', $data);
	}
}
