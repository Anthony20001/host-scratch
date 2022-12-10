<?php
    require_once("utils/seg.php");
    require_once("models/suscripcion_model.php");

    class suscripcion_controller {
        
        public static function registrar() {
            if (!isset($_POST["token"]) || !seg::validarSesion($_POST["token"])) {
                echo "Se te ha negado el acceso por este medio";
                exit();
            }

            $obj = new suscripcion_model();
            $correo = filter_var($_POST["txtCorreo"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $obj->setCorreo($correo);

            $resultado = $obj->insertar();

            if ($resultado->getId() <> "") {
                require_once("views/template/header.php");
                require_once("views/template/navbar.php");
                require_once("views/template/header2.php");
                require_once("views/suscripcion/suscrito.php");
                require_once("views/template/footer.php");
            }
        } 

        # Inicia parte de Irvin

        public static function mostrar_suscripcion()
        {
            /*if (!isset($_SESSION["id_usuario"])) {
                header("location:" . "index.php?c=" . seg::codificar("principal") . "&m=" . seg::codificar("mensaje") . "&msg=Notiene acceso a esta pantalla, debe acceder para continuar");
                exit();
            }*/
            if (isset($_GET["msg"])) $msg=$_GET["msg"];
    
            $obj = new suscripcion_model();
            $obj->setId(["_id"]);
            $resultado = $obj->listar_suscripcion();
    
            require_once("views/template/header.php");
            require_once("views/template/navbar.php");
            require_once("views/verdatos/versuscripciones.php");
            require_once("views/template/footer.php");
            
        }
        # Termina de Irvin
    }
?>