<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('Usuarios');
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

    /*NewUser: En esta funcione se cargará la vista que contiene el formulario para ingresar un nuevo usuario.*/
    public function newUser(){
        if($this->session->userdata('correo') && $this->session->tipo =='1'){
            $data_head = array('titulo' => 'Nuevo Usuario');
            $data = array('tipos' => $this->Usuarios->getTipos());

            $this->load->view('master/admin/head_admin',$data_head);
            $this->load->view('master/admin/nav_admin');
            $this->load->view('admin/new_user',$data);
            $this->load->view('master/admin/footer_admin');

        }else{
            echo "<script>window.location.href='".base_url()."Welcome/';</script>";
        }
    }

    //Funcion donde se almacenaran los datos en la bd y se asignaran los valores del tipo de usuario.
    public function newUser_proc(){
        $correo = $this->input->post('correo');
        $rut = $this->input->post('rut');
        $nombre = $this->input->post('nombre');
        $apellido = $this->input->post('apellido');
        $password = $this->input->post('password');
        $tipo = $this->input->post('tipo');

        $cont = count($tipo);

        if($this->Usuarios->nuevoUsuario($correo,$rut,$nombre,$apellido,$password)){
            $Ultimo = $this->Usuarios->lastCreatedUser($rut);
            $idUltimo = $Ultimo->id;
            for($i=0; $i < ($cont); $i++ ){
                $this->Usuarios->asignarTipo($idUltimo,$tipo[$i]);
            }
            echo "<script>alert('Se ha creado correctamente el usuario'); window.location.href='".base_url()."Administrador/';</script>";
        }else{
            echo "<script>alert('Hubo un error en la creación'); window.location.href='".base_url()."Administrador/';</script>";
        }
    }

    //
    public function Usuarios(){
        if($this->session->userdata('correo') && $this->session->tipo =='1'){
            $data_head = array('titulo' => 'Lista de Usuarios');
            $data = array('user' => $this->Usuarios->getUsers(),
                         'tipos' => $this->Usuarios->getTipos());
            $this->load->view('master/admin/head_admin',$data_head);
            $this->load->view('master/admin/nav_admin');
            $this->load->view('admin/lista_user',$data);
            $this->load->view('master/admin/footer_admin');

        }else{
            echo "<script>window.location.href='".base_url()."Welcome/';</script>";
        }
    }
}
