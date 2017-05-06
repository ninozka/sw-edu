<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('Usuarios');
    }

	public function index(){
		$this->load->view('presentacion/login');
	}
    
    public function iniciarPhaser(){
        $this->load->view('juego/holamundo');
    }

    public function login(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $datos = $this->Usuarios->login($email,$password);
        if($datos != false){
            $sesion = array('correo' => $datos->correo,
                           'nombre' => $datos->nombre,
                           'apellido' => $datos->apellido,
                           'rut' => $datos->rut,
                           'edad' => $datos->edad);
            $this->session->set_userdata($sesion);

            $idUser = $datos->id;
            $tipos = $this->Usuarios->perfilCuenta($idUser);
            if($tipos->num_rows()>1){
                $data = array('tipo' => $tipos);
                $this->load->view('presentacion/seleccion_perfil',$data);
            }else{
                $unico = $tipos->row();
                $tipo = $unico->id;
                $this->session->set_userdata('tipo',$tipo);
                if($tipo == 1){
                    echo "<script>window.location.href='".base_url()."Administrador/';</script>";
                }elseif($tipo == 2){
                    echo "<script>window.location.href='".base_url()."Profesor/';</script>";
                }elseif($tipo == 3){
                    echo "<script>window.location.href='".base_url()."Alumno/';</script>";
                }
            }
        }else{
            echo "<script>window.location.href='".base_url()."Welcome/';</script>";
        }
    }

    public function login2(){
        $tipo = $this->input->post('tipo');
        $this->session->set_userdata('tipo',$tipo);
        if($tipo == 1){
            echo "<script>window.location.href='".base_url()."Administrador/';</script>";
        }elseif($tipo == 2){
            echo "<script>window.location.href='".base_url()."Profesor/';</script>";
        }elseif($tipo == 3){
            echo "<script>window.location.href='".base_url()."Alumno/';</script>";
        }

    }
}
