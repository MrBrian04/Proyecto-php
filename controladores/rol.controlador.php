<?php
require_once "./modelos/rol.modelo.php";
class ControladorRol{
    
    static public function ctrRol(){

        if(isset($_POST["tipoRol"])){

            $tabla = "rol";

            $datos = array(
                "tipoRol" => $_POST["tipoRol"]
            );

            $respuesta = ModeloRol::mdlRol($tabla, $datos);

            return $respuesta;

        }

    }

}