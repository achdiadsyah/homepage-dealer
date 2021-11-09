<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {

	public function ahass()
	{
	    
		$data = [
			'title'         => 'AHASS',
			'c_active'      => 'ahass'
		];
		$this->template->views('layanan/ahass', $data);
	}
	
	public function marketing()
	{
	    
		$data = [
			'title'         => 'Marketing',
			'c_active'      => 'marketing'
		];
		$this->template->views('layanan/marketing', $data);
	}
	
	public function bookingservis()
	{
	    
		$data = [
			'title'         => 'Layanan Booking Servis',
			'c_active'      => 'booking-servis',
			'costum_js'		=> 'layanan/js-booking'
		];
		$this->template->views('layanan/bookingservis', $data);
	}
	
	public function serviskunjung()
	{
	    
		$data = [
			'title'         => 'Layanan Servis Kunjung',
			'c_active'      => 'servis-kunjung',
			'costum_js'		=> 'layanan/js-serviskunjung'
		];
		$this->template->views('layanan/serviskunjung', $data);
	}
	
}
