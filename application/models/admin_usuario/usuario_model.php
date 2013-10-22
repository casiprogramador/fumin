<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Usuario_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function crearUsuario($data){
		$this->db->insert('usuarios',array(
				'nombre'=>$data['nombre'],
				'apellido'=>$data['apellido'],
				'ci'=>$data['ci'],
				'celular'=>$data['celular'],
				'telefono'=>$data['telefono'],
				'direccion'=>$data['direccion'],
				'email'=>$data['email'],
				'user'=>$data['usuario'],
				'password'=>$data['pass'],
				'rol'=>$data['rol']
			));

	}
	function mostrarUsuarios(){
		$query = $this->db->get('usuarios');
		if($query->num_rows()>0) return $query;
		else return false;
	}

	function obtenerUsuario($id){
		$this->db->where('id', $id);
		$query = $this->db->get('usuarios');
		if($query->num_rows()>0) return $query;
		else return false;
	}

	function actualizarUsuario($id,$data){
		$datos= array(
				'nombre'=>$data['nombre'],
				'apellido'=>$data['apellido'],
				'ci'=>$data['ci'],
				'celular'=>$data['celular'],
				'telefono'=>$data['telefono'],
				'direccion'=>$data['direccion'],
				'email'=>$data['email'],
				'user'=>$data['usuario'],
				'password'=>$data['pass'],
				'rol'=>$data['rol']
			);
		$this->db->where('id', $id);
		$query=$this->db->update('usuarios',$datos);
	}

	function eliminarUsuario($id){
		$this->db->delete('usuarios',array('id'=>$id));
	}


}
?>
