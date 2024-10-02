<?php
require_once "models/connection";
require_once "controller/put.controller.php";

if(isset($_GET["id"])&& isset ($_GET["nameId"])){
$data=array();
parse_str (file_get_contents('php://input'),$data);



$columns =array();
foreach(array_keys($data)as $key =>$values){
    $columns =array_unique($columns,$values)
}

array_push($columns, $_GET ["nameId"]);
$columns =array_unique($columns);

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