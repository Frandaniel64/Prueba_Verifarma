<?php

require_once 'conexion.php';

class farmaciaModelo{

    public $db;

    public function __construct(){

        $this->db=Connect::connection();
        
    }

    
    public function get_farmaci($lat,$long){
        $sql = "SELECT * FROM farmacias where latitud = :lat and longitud = :long";
        $query = $this->db->prepare($sql);
        $query->bindParam(':lat',$lat);
        $query->bindParam(':long',$long);
        $query->execute();
        $list = $query->fetchAll(PDO::FETCH_OBJ);
        return $list;
    }

    public function dist($latitud, $longitud){
   
        //Constante de cuantos Kilomentros a la redonda  se realiza la busqueda
        // 0,1 equivale a 1 km a la redonda

        $constante = 0.1;

        //Aplicamos la constante a las cordenadas
        $lat_min = $latitud - $constante;
        $lat_max = $latitud + $constante;
        $lng_min = $longitud - $constante;
        $lng_max = $longitud + $constante;

        $sql = "SELECT * FROM farmacias WHERE latitud >= :latmin AND latitud <= :latmax AND longitud >= :lngmin AND longitud <= :lngmax";
        $query = $this->db->prepare($sql);
        $query->bindValue(":latmin", $lat_min);
        $query->bindValue(":latmax", $lat_max);
        $query->bindValue(":lngmin", $lng_min);
        $query->bindValue(":lngmax", $lng_max);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function store($latitud, $longitud, $nombre, $direccion){

        $sql = "INSERT INTO farmacias (latitud, longitud, nombre, direccion) VALUES (:latitud, :longitud, :nombre, :direccion)";
        $query = $this->db->prepare($sql);
        $query->bindValue(":latitud", $latitud);
        $query->bindValue(":longitud", $longitud);
        $query->bindValue(":nombre", $nombre);
        $query->bindValue(":direccion", $direccion);
        $query->execute();
        if($query){
            return true;
        }else{
            return false;
        }
    }


}



?>