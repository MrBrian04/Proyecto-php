<?php
require_once "./modelos/inventario.modelo.php";
class ControladorInventario{
    
    static public function ctrInventario(){

        if(isset($_POST["inventarioProducto"])){

            $tabla = "inventario";

            $datos = array(
                "inve_nombre_producto" => $_POST["inventarioProducto"],
                "inve_cantidad_producto" => $_POST["inventarioCantidad"],
                "inve_precio_producto" => $_POST["inventarioPrecio"],            

            );

            $respuesta = ModeloInventario::mdlInventario($tabla, $datos);

            return $respuesta;

        }

    }

}