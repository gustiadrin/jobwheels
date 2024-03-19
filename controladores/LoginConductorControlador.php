<?php

class LoginConductorControlador{

    public function __construct(Type $var = null) {
        $this->var = $var;
    }

    //Primero definimos las acciones que hará el controlador
    //Acción 1:


    public function verLogin(){
        //Esta acción deberá:
        //Acceder al modelo
 
        //Acceder a la vista
        require_once("./vistas/Vista.php");
        $vista = new Vista();
        $vista->render("loginConductor",array());
        
     }
    
     public function logearse(){
        $dni=$_POST["dni"];
        require_once("./modelos/LoginConductorModelo.php");
        $modelo = new LoginConductorModelo();

        if($modelo->getConductor($dni)){
            echo "deberíamos mostrar el perfil del conductor";
        }else{
            require_once("./vistas/Vista.php");
            $vista = new Vista();
            $vista->render("loginConductor",array());
        }
     }
}

?>