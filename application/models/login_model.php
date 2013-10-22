<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function validar(){
	        $user = $this->security->xss_clean($this->input->post('user'));
	        $password = $this->security->xss_clean($this->input->post('pass'));

	        $this->db->where('user', $user);
	        $this->db->where('password', $password);
	        $this->db->select('rol,id');
	         $query = $this->db->get('usuarios');
	         if($query->num_rows == 1){
	            // If there is a user, then create session data
	            //$row = $query->row();
	         	return $query;
	            //return $row->rol;
	        }
	        // If the previous process did not validate
	        // then return false.
	        return false;
	}

}
?>
