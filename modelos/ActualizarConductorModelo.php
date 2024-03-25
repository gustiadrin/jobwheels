<?php

    class ActualizarConductorModelo {

        public function __construct(Type $var = null) {
            $this->var = $var;
        }

        public function actulizarConductor($dni, $nombre, $telefono, $ciudad, $disponible, $presentacion){
        
            require_once("./lib/GestorBD.php");
            $gbd = new GestorBD();

            if($gbd->conectar()){

                if($gbd->updateConductor($dni, $nombre, $telefono, $ciudad, $disponible, $presentacion)){
                    return true;
                }else{
                    return false;
                }
                
            }else{
                echo "error de conexión con BD";
            }
            
    
       }
    }

   

?>