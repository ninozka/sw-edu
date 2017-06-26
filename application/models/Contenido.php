<?php
    class Contenido extends CI_Model{
        
        public function getContenidoIntro($idIntro){
            $intro = $this->db->get_where('introduccion', array('id' => $idIntro));
            return $intro->row();
        }

        public function obtenerPregunta($id){
            $this->db->select('p.*, rc.respuesta as rc, rc.id as rcid');
            $this->db->from('preguntas_test as p');
            $this->db->join('respuestas_correctas as rc','p.id = rc.pregunta_id AND p.id ='.$id);
            $data = $this->db->get();
            return ($data->num_rows()>0) ? $data->row() : false;
        }

        public function ri1($id){

            $this->db->order_by('id','asc');
            $this->db->limit(1);
            $data = $this->db->get_where('respuestas_incorrectas', array('pregunta_id' => $id));
            return $data->row();
        }
        public function ri2($id){
            $this->db->order_by('id','desc');
            $this->db->limit(1);
            $data = $this->db->get_where('respuestas_incorrectas', array('pregunta_id' => $id));
            return $data->row();
        }
    }
?>
