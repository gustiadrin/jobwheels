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
 
        echo "estoy en login Conductor";
 
        //Acceder a la vista
        require_once("./vistas/Vista.php");
        $vista = new Vista();

        $vista->render("loginConductor",array());
     }
    
     public function logearse(){
        require_once("./modelos/LoginConductorModelo.php");
        $modelo = new LoginConductorModelo();
        $modelo->getConductor("1234");
     }
}

?>