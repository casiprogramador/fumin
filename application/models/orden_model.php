<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Orden_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function crearOrden($data){
		$this->load->helper('idsession');
		$this->db->insert('orden',array(
				'establecimiento'=>$data['establecimiento'],
				'direccion'=>$data['direccion'],
				'zona'=>$data['zona'],
				'telefono'=>$data['telefono'],
				'propietario'=>$data['propietario'],
				'fecha'=>$data['fecha'],
				'hora'=>$data['hora'],
				'importe'=>$data['importe'],
				'ambiente'=>implode(',',$data['ambiente']),
				'tratamiento'=>implode(',',$data['tratamiento']),
				'idusuario'=>getId()
			));

	}

	function getOrden(){
		date_default_timezone_set('America/La_Paz');
		$this->db->from('orden');
		$this->db->join('usuarios', 'idusuario=usuarios.id');
		$this->db->where('fecha',date("Y-m-d"));
		$query = $this->db->get();
		if($query->num_rows()>0) return $query;
		else return false;
	}

	function getOrdenCompleta(){
		$query = $this->db->get('orden');
		if($query->num_rows()>0) return $query;
		else return false;
	}

	function obtenerOrden($id){
		$this->db->where('id', $id);
		$query = $this->db->get('orden');
		if($query->num_rows()>0) return $query;
		else return false;
	}

	function actualizarOrden($id,$data){
		$dato= array(
				'establecimiento'=>$data['establecimiento'],
				'direccion'=>$data['direccion'],
				'zona'=>$data['zona'],
				'telefono'=>$data['telefono'],
				'propietario'=>$data['propietario'],
				'fecha'=>$data['fecha'],
				'hora'=>$data['hora'],
				'importe'=>$data['importe'],
				'ambiente'=>implode(',',$data['ambiente']),
				'tratamiento'=>implode(',',$data['tratamiento'])
			);
		$this->db->where('id', $id);
		$this->db->update('orden',$dato);

	}

	function eliminarOrden($id){
		$this->db->delete('orden',array('id'=>$id));
	}
}
?>
