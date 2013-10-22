<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrador extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('admin_usuario/usuario_model');
		$this->load->model('orden_model');
	}

	public function index(){
		if ($this->session->userdata('id')) {
		$data['ordenes'] = $this->orden_model->getOrden();
			if (!$data['ordenes'] ) {
				$this->load->view('template-Admin/header');
				$this->load->view('admin/noregistros');
				$this->load->view('template/footer');
			}else{
				$this->load->view('template-Admin/header');
				$this->load->view('admin/index',$data);
				$this->load->view('template/footer');
			}
		}else{
			redirect('home');
		}


	}

	public function crear_usuario(){
		$this->load->view('template-Admin/header');
		$this->load->view('admin/crear-usuario');
		$this->load->view('template/footer');
	}

	public function modificarUsuario(){
		$data['usuarios'] = $this->usuario_model->mostrarUsuarios();
		$this->load->view('template-Admin/header');
		$this->load->view('admin/modificarUsuario',$data);
		$this->load->view('template/footer');
	}

	function recibirUsuario(){
		$data = array(
			'nombre'=> $this->input->post('nombre'),
			'apellido'=> $this->input->post('apellido'),
			'ci'=> $this->input->post('ci'),
			'celular'=> $this->input->post('celular'),
			'telefono'=> $this->input->post('telefono'),
			'direccion'=> $this->input->post('direccion'),
			'email'=> $this->input->post('email'),
			'usuario'=> $this->input->post('usuario'),
			'pass'=> $this->input->post('pass'),
			'rol'=> $this->input->post('rol')
		);
		$this->usuario_model->crearUsuario($data);
		redirect('administrador/modificarUsuario');
	}

	function modificarDatosUsuario(){
		$idUsuario = $this->uri->segment(3);
		$data['usuarios'] = $this->usuario_model->obtenerUsuario($idUsuario);
		$this->load->view('template-Admin/header');
		$this->load->view('admin/actualizarUsuario',$data);
		$this->load->view('template-Admin/footer');
	}

	function actualizarUsuario(){

		$data = array(
			'nombre'=> $this->input->post('nombre'),
			'apellido'=> $this->input->post('apellido'),
			'ci'=> $this->input->post('ci'),
			'celular'=> $this->input->post('celular'),
			'telefono'=> $this->input->post('telefono'),
			'direccion'=> $this->input->post('direccion'),
			'email'=> $this->input->post('email'),
			'usuario'=> $this->input->post('usuario'),
			'pass'=> $this->input->post('pass'),
			'rol'=> $this->input->post('rol')
		);
		$this->usuario_model->actualizarUsuario( $this->uri->segment(3),$data);
		redirect('administrador/modificarUsuario');
	}

	function eliminarUsuario(){

		$this->usuario_model->eliminarUsuario( $this->uri->segment(3));
		redirect('administrador/modificarUsuario');
	}

	function crearOrden(){
		$this->load->view('template-Admin/header');
		$this->load->view('admin/crearOrden');
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
		redirect('administrador');
	}

	function modificarOrden(){
		$data['ordenes'] = $this->orden_model->getOrdenCompleta();
		$this->load->view('template-Admin/header');
		$this->load->view('admin/modificarOrden',$data);
		$this->load->view('template/footer');
	}

	function modificarDatosOrden(){
		$idOrden = $this->uri->segment(3);
		$data['ordenes'] = $this->orden_model->obtenerOrden($idOrden);
		$this->load->view('template-Admin/header');
		$this->load->view('admin/actualizarOrden',$data);
		$this->load->view('template-Admin/footer');
	}

	function actualizarOrden(){

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
		$this->orden_model->actualizarOrden( $this->uri->segment(3),$data);
		redirect('administrador/modificarOrden');
	}

	function eliminarOrden(){

		$this->orden_model->eliminarOrden( $this->uri->segment(3));
		redirect('administrador/modificarOrden');
	}



	function logout(){
		$this->session->sess_destroy();
		redirect('home');

	}


}
