<?php
require_once "connection.php";
require_once "get.model.php";


class PutModel{
    static public function putData($table, $data, $id, $nameId){
$response=GetModel::getDatafilter($tabel,$nameId, $nameId, $id, null, null, null, null)
if(empty($response)){
    return null;
}
    }



    #actualiar regitsros
    $Set="";
    foreach ($data as $key => $value){

        $set .= $key."=".$key.",";

    }

    $set =substr($set,0,-1);

    $sql="UPDATE $table SET $set WHERE $nameId=:$nameId"
}




?>