<?php
    class Save{
        private $usuario=null;
        function _construct() 
        {
            session_start();
            if(isset($_SESSION["usuario"])) $this->$usuario=$_SESSION["usuario"];
        }
        public function getUsuario(){
            return $usuario;
        }
        public function addUsuario($usuario){
            $_SESSION["usuario"]=$usuario;
            $this->usuario=$usuario;
        }
    }

?>