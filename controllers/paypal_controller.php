<?php
    require_once("utils/seg.php");
    require_once("models/paypal_model.php");

    class paypal_controller {

        public static function registrar_notificacion() {
            //revisado
            $pago = new paypal_model();
            $pago->registrar($_POST);
        }

        public static function cancelar() {
            //revisado
            header("location: index.php?c=".seg::codificar("principal")."&m=".seg::codificar("mensaje")."&msg=La compra ha sido cancelada.<br>Recuerda que para iniciar, debes pagar el servicio");
        }

        public static function retorno() {
            //revisado
            header("location: index.php?c=".seg::codificar("principal")."&m=".seg::codificar("mensaje")."&msg=El pago ha sido registrado con éxito.<br>Inicia sesión para utilizar el servicio");
        }
    }
?>