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
            $perfiles = $this->db->get_where('usuario_tipo',array('usuario_id' => $id));
            return $perfiles;
        }

    }
?>
