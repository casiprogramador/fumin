<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Secre extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('orden_model');
	}

	public function index(){
		$data['ordenes'] = $this->orden_model->getOrdenCompleta();
		$this->load->view('template/header');
		$this->load->view('secre/index',$data);
		$this->load->view('template/footer');
	}

}
