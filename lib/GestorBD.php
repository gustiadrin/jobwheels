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

    public function existeConductor($dni){
        $sql = "SELECT * FROM conductor WHERE dni='".$dni."'"; 

        $resultadoConsulta = $this->conexion->query($sql);

        if($resultadoConsulta->num_rows>0){
            return true;
        }else{
            return false;
        }
    }

    public function existeEmpresa($cif){
        $sql = "SELECT * FROM empresa WHERE cif='".$cif."'";
        
        $resultadoConsulta = $this->conexion->query($sql);

        if($resultadoConsulta->num_rows>0){
            return true;
        }else{
            return false;
        }
    }

    public function getConductorDni($dni){
        $sql = "SELECT * FROM conductor WHERE dni='".$dni."'";

        $data = array();

        $resultadoConsulta = $this->conexion->query($sql);

        if($resultadoConsulta->num_rows>0){
            while($row = $resultadoConsulta->fetch_assoc()){
                $data[] = $row;
            }
        }

        return $data;
    }


    public function getEmpresas(){
        $sql = "SELECT nombre_empresa, descripcion, telefono, email, ciudad, v_disponibles FROM empresa WHERE v_disponibles > 0";

        $data = array();

        $resultadoConsulta = $this->conexion->query($sql);

        if($resultadoConsulta->num_rows>0){
            while($row = $resultadoConsulta->fetch_assoc()){
                $data[] = $row;
            }
        }

        return $data;
    }

    public function updateConductor($dni, $nombre, $telefono, $ciudad, $disponible, $presentacion){
        $sql = "UPDATE `conductor` SET `nombre`='".$nombre."',`telefono`='".$telefono."',`ciudad`='".$ciudad."',`disponible`=".$disponible.",`presentacion`='".$presentacion."' WHERE dni='".$dni."'";  
        if($result = $this->conexion->query($sql)){
            return true;
        }else{
            return false;
        }
    }

    public function insertConductor($dni, $contrasena){
        $sql = "INSERT INTO `conductor`(`dni`, `contrasena`) VALUES ('".$dni."','".$contrasena."')";
        if($result = $this->conexion->query($sql)){
            return true;
        }else{
            return false;
        }
    }

    public function insertEmpresa($cif, $contrasena){
        $sql = "INSERT INTO `empresa`(`cif`, `contrasena`) VALUES ('".$cif."','".$contrasena."')";
        if($result = $this->conexion->query($sql)){
            return true;
        }else{
            return false;
        }
    }

}

?>