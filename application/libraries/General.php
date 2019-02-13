<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General extends MX_Controller
{
	
	public function loadTemplates( $view, $data = array() )
    {
        $this->load->view("header",$data);
        $this->load->view("menu",$data);   
        $this->load->view( $view, $data);
        $this->load->view("footer");
    }
}
?>