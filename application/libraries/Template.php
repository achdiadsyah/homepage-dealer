<?php
	class Template {
		protected $_ci;

		function __construct() {
			$this->_ci = &get_instance(); //Untuk Memanggil function load, dll dari CI. ex: $this->load, $this->model, dll
		}

		function views($template = NULL, $data = NULL) {
			if ($template != NULL) {
                $payload = [
                    'content'   => $template,
                    'datas'      => $data,
                ];
				return $this->_ci->load->view('layouts/index', $payload);
			}
		}
	}
?>