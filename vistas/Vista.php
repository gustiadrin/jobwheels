<?php

class Vista {

    public function __construct(Type $var = null) {
        $this->var = $var;
    }

    public function render($vista, $data){
    //este método asociado al objeto Vista, incluye la vista seleccionada
        if (file_exists("./vistas/".$vista.".php")){ 
            require_once ("./vistas/".$vista.".php");
        }
    }
}

?>
