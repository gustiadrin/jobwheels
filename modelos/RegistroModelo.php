<?php

    class RegistroModelo{

        public function __construct(Type $var = null) {
            $this->var = $var;
        }

        public function crearConductor($dni, $contrasena){
            include_once("./lib/GestorBD.php");
            $gbd = new GestorBD();

            if($gbd->conectar()){

                if($gbd->existeConductor($dni, $contrasena)){
                    return false;
                }

                $gbd->insertConductor($dni, $contrasena);
                return true;
            }else{
                echo "Error de conexión";
            }
            
        }

        public function crearEmpresa($cif, $contrasena){
            include_once("./lib/GestorBD.php");
            $gbd = new GestorBD();

            if($gbd->conectar()){

                if($gbd->existeEmpresa($cif, $contrasena)){
                    return false;
                }

                $gbd->insertEmpresa($cif, $contrasena);
                return true;
            }else{
                echo "Error de conexión";
            }
            
        }
    }

?>