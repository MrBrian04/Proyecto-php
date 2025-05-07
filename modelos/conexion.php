<?php

    class Conexion{

        static public function conectar(){

            $link = new PDO("mysql:host=localhost:3308;dbname=proyectophp_db","root","");
            return $link;

        }

    }