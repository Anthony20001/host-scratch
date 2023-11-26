<?php 
    class bd {
        public static function connection() {
            require_once("vendor/autoload.php");

            $cadena = "mongodb+srv://usermongodb:5GgsOShkln3GssV0@scrattdatabase.chsjpsj.mongodb.net/?retryWrites=true&w=majority";

            $cliente = new MongoDB\Client($cadena);
            $conexion = $cliente->selectDatabase("Scratt2022");

            return $conexion;
        }
    }
?>