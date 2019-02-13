<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web_controller extends MX_Controller
{

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->general->loadTemplates("web_inicio");
	}
}