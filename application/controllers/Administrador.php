<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('Usuarios');
        $this->load->helper('url'); 
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
            $this->load->view('admin/usuarios/new_user',$data);
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

    //Funcion para ver a todos los usuarios tipo adiministrador y profesor
    public function Usuarios(){
        if($this->session->userdata('correo') && $this->session->tipo =='1'){
            $data_head = array('titulo' => 'Lista de Usuarios');
            $data = array('user' => $this->Usuarios->getUsers(),
                         'tipos' => $this->Usuarios->getTipos());
            $this->load->view('master/admin/head_admin',$data_head);
            $this->load->view('master/admin/nav_admin');
            $this->load->view('admin/usuarios/lista_user',$data);
            $this->load->view('master/admin/footer_admin');

        }else{
            echo "<script>window.location.href='".base_url()."Welcome/';</script>";
        }
    }
    
    //funcion para ver a todos los alumnos;
    public function alumnos(){
        if($this->session->userdata('correo') && $this->session->tipo =='1'){
            $data_head = array('titulo' => 'Alumnos');
            $data = array('alumnos' => $this->Usuarios->getAlumnos());
            
            $this->load->view('master/admin/head_admin',$data_head);
            $this->load->view('master/admin/nav_admin');
            $this->load->view('admin/alumnos/lista_alumnos',$data);
            $this->load->view('master/admin/footer_admin');

        }else{
            echo "<script>window.location.href='".base_url()."Welcome/';</script>";
        }
        
    }
    
    public function cursos(){
        if($this->session->userdata('correo') && $this->session->tipo =='1'){
            $data_head = array('titulo' => 'Cursos');
            $data = array ('cursos' => $this->Usuarios->getCursos());
            $this->load->view('master/admin/head_admin',$data_head);
            $this->load->view('master/admin/nav_admin');
            $this->load->view('admin/cursos/lista_cursos',$data);
            $this->load->view('master/admin/footer_admin');

        }else{
            echo "<script>window.location.href='".base_url()."Welcome/';</script>";
        }
    }
    
    public function newCurso(){
        if($this->session->userdata('correo') && $this->session->tipo =='1'){
            $data_head = array('titulo' => 'Nuevo Curso');
            
            $this->load->view('master/admin/head_admin',$data_head);
            $this->load->view('master/admin/nav_admin');
            $this->load->view('admin/cursos/new_curso');
            $this->load->view('master/admin/footer_admin');

        }else{
            echo "<script>window.location.href='".base_url()."Welcome/';</script>";
        }
    }

    public function newCurso_proc(){
        $nombre = $this->input->post('nombre');
        $semestre = $this->input->post('semestre');
        $year = $this->input->post('year');

        if($this->Usuarios->nuevoCurso($nombre,$semestre,$year)){
            echo "<script>alert('Se ha ingresado el nuevo curso'); window.location.href='".base_url()."Administrador/';</script>";
        }else{
            echo "<script>alert('Hubo un error en la creación'); window.location.href='".base_url()."Administrador/';</script>";
        }
    }
}
