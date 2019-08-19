<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil_controller extends MY_Controller
{

	protected $accesos = "1,2";	

    public function __construct()
	{
		parent::__construct();	

	}

	public function index()
	{
		$this->load->model("user_model","user");
		$id = $this->session->userdata("id");		
		$data =  $this->user->getUser($id);

		if($this->input->method() == "post")
		{
			$this->load->library('form_validation');

			$config = array(
			    array(
			            'field' => 'nombre',
			            'label' => 'Nombre',
			            'rules' => 'trim|required'
			    ),				
			    array(
			            'field' => 'email',
			            'label' => 'Email',
			            'rules' => 'trim|required|valid_email'
			    ),
			    array(
			            'field' => 'telefono',
			            'label' => 'Teléfono',
			            'rules' => 'trim|max_length[12]|integer'
			    ),
			);

			$this->form_validation->set_rules($config);

			if($this->form_validation->run() == true)
			{
				$aux = array();
				$aux["id"] = $id;
				$aux["nombre"] = $this->input->post("nombre");
				$aux["telefono"] = $this->input->post("telefono");
				$aux["email"] = $this->input->post("email");
				$aux["direccion"] = $this->input->post("direccion");
				$aux["empresa"] = $this->input->post("empresa");

				$data = $this->user->update($aux);
			}
		}

		$this->general->loadTemplates("perfil_editar",$data);
	}
}
?>