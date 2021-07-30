<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function index()
    {
        $this->load->view('login');
    }

    public function registro()
    {

        $this->load->view('registro');
    }

    public function recuperar_contrasenia()
    {

        $this->load->view('recuperar_contrasenia');
    }
}
