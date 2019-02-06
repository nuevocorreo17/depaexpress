<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class MY_Controller extends MX_Controller
{
	 public function __construct(){
        parent::__construct();
    }


    public function loadTemplates( $view, $data = array() )
    {
        $this->load->view("header",$data);
        $this->load->view("menu",$data);   
        $this->load->view( $view, $data);
        $this->load->view("footer");
    }
}