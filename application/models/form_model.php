<?php 
defined('BASEPATH') OR exit('No se permite un acceso directo');

/**
* 
*/
class form_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		//$this->load->database();
	}

	/*function guardar($data)
	{
		$query = $this->db->insert('usuarios', array('nombre'=>$data['nombre'], 'apellido'=>$data['apellido']));

		if ($this->db->affected_rows() > 0) 
		{
			echo "Guardados con éxito";
		}
		else
		{
			echo "Algo salio mal";
		}
	}*/
}

 ?>