<?php

    class ListaEmpresasControlador{

        public function __construct(Type $var = null) {
            $this->var = $var;
        }

        public function verEmpresas(){
            include_once("./modelos/ListaEmpresasModelo.php");
            $modelo = new ListaEmpresasModelo();

            $data = $modelo->listadoEmpresas();


            include_once("./vistas/Vista.php");
            $vista = new Vista();
            $vista->render("listaEmpresas", $data);
        }
    }

?>