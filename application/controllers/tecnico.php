<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tecnico extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('orden_model');
	}

	public function index(){
		$this->load->view('template/header');
		$this->load->view('tecni/index');
		$this->load->view('template/footer');
	}

	function recibirOrden(){
		$data = array(
			'establecimiento'=> $this->input->post('establecimiento'),
			'direccion'=> $this->input->post('direccion'),
			'zona'=> $this->input->post('zona'),
			'telefono'=> $this->input->post('telefono'),
			'propietario'=> $this->input->post('propietario'),
			'fecha'=> $this->input->post('fecha'),
			'hora'=> $this->input->post('hora'),
			'importe'=> $this->input->post('importe'),
			'ambiente'=> $this->input->post('ambiente'),
			'tratamiento'=> $this->input->post('tratamiento')
		);
		$this->orden_model->crearOrden($data);
		redirect('tecnico');
	}

}
