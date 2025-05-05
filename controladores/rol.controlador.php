<?php
require_once "./modelos/rol.modelo.php";
class ControladorRol{
    
    static public function ctrRol(){

        if(isset($_POST["nombreProducto"])){

            $tabla = "inventario";

            $datos = array(
                "nombreProducto" => $_POST["nombreProducto"],
                "cantidadProducto" => $_POST["cantidadProducto"],
                "precioProducto" => $_POST["precioProducto"],            

            );

            $respuesta = ModeloRol::mdlRol($tabla, $datos);

            return $respuesta;

        }

    }

}