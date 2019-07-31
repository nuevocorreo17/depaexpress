<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{

	private $table = "depa_usuario";
	private $_data = array();
	
	public function __construct()
	{
		parent::__construct();
	}

	public function validate()
	{
		$username = $this->input->post("email");
		$password = $this->input->post("password");	
		//$remeber = $this->input->post("remeber");			
		
		$this->db->where("email",$username);	
		$query = $this->db->get($this->table);

		if($query->num_rows())
		{
			$row = $query->row_array();
			if($row["password"] == sha1($password))
			{
				unset($row["password"]);
				$this->_data = $row;
				return ERR_NONE;
			}

			return ERR_INVALIDED_PASSWORD;
			
		}else{
			return ERR_INVALIDED_USERNAME;
		}
	}

	public function get_data()
	{
		return $this->_data;
	}
}

?>