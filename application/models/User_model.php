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

	public function insert($data)
    {  
            $arg = array(
				'nombre'=>$data['nombre'],
				'email'=>$data['email'],
                'password'=>$data['password'],                 
                'perfil_id'=>$data['perfil_id'],
                'telefono'=>$data['telefono'],
                'empresa' =>$data["empresa"],               
                'direccion' =>$data["direccion"],                   
                'estado'=>$data['estado'],
                'terminos'=>$data['terminos'],
                'created_at'=> date('Y-m-d h:i:s'),
                'updated_at'=> date('Y-m-d h:i:s'),
                'last_login'=> date('Y-m-d h:i:s')
            );

            $query = $this->db->insert_string($this->table,$arg);  

            //echo $query;  
            $this->db->query($query);
            return $this->db->insert_id();
    }

    public function update($data)
    {
        $arg = array(
			'nombre'=>$data['nombre'],
			'telefono'=>$data['telefono'],
            'empresa' =>$data["empresa"],	            
            'direccion' =>$data["direccion"],			
			'email'=>$data['email'],
			'updated_at' => date('Y-m-d h:i:s'), 
        );
        $this->db->where('id', $data['id']);
        $this->db->update($this->table, $arg); 
        $success = $this->db->affected_rows(); 
        
        if($success){
			$user = $this->getUser($data['id']); 
			return $user; 
        }else{
        	return false;
        }
    }

    public function getUser($id)
    {
        $query = $this->db->get_where($this->table, array('id' => $id), 1);  
        if($this->db->affected_rows() > 0){
            $row = $query->row_array();
            unset($row["password"]);
            return $row;
        }else{
            return false;
        }
    }

   public function getUserInfoByEmail($email)
    {
        $query = $this->db->get_where($this->table, array('email' => $email), 1);  
        if($this->db->affected_rows() > 0){
            $row = $query->row_array();
            unset($row["password"]);
            return $row;
        }else{
            return false;
        }
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
				$this->updateLoginTime($row["id"]);
				unset($row["password"]);
				$this->_data = $row;
				return ERR_NONE;
			}

			return ERR_INVALIDED_PASSWORD;
			
		}else{
			return ERR_INVALIDED_USERNAME;
		}
	}

	public function updateLoginTime($id)
    {
        $this->db->where('id', $id);
        $this->db->update($this->table, array('last_login' => date('Y-m-d h:i:s A')));
        return;
    }

	public function get_data()
	{
		return $this->_data;
	}
}

?>