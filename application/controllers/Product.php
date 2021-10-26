<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function index()
	{
	    
		$data = [
			'title'         => 'Produk Sepeda Motor',
			'c_active'      => 'product',
			'costum_js'     => 'produk/ajax-all'
		];
		$this->template->views('produk/all', $data);
	}
	
	public function detail($slug = NULL)
	{
		if ($slug == NULL){
		    redirect ('product');
		} else {
    		$data = [
    			'title'         => 'Produk Sepeda Motor',
    			'c_active'      => 'product',
    			'costum_js'     => 'produk/ajax-detail',
    			'slug'          => $slug
    		];
    		$this->template->views('produk/detail', $data);
		}
	}
	
	
}
