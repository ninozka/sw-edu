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

        public function perfilCuenta($id){
            $this->db->select('t.nombre as nombre, t.id_tipo as id');
            $this->db->from('tipo as t');
            $this->db->join('usuario_tipo as ut','ut.tipo_id = t.id_tipo AND ut.usuario_id = "'.$id.'";');
            $perfiles = $this->db->get();
            return $perfiles;
        }

    }
?>
