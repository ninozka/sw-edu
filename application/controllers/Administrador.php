<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador extends CI_Controller {

	public function __construct(){
        parent::__construct();
    }

    /* Funcion index: Al iniciar sesion si el usuario es de tipo administrador llega a esta funcion la cual carga la vista de inicio*/
    public function index(){
        if($this->session->userdata('correo') && $this->session->tipo =='1'){
            $data_head = array('titulo' => 'Bienvenido Admin');
            $this->load->view('master/admin/head_admin',$data_head);
            $this->load->view('master/admin/nav_admin');
            $this->load->view('admin/home');
            $this->load->view('master/admin/footer_admin');
        }else{
            echo "<script>window.location.href='".base_url()."Welcome/';</script>";
        }
    }
}
