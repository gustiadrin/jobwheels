<?php

class LoginConductorModelo{

    public function __construct(Type $var = null) {
        $this->var = $var;
    }

    public function getConductor($codigo){
        require_once("./lib/GestorBD.php");
        $gbd = new GestorBD;

        if($gbd->conectar()){
            echo "me he conectado";
        }else{
            echo "error de conexion";
        }

    }

}

?>