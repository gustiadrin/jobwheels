<?php

class RegistroControlador{

    public function __construct(Type $var = null) {
        $this->var = $var;
    }

    public function verRegistro(){
     include_once("./vistas/Vista.php");
     $vista = new Vista();
     $vista->render("registro", array());
    }

    public function validarRegistro(){   

        $checkConductor = "off";
        $checkEmpresa= "off";
        $dni_cif=$_POST["user"];
        $contrasena=$_POST["pass"];

        if(isset($_POST["checkConductor"])){
            $checkConductor=$_POST["checkConductor"];
        }

        if(isset($_POST["checkEmpresa"])){
            $checkEmpresa=$_POST["checkEmpresa"];
        }

      
        if($dni_cif != "" && $contrasena != ""){

          $patternUser = "/^[a-zA-Z0-9][0-9]{7}[a-zA-Z]$/";
          if(preg_match($patternUser,$dni_cif)==0){
               $data["errorRegistro"]="Formato de CIF/DNI incorrecto";
               require_once("./vistas/Vista.php");
               $vista = new Vista();
               $vista->render("registro",$data);
          }else{
          
                $patternPass= "/^(?=.*[a-zA-Z])(?=.*\d).*$/";
                if(preg_match($patternPass,$contrasena)==0){
                    $data["errorRegistro"]="Formato de contraseña incorrecta. Debe contener números y letras, vuelva a intentarlo.";
                    require_once("./vistas/Vista.php");
                    $vista = new Vista();
                    $vista->render("registro",$data);
                }else{

                    if(($checkConductor=="on" && $checkEmpresa=="on") || ($checkConductor=="off" && $checkEmpresa=="off")){
                        $data["errorRegistro"]="Debes elegir un tipo de usuario.";
                        require_once("./vistas/Vista.php");
                        $vista = new Vista();
                        $vista->render("registro",$data);
                    }else{
          
                        if($checkConductor=="on" && $checkEmpresa=="off"){
                            require_once("./modelos/RegistroModelo.php");
                            $modelo = new RegistroModelo();

                            if($modelo->crearConductor($dni_cif, $contrasena)){
                                    header("Location: index.php?controlador=loginConductor&accion=verLogin");
                            }else{
                                    $data["errorRegistro"]="El usuario ya existe o error de conexión BD.";
                                    require_once("./vistas/Vista.php");
                                    $vista = new Vista();
                                    $vista->render("registro",$data);
                            }
                        }else{
          
                            if($checkConductor=="off" && $checkEmpresa=="on"){
                                require_once("./modelos/RegistroModelo.php");
                                $modelo = new RegistroModelo();

                                if($modelo->crearEmpresa($dni_cif, $contrasena)){
                                        header("Location: index.php?controlador=loginEmpresa&accion=verLogin");
                                }else{
                                        $data["errorRegistro"]="El usuario ya existe o error de conexión BD.";
                                        require_once("./vistas/Vista.php");
                                        $vista = new Vista();
                                        $vista->render("registro",$data);
                                }
                            }     
                        }
                    }
                 }        
            }

      }else{     
          $data["errorRegistro"]="Falta algún dato, vuelva a intentarlo";
          require_once("./vistas/Vista.php");
          $vista = new Vista();
          $vista->render("registro",$data);
      }

     
    }
     
}

?>

