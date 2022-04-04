<?php

require_once 'api/farmacia.php';
$farm = new farmacia();

if($_SERVER['REQUEST_METHOD'] == 'GET'){

$farm -> consulta($_GET);
return json_encode($farm);

}else if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
     $farm -> insertar($_POST);
    return json_encode($farm); 


}else{

    echo json_encode(array('error' => 'Metodo no soportado'));
    http_response_code(405);
}





?>
