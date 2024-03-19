<?php

class LoginConductorModelo{

    public function __construct(Type $var = null) {
        $this->var = $var;
    }

    public function getConductor($codigo){
        require_once("./lib/GestorBD.php");
        $gbd = new GestorBD;

        if($gbd->conectar()){
            if($gbd->getConductorDni($codigo)){;
               return true;
            }else{
                return false;
            }
        }else{
            echo "error de conexion";
        }

    }

}

?>