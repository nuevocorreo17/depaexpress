<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Registro_controller extends MX_Controller
{
	public function __construct()
	{
		parent::__construct();	
	}

	private function chekarlogin()
	{
		if($this->session->userdata("logged_in"))
		{
			redirect('/');
		}
	}

	public function index()
	{
		$result = array();

		if (!$this->input->is_ajax_request()) 
		{
		   $this->chekarlogin();
		}else{
			if($this->session->userdata("logged_in"))
			{
				$result["rpta"] = 4;
				$this->output->set_content_type('application/json');
				$this->output->set_output(json_encode($result));
				echo $this->output->get_output();
				exit();
			}
		}
		

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
	            'rules' => 'trim|required|valid_email|is_unique[depa_usuario.email]'
		    ),
		    array(
	            'field' => 'password',
	            'label' => 'Password',
	            'rules' => 'min_length[8]|trim|required',
		    ),
		    array(
		    	'field' => 'confirm_password', 
		    	'label' => 'Repetir Contraseña', 
		    	'rules' => 'min_length[8]|required|matches[password]'
		    ),
		    array(
	            'field' => 'terminos',
	            'label' => 'Términos y condiciones',
	            'rules' => 'trim|required'
		    )		    
		);

		$this->form_validation->set_rules($config);

		if($this->form_validation->run() == true)
		{
			$this->load->model("user_model","user");

			$aux = array();
			$aux["nombre"] = $this->input->post("nombre");
			$aux["password"] =  sha1($this->input->post("password"));
			$aux["email"] = $this->input->post("email");
			$aux["telefono"] = null;
			$aux["empresa"] =  null;
			$aux["direccion"] =  null;
			$aux["perfil_id"] = 2;
            $aux["estado"] = 1;
			$aux["terminos"] = $this->input->post("terminos");

			$id = $this->user->insert($aux);

			$auxuser = $this->user->getUser($id);
			$this->session->set_userdata($auxuser);
			$this->session->set_userdata("logged_in", TRUE);
			$result["rpta"] = 1;
			$result["usuario"] = $auxuser;	

		}else{
			$result["rpta"] = 3;
			$result["mensaje"] = validation_errors();	
		}

		$this->output->set_content_type('application/json');
		$this->output->set_output(json_encode($result));
		echo $this->output->get_output();
		exit();
	}
}
?>