<?php
    class Contenido extends CI_Model{
        
        public function getContenidoIntro($idIntro){
            $intro = $this->db->get_where('introduccion', array('id' => $idIntro));
            return $intro->row();
        }   
    }
?>