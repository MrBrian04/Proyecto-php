<?php

require_once 'conexion.php'; 

class ModeloRol {

    /*=============================================
    Registrar usuario
    =============================================*/
    static public function mdlRol($tabla, $datos){
        
        $sql = "INSERT INTO {$tabla} (inve_nombre_producto, inve_cantidad_producto, inve_precio_producto) VALUES (:producto, :cantidad, :precio)";

        $stmt = Conexion::conectar()->prepare($sql);

        $stmt->bindParam(":producto",   $datos["nombreProducto"],   PDO::PARAM_STR);
        $stmt->bindParam(":cantidad", $datos["cantidadProducto"], PDO::PARAM_INT);
        $stmt->bindParam(":precio",   $datos["precioProducto"],   PDO::PARAM_STR);

        $ok = $stmt->execute();
        $stmt->closeCursor();
        return $ok ? "ok" : "error";
    }

}
