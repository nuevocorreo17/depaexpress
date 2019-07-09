<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_controller extends MY_Controller
{

	protected $accesos = "1,2,3,4";

    public function __construct()
	{
		parent::__construct();	
	}

	public function index()
	{

		$this->general->loadTemplates("dashboard_inicio");
	}
}
?>