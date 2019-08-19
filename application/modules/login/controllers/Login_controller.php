<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends MX_Controller  
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
		            'field' => 'email',
		            'label' => 'Email',
		            'rules' => 'trim|required|valid_email'
		    ),
		    array(
		            'field' => 'password',
		            'label' => 'Password',
		            'rules' => 'min_length[8]|trim|required',
		    ),
		);

		$this->form_validation->set_rules($config);

		if($this->form_validation->run() == true)
		{
			$this->load->model("user_model","user");

			$status = $this->user->validate();

			if($status == ERR_INVALIDED_USERNAME)
			{
				//$this->session->set_flashdata("error",);
				$result["rpta"] = 2;
				$result["mensaje"] = "Usuario inválido";
			}else if($status == ERR_INVALIDED_PASSWORD)
			{
				//$this->session->set_flashdata("error","Password inválido");
				$result["rpta"] = 2;
				$result["mensaje"] = "Password inválido";				
			}else{
				$this->session->set_userdata($this->user->get_data());
				$this->session->set_userdata("logged_in", TRUE);
				$result["rpta"] = 1;
				$result["usuario"] = $this->user->get_data();	
				//redirect("dashboard");
			}
		}else{
			$result["rpta"] = 3;
			$result["mensaje"] = validation_errors();	
		}



		$this->output->set_content_type('application/json');
		$this->output->set_output(json_encode($result));
		echo $this->output->get_output();
		exit();
	}


	public function logout()
    {
        $this->session->unset_userdata("logged_in");
        $this->session->sess_destroy();
        redirect("/");
    }
}
?>