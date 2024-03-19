<?php

class GestorBD{

    private $conexion;

    public function __construct(Type $var = null) {
        $this->var = $var;
    }

    public function conectar(){
        $this->conexion = new mysqli("localhost", "root", "", "proyectodaw");
        if($this->conexion->connect_error!=null){
            return false;
        }else{
            return true;
        }
    }

    public function getConductor($dni){
        $sql = "SELECT * FROM conductor WHERE dni=$dni";

        $data=array();

        $result = $this->conexion->query($sql);

        if($result->num_rows>0){
            return true;
        }else{
            return false;
        }
    }

}

?>