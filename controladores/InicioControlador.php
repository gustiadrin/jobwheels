<?php

class InicioControlador{

    //el inicio controlador redirecciona a la vista controlador sin ningún otro dato (empieza de cero)
    public function __construct(Type $var = null) {

        require_once ("./vistas/Vista.php");
        $vista = new Vista();
        $vista->render("inicio", array());

    }
}

?>