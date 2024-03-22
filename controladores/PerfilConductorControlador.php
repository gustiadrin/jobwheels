<?php
    
class PerfilConductorControlador{
    
    public function __construct(Type $var = null) {
        $this->var = $var;
    }

    // Primero definimos las acciones que hará el controlador
    // Acción 1:



    public function verPerfilConductor(){
        require_once("./lib/GestorSesion.php");
        $sesion = new GestorSesion();
        $dni= $sesion->obtenerValorSesion("CLAVE");

        require_once("./modelos/PerfilConductorModelo.php");
        $modelo = new PerfilConductorModelo();
        $datosConductor = $modelo->getConductor($dni);       
       
        //Acceder a la vista
        require_once("./vistas/Vista.php");
        $vista = new Vista();
        $vista->render("perfilConductor", $datosConductor);
        
     }

    
}

 ?>