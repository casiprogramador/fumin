<?php
	function getId(){
		$id = & get_instance();
	           return $ci->session->userdata('id');
	}
?>
