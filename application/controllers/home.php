<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('login_model');


	}

	public function index($msg = NULL){

		$data['msg'] = $msg;
		$this->load->view('template/header');
		$this->load->view('home/index',$data);
		$this->load->view('template/footer');
	}

	function validar(){
		$resultado = $this->login_model->validar();

		if(! $resultado){
	            // If user did not validate, then show them login page again
	                    $msg = '<h4 class="text-danger text-center">Usuario y/o Password incorrecto</h4><br />';
	                    $this->index($msg);
	                 }else{
	            // If user did validate,
	            // Send them to members area
	                 			$rol = $resultado->row()->rol;
		$id = $resultado->row()->id;
	                 	$this->session->set_userdata('id',$id);
	                	if ($rol=="Administrador") {
	                		redirect('administrador');

	                	}elseif ($rol=="Secretario") {
	                		redirect('secre');
	                	}elseif ($rol=="Tecnico") {
	                		redirect('tecnico');
	                	}

	               }

	}
}
