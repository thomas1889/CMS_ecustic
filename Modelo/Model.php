<?php

require_once ('../Controlador/conexion.php');

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

    public function getArticles() {
        $sql = "SELECT 
                articulos.*,
                imagen.id_imagen, imagen.ubicacion
            FROM articulos
            INNER JOIN imagen ON articulos.id_imagen = imagen.id_imagen
            ORDER BY fecha DESC";

        $query = $this->db->query($sql);
        $arrayArt = array();
        while ($rows = $this->db->fetch($query)) {
            $arrayArt[] = $rows;
        }
        return $arrayArt;
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

//    public function getArticulo(){
//        $sql="SELECT 
//                articulos.id_art,
//                articulos.titulo,
//                articulos.cabezote,
//                articulos.fecha,
//                articulos.imagenprincipal,
//                articulos.id_texto,
//                imagen.ubicacion,
//                texto.contenido
//            FROM articulos
//            INNER JOIN imagen ON articulos.imagenprincipal = imagen.id_imagen
//            INNER JOIN texto ON articulos.id_texto = texto.id_texto
//            WHERE articulos.id_art =";
//    }
}
