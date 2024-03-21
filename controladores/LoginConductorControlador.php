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
        if(isset($_POST["dni"]) && !empty($_POST["dni"])){
            $dni=$_POST["dni"];
            require_once("./modelos/LoginConductorModelo.php");
            $modelo = new LoginConductorModelo();

            if($modelo->validar($dni)){
                //Esto crea la sesión
                require_once("./lib/GestorSesion.php");
                $sesion = new GestorSesion();
                $sesion->crearSesion("CLAVE", $dni);
                // if($sesion->existeSesion("CLAVE")){
                //     echo "SI se ha creado la sesion";
                //     echo "------------".$sesion->obtenerValorSesion("CLAVE");
                // }else{
                //     echo "NO se ha creado la sesion";
                // }
                header("Location: index.php?controlador=perfilConductor&accion=verPerfilConductor");
            }else{
                $data["errorLogin"]="El usuario no existe";
                require_once("./vistas/Vista.php");
                $vista = new Vista();
                $vista->render("loginConductor",$data);
            }
        }
     }
}

?>