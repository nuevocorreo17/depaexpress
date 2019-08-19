<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class MY_Controller extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->estalogueado();
    }

    public function estalogueado()
    {
        if(!$this->session->userdata("logged_in"))
        {
            redirect('/');
        }else{
            $accesos = is_array($this->accesos)? $this->accesos : explode(",", $this->accesos);

            if(!in_array($this->session->userdata("perfil_id"), array_map("trim", $accesos)))
            {
                die("<h4>Acceso denegado</h4>");
            }
        }
    }

    public function chekaraccesos()
    {

    }
}