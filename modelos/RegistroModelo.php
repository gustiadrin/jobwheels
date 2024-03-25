<?php

    class RegistroModelo{

        public function __construct(Type $var = null) {
            $this->var = $var;
        }

        public function crearConductor($dni, $contrasena){
            include_once("./lib/GestorBD.php");
            $gbd = new GestorBD();

            if($gbd->conectar()){

                if($gbd->existeConductor($dni)){
                    return false;
                }

                if($gbd->insertConductor($dni, $contrasena)){
                    return true;
                }else{
                    return false;
                }
                    
            }else{
                echo "Error de conexión";
            }
            
        }

        public function crearEmpresa($cif, $contrasena){
            include_once("./lib/GestorBD.php");
            $gbd = new GestorBD();

            if($gbd->conectar()){

                if($gbd->existeEmpresa($cif)){
                    return false;
                }

                if($gbd->insertEmpresa($cif, $contrasena)){
                    return true;
                }else{
                    return false;
                }
                
            }else{
                echo "Error de conexión";
            }
            
        }
    }

?>