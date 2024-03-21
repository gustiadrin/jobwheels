<?php

class PerfilConductorModelo{

    public function __construct(Type $var = null) {
        $this->var = $var;
    }

    public function getConductor($dni){

        require_once("./lib/GestorBD.php");
        $gbd = new GestorBD;

        if($gbd->conectar()){
            $data = $gbd->getConductorDni($dni);
        }else{
            echo "error de conexion";
        }

        return $data;
    }

}
