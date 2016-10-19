<?php

include_once dirname(dirname(__FILE__)) . '/adodb/adodb.inc.php';

class singleton {

    private static $instancia;

 

    public static function getInstancia() {
        ///verificar si existe instancia en la variable estatica
        if (!isset(self::$instancia)) {
            self::$instancia = ADONewConnection('mysql');
            self::$instancia->Connect("localhost", "root", "", "ecustic");
            //self::$instancia->debug = true; --linea para mostrar consulta
        }

        return self::$instancia;
    }
    
    public function getlista1(){
        
        $db = singleton::getInstancia();
        $consulta = "select * from ttipo_inmueble_desc";
        $resultset = $db->Execute($consulta);
        return $resultset;
    }
    
    public function getlista2(){
        
        $db = singleton::getInstancia();
        $consulta = "select * from ttipo_negocio_inmu";
        $resultset = $db->Execute($consulta);
        return $resultset;
    }
    
     public function insertTimInmueble($dir, $valor, $fecha, $tn, $ti, $cc, $name, $ruta){
        
        $db = singleton::getInstancia();
        $sql = "INSERT INTO tinmueble(id_inmueble,dir_inmueble,valor_inmueble,fecha_ingreso,tipo_negocio,tipo_inmueble,nro_doc_propietario,nombre_propietario,ruta_foto_inmueble) values(null,'$dir','$valor','$fecha','$tn','$ti','$cc','$name','$ruta') ";
	if ($db->Execute($sql) == false) {
    		print 'error' . $db->ErrorMsg() . '<br>';
	} else {
    		echo 'Success!';
	}
    }
    
    public function getTinmueble(){
        
        $db = singleton::getInstancia();
        $consulta = "select * from tinmueble";
        $resultset = $db->Execute($consulta);
        return $resultset;
    }
    
    
}



?>
