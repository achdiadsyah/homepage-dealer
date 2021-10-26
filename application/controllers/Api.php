<?php
defined('BASEPATH') OR exit('You are not authorized to direct script access');



class Api extends CI_Controller {
    

	public function getslider()
	{
	    if($this->input->is_ajax_request()){
    		$url = 'https://www.astra-honda.com/api/v1/page/type/home';
    		echo $this->astra->call($url);
	    } else {
	        exit('You are not authorized to direct script access');
	    }
	}
	
	public function getcategory($id = NULL)
	{
	    if($this->input->is_ajax_request()){
	        if ($id == NULL){
        		$url = 'https://www.astra-honda.com/api/v1/product/category';
        		echo $this->astra->call($url);
	        } else {
        		$url = 'https://www.astra-honda.com/api/v1/product?category='.$id;
        		echo $this->astra->call($url);
	        }
	    } else {
	        exit('You are not authorized to direct script access');
	    }
	}
	
	public function getproduct($idcategory = NULL, $limit)
	{
	    if($this->input->is_ajax_request()){
    		$url = 'https://www.astra-honda.com/api/v1/product?limit='.$limit.'&home=1&category='.$idcategory;
    		echo $this->astra->call($url);
	    } else {
	        exit('You are not authorized to direct script access');
	    }
	}
	
	public function getdetail($slug = NULL)
    {
        if($this->input->is_ajax_request()){
            if ($slug == NULL){
        		$url = 'https://www.astra-honda.com/api/v1/product';
        		echo $this->astra->call($url);
            } else {
                $url = 'https://www.astra-honda.com/api/v1/product/'.$slug;
        		echo $this->astra->call($url);
            }
        } else {
            exit('You are not authorized to direct script access');
        }
    }
}
