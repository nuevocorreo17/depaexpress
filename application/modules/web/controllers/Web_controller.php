<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web_controller extends MY_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->loadTemplates("web_inicio");
	}
}