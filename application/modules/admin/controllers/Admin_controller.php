<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends MY_Controller
{

	protected $accesos = "1";	

    public function __construct()
	{
		parent::__construct();	

	}

	public function index()
	{

		$this->loadTemplates("admin_inicio");
	}
}
?>