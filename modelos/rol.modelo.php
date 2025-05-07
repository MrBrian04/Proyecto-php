<?php

require_once 'conexion.php'; 

class ModeloRol {

    /*=============================================
    Registrar usuario
    =============================================*/
    static public function mdlRol($tabla, $datos){
        
        $sql = "INSERT INTO {$tabla} (rol_nombre) VALUES (:name)";

        $stmt = Conexion::conectar()->prepare($sql);

        $stmt->bindParam(":name",   $datos["tipoRol"],   PDO::PARAM_STR);

        $ok = $stmt->execute();
        $stmt->closeCursor();
        return $ok ? "ok" : "error";
    }

}
