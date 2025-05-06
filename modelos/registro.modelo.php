<?php

require_once "conexion.php";

class ModeloRegistro {

    /*=============================================
    Registrar usuario
    =============================================*/
    static public function mdlRegistro($tabla, $datos){
        
        $sql = "INSERT INTO {$tabla} (pers_nombre, pers_telefono, pers_correo, pers_clave) VALUES (:nombre, :telefono, :correo, :clave)";

        $stmt = Conexion::conectar()->prepare($sql);

        $stmt->bindParam(":nombre",   $datos["pers_nombre"],   PDO::PARAM_STR);
        $stmt->bindParam(":telefono", $datos["pers_telefono"], PDO::PARAM_STR);
        $stmt->bindParam(":correo",   $datos["pers_correo"],   PDO::PARAM_STR);
        $stmt->bindParam(":clave",    $datos["pers_clave"],    PDO::PARAM_STR);

        $ok = $stmt->execute();
        $stmt->closeCursor();
        return $ok ? "ok" : "error";
    }

    
    /*=============================================
    Seleccionar Registros
    =============================================*/
    static public function mdlSeleccionarRegistro($tabla, $item, $valor){

        if ($item === null && $valor === null) {

            // Trae todos los registros, aliasando la PK a 'id'
            $sql = "
                SELECT 
                    pk_id_persona AS id,
                    pers_nombre,
                    pers_telefono,
                    pers_correo,
                    pers_clave,
                    DATE_FORMAT(pers_fecha_registro, '%d/%m/%Y') AS fecha 
                FROM {$tabla} 
                ORDER BY pk_id_persona DESC
            ";

            $stmt = Conexion::conectar()->prepare($sql);
            $stmt->execute();
            $datos = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $stmt->closeCursor();

            return $datos;

        } else {

            // Trae un solo registro filtrado
            $sql = "
                SELECT 
                    pk_id_persona AS id,
                    pers_nombre,
                    pers_telefono,
                    pers_correo,
                    pers_clave,
                    DATE_FORMAT(pers_fecha_registro, '%d/%m/%Y') AS fecha 
                FROM {$tabla} 
                WHERE {$item} = :valor 
                ORDER BY pk_id_persona DESC
            ";

            $stmt = Conexion::conectar()->prepare($sql);
            $stmt->bindValue(":valor", $valor, PDO::PARAM_STR);
            $stmt->execute();
            $dato = $stmt->fetch(PDO::FETCH_ASSOC);
            $stmt->closeCursor();

            return $dato;
        }

    }


    

}
