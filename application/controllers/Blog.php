<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function tipsandtrik()
	{
	    
		$data = [
			'title'         => 'Tips & Trik',
			'c_active'      => 'tips-trik'
		];
		$this->template->views('blog/tips-trik', $data);
	}
	
	public function artikel()
	{
	    
		$data = [
			'title'         => 'Artikel',
			'c_active'      => 'artikel'
		];
		$this->template->views('blog/artikel', $data);
	}
	
	public function motogp()
	{
	    
		$data = [
			'title'         => 'MotoGP',
			'c_active'      => 'moto-gp'
		];
		$this->template->views('blog/motogp', $data);
	}
	
}
