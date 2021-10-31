<?php
defined('BASEPATH') OR exit('You are not authorized to direct script access');



class Api extends CI_Controller {
	public function __construct() 
 	{
    	parent::__construct(); 
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Methods: GET, POST');
		header("Access-Control-Allow-Headers: X-Requested-With");
 	} 
    

	public function getslider()
	{
	    
		$url = 'https://www.astra-honda.com/api/v1/page/type/home';
		echo $this->astra->call($url);
	    
	}
	
	public function getcategory($id = NULL)
	{
		if ($id == NULL){
			$url = 'https://www.astra-honda.com/api/v1/product/category';
			echo $this->astra->call($url);
		} else {
			$url = 'https://www.astra-honda.com/api/v1/product?category='.$id;
			echo $this->astra->call($url);
		}
	}
	
	public function getproduct($idcategory = NULL, $limit)
	{
		$url = 'https://www.astra-honda.com/api/v1/product?limit='.$limit.'&home=1&category='.$idcategory;
		echo $this->astra->call($url);
	}
	
	public function getdetail($slug = NULL)
    {
        
		if ($slug == NULL){
			$url = 'https://www.astra-honda.com/api/v1/product';
			echo $this->astra->call($url);
		} else {
			$url = 'https://www.astra-honda.com/api/v1/product/'.$slug;
			echo $this->astra->call($url);
		}
    }
}
