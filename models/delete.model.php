<?php
require_once "conection.php";
require_once "get.model.php";

class DeleteModel{
    static public function deleteData($table, $id, $nameId){
        $response =GetModel::getDataFilter($table, $nameIds, $id, null, null, null, null)

        if(empty ($response)){
        return null;
        }


        #eliminar registros

        $sql="DELETE FROM $table WHERE $nameId=: $nameId";

        $link = Connection::connect();
        $stmt=$link->prepare($sql);
        $stmt -> bindParam(":".$nameId, $id, PDO::PARAM_STR);
        
        if($stmt -> execute()){
            $response = array(

            "lastId"=> $link->lastInsertId(),
            "comment"=> "proceso exitoso"
            );

            return $response;
       
        }else{
            return $link -> errorInfo();
        }
    }
}




?>