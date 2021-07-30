<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Productos_c extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model("Productos_m");
        // $this->load->library('session');

    }

    public function index()
    {
        $this->load->view('header_v');
        $this->load->view('barra_lateral_v');
        $this->load->view('productos_v');
        $this->load->view('footer_v');
        // $session->destroy();
    }

    public function datosAjax()
    {
        $data = $this->Productos_m->datosAjax();
        // echo'<pre>';
        // print_r($data);
        // echo'</pre>';
        //     die();
        
        $arr = array('data' => $data);
        echo json_encode($arr);
        return;
    }

}
