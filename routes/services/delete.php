<?php
require_once "models/connection";
require_once "controller/put.controller.php";

if(isset($_GET["id"])&& isset ($_GET["nameId"])){
|


#validamos la tabla y la columna a actualizar

if(empty(Connection::getColumnsData($table, $columns))){
$json=array (
'status'=>400,
'resulta'=> 'datos no coinciden'


);

echo json_encode($json, http_response_code($json["status"]));
}
}


?>