<?php

require_once 'modelo/farmaciaModelo.php';
class farmacia{

    public $farm;

    public function __construct(){

        $this->farm = new farmaciaModelo();
    }

     public function consulta($dato){
        
        $latitud = $dato['lat'];
        $longitud = $dato['lon'];
        $list = $this->farm->dist($latitud, $longitud);

        if($list != false){
            foreach($list as $f){

            $distancia = $this->distancia($latitud, $longitud, $f->latitud, $f->longitud);
            };
       
            $farmacia = [
                'id' => $f->id,
                'nombre' => $f->nombre,
                'direccion' => $f->direccion,
                'distancia' => $distancia.' km'
            ];
            
            echo json_encode($farmacia);
        }else{
            echo json_encode(array('error' => 'No hay farmacias cercanas'));
        }
    }


    public function distancia($lat1, $long1, $lat2, $long2){

    //Constantes de  la funcion     
    $km = 111.302;
    //Conversion de grados a radianes
    $degtorad = 0.01745329; 
    $radtodeg = 57.29577951; 

    $dlong = ($long1 - $long2);
    $dvalue = (sin($lat1 * $degtorad) * 
               sin($lat2 * $degtorad)) + 
               (cos($lat1 * $degtorad) * 
                cos($lat2 * $degtorad) * 
                cos($dlong * $degtorad));
            $dd= acos($dvalue) * $radtodeg;

        return round(($dd * $km), 2);

    }

    public function insertar($dato){
        //Valido que los datos no esten vacios
        if($dato['nombre'] != '' && $dato['direccion'] != '' && $dato['lat'] != '' && $dato['lon'] != ''){
            //Valido que no exista una farmacia con esas cordenadas
            $validar = $this->farm->get_farmaci($dato['lat'],$dato['lon']);
            if($validar > 0){
                echo json_encode(array('error' => 'Ya existe una farmacia en esas cordenadas'));
            }else{
                $lat = $dato['lat'];
                $lon = $dato['lon'];
                $nombre = $dato['nombre'];
                $direccion = $dato['direccion'];
                $result = $this->farm->store($lat, $lon, $nombre, $direccion);
                if($result == true){
                    echo json_encode(array('success' => 'Farmacia insertada correctamente'));
                }else{
                    echo json_encode(array('error' => 'No se pudo insertar la farmacia'));
                }
                }
        }else{
            echo json_encode(array('error' => 'No pueden haber campos vacios'));
        }
      
    }

 
}

  


?>