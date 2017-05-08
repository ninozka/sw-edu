<?php

	class Usuarios extends CI_Model{

        public function login($email,$password){ // Funcion que retorna un usuario si encuentra el correo y password

            $user = $this->db->get_where('usuario',array('correo' => $email,'password' => $password));
            if($user->num_rows()>0){
                return $user->row();
            }else{
                return false;
            }
        }

        //Funcion que pregunta si la cuenta de usuario tiene asociado varios perfiles, si es asi los retorna todos
        public function perfilCuenta($id){
            $this->db->select('t.nombre as nombre, t.id_tipo as id');
            $this->db->from('tipo as t');
            $this->db->join('usuario_tipo as ut','ut.tipo_id = t.id_tipo AND ut.usuario_id = "'.$id.'";');
            $perfiles = $this->db->get();
            return $perfiles;
        }

        //Funcion para obtener los tipos de usuarios (profesor,admin);
        public function getTipos(){
            $data = $this->db->get_where('tipo',array('id_tipo !=' => '3'));
            if($data->num_rows()>0){
                return $data;
            }else{
                return false;
            }
        }

        // Aquí se insertaran los usuarios del tipo administrador y/o profesor
        public function nuevoUsuario($correo,$rut,$nombre,$apellido,$password){
            $data = array('correo' => $correo,
                         'rut' => $rut,
                         'nombre' => $nombre,
                         'apellido' => $apellido,
                         'password' => $password);
            if($this->db->insert('usuario',$data)){
                return true;
            }else{
                return false;
            }
        }

        //funcion para obtener la id del ultimo usuario creado
        public function lastCreatedUser($rut){
            $this->db->order_by('id','desc');
            $data = $this->db->get('usuario',1);
            return $data->row();
        }

        //funcion para asignar en la BD los tipos
        public function asignarTipo($idUltimo,$tipo){
            $data = array('usuario_id' => $idUltimo,
                         'tipo_id' => $tipo);
            if($this->db->insert('usuario_tipo',$data)){
                return true;
            }else{
                return false;
            }
        }

        //funcion que retorna los tipos de usuario que tiene el usuario ID X
        public function getTiposUsers($id){
            $data = $this->db->get_where('usuario_tipo',array('usuario_id' => $id,
                                                     'tipo_id != ' => '3'));
            return $data;
        }

        //Funcion para obtener todos los usuarios que no esten eliminados
        public function getUsers(){
            $data = $this->db->get_where('usuario',array('eliminado' => '0' ));
            if($data->num_rows()>0){
                return $data;
            }else{
                return false;
            }
        }

        //Funcion para obtener los cursos creados
        public function getCursos(){
            $data = $this->db->get_where('cursos',array('eliminado' => '0'));
            if($data->num_rows()>0){
                return $data;
            }else{
                return false;
            }
        }

        //Funcion para añadir el nuevo curso a la base de datos
        public function nuevoCurso($nombre,$semestre,$year){
            $data = array('nombre' => $nombre,
                         'semestre' => $semestre,
                         'anho' => $year);
            if($this->db->insert('cursos',$data)){
                return true;
            }else{
                return false;
            }
        }
    }
?>
