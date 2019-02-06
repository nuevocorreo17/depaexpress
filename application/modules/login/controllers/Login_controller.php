<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();	
	}

	public function index()
	{
		$this->load->library('form_validation');

		$config = array(
		    array(
		            'field' => 'username',
		            'label' => 'Username',
		            'rules' => 'trim|required|valid_email'
		    ),
		    array(
		            'field' => 'password',
		            'label' => 'Password',
		            'rules' => 'trim|required',
		    ),
		);

		$this->form_validation->set_rules($config);

		if($this->form_validation->run() == true)
		{
			$this->load->model("user_model","user");

			$status = $this->user->validate();

			if($status == ERR_INVALIDED_USERNAME)
			{
				$this->session->set_flashdata("error","Usuario inválido");
			}else if($status == ERR_INVALIDED_PASSWORD)
			{
				$this->session->set_flashdata("error","Password inválido");
			}else{
				$this->session->set_userdata($this->user->get_data());
				$this->session->set_userdata("logged_in", TRUE);
				redirect("dashboard");
			}
		}

		$this->loadTemplates("login_view");
	}
}
?>