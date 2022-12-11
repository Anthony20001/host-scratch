<?php
    require_once("utils/seg.php");

    class principal_controller {
        public static function index() {
            if (isset($_COOKIE["usuario"])) {
                $_SESSION["nombre"] = seg::decodificar($_COOKIE["nombre"]);
                $_SESSION["usuario"] = seg::decodificar($_COOKIE["usuario"]);
            }

            require_once("views/template/header.php");
            require_once("views/template/navbar.php");
            require_once("views/template/header2.php");
            require_once("views/principal/index.php");
            require_once("views/template/footer.php");
        }

        public static function error() {
            $titulo = "Scratt &mdash; Sitio web oficial | ERROR";

            require_once("views/template/header.php");
            require_once("views/template/navbar.php");
            require_once("views/template/header2.php");
            require_once("views/principal/error.php");
            require_once("views/template/footer.php");
        }

        public static function mensaje() {
            $mensaje = $_GET["msg"];

            $titulo = "Scratt &mdash; Sitio web oficial | NOTIFICACIÓN";

            require_once("views/template/header.php");
            require_once("views/template/navbar.php");
            require_once("views/template/header2.php");
            require_once("views/principal/mensaje.php");
            require_once("views/template/footer.php");
        }
    }
?>  