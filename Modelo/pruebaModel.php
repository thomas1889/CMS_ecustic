<?php

require_once ('Controlador/conexion.php');
//require_once ('Controlador/conexion.php');

class modeloPrueba {

    private $db;

    public function __construct() {
        $this->db = new Conexion();
    }

    public function getContenido() {
        $sql = "
        SELECT id_texto,
               titulo,
               tipo,
               contenido
        FROM texto
        WHERE TRUE ";

        $query = $this->db->query($sql);
        $array = array();
        while ($rows = $this->db->fetch($query)) {
            $array[] = $rows;
        }
        return $array;
    }

    public function getImagenes() {
        $sql = "
            SELECT 
                id_imagen,
                nombre, 
                ubicacion
            FROM imagen
            WHERE TRUE";

        $query = $this->db->query($sql);
        $arrayImg = array();
        while ($rows = $this->db->fetch($query)) {
            $arrayImg [] = $rows;
        }
        return $arrayImg;
    }
    
      public function getImagenCliente() {
        $sql = "
            SELECT 
                id_imagen,
                nombre, 
                ubicacion
            FROM imagen
            WHERE nombre LIKE '%cliente%'";
        $query = $this->db->query($sql);
        $arrayC = array();
        while ($rows = $this->db->fetch($query)) {
            $arrayC[] = $rows;
        }
        return $arrayC;
    }

}
