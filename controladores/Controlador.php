<?php

class Controlador{ 

    public function __construct(Type $var = null) {
        $this->var = $var;
    }

    public function main(){ //esta función recibe por parámetros GET: 1. Hacia que donde apunta ($controlador) y 2. La acción que llevará ($accion)
        $controlador = "";
        $accion = "";

        if(isset($_GET["controlador"]) and !empty($_GET["controlador"])){ //
            $controlador = $_GET["controlador"];
        }else{
            $controlador = "inicio";
        }

        if(isset($_GET["accion"]) and !empty($_GET["accion"])){ //
            $accion = $_GET["accion"];
        }else{
            $accion = "";
        }


        //con esto controlamos que el dato que viene en el parametro "controlador" haga referencia a un controlador que exista
        //ucfirst es un método que pone la primera letra en mayúscula, las clases empiezan con mayúscula
        //si el controlador está mal me redirigirá al controlador de incio, que ejecutará la vista inicio
        if(file_exists("./controladores/".ucfirst($controlador)."Controlador.php")){
            //echo "------SI existe el controlador";
            require_once ("./controladores/".ucfirst($controlador)."Controlador.php");
            $nombreClase = ucfirst($controlador)."Controlador";
            $contro = new $nombreClase();
        }else{
            require_once ("./controladores/InicioControlador.php");
            $contro = new InicioControlador();
        }
    }
}

?>