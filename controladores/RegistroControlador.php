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

     $tipoUsuario = 0;

      if(!empty($_POST["user"]) && !empty($_POST["pass"])){

          $patternPass= "/^(?=.*[a-zA-Z])(?=.*\d).*$/";
          if(!preg_match($patternPass,$_POST["pass"])){
               $data["errorLogin"]="Formato de contraseña incorrecta. Debe contener números y letras, vuelva a intentarlo";
               require_once("./vistas/Vista.php");
               $vista = new Vista();
               $vista->render("registro",$data);
          }

          $patternUser = "/^[a-zA-Z0-9][0-9]{7}[a-zA-Z]$/";
          if(!preg_match($patternUser,$_POST["user"])){
               $data["errorLogin"]="Formato de CIF/DNI incorrecto";
               require_once("./vistas/Vista.php");
               $vista = new Vista();
               $vista->render("registro",$data);
          }

          if((isset($_POST["checkConductor"]) && isset($_POST["checkEmpresa"])) || (empty($_POST["checkConductor"]) && empty($_POST["checkEmpresa"]))){
               $data["errorLogin"]="Debes elegir un tipo de usuario";
               require_once("./vistas/Vista.php");
               $vista = new Vista();
               $vista->render("registro",$data);
               }
     
          $dni_cif= $_POST["user"];
          $contrasena= $_POST["pass"];
          
          if(isset($_POST["checkConductor"])){
               require_once("./modelos/RegistroModelo.php");
               $modelo = new RegistroModelo();
               if($modelo->crearConductor($dni_cif, $contrasena)){
                    header("Location: index.php?controlador=loginConductor&accion=verLogin");
               }else{
                    $data["errorLogin"]="El usuario ya existe";
                    require_once("./vistas/Vista.php");
                    $vista = new Vista();
                    $vista->render("registro",$data);
               }
          }else{
               require_once("./modelos/RegistroModelo.php");
               $modelo = new RegistroModelo();
               if($modelo->crearEmpresa($dni_cif, $contrasena)){
                    header("Location: index.php?controlador=loginConductor&accion=verLogin");
               }else{
                    $data["errorLogin"]="El usuario ya existe";
                    require_once("./vistas/Vista.php");
                    $vista = new Vista();
                    $vista->render("registro",$data);
               }
          }

          

      }else{     
          $data["errorLogin"]="Falta algún dato, vuelva a intentarlo";
          require_once("./vistas/Vista.php");
          $vista = new Vista();
          $vista->render("registro",$data);
     }
 

     
    }
    
     
    }


         //      if((isset($_POST["checkConductor"]) && isset($_POST["checkEmpresa"])) || (empty($_POST["checkConductor"]) && empty($_POST["checkEmpresa"]))){
          //           $data["errorLogin"]="Debes elegir un tipo de usuario";
          //           require_once("./vistas/Vista.php");
          //           $vista = new Vista();
          //           $vista->render("registro",$data);
          //      }else{
          //           if(isset($_POST["checkConductor"])){
          //                $tipoUsuario = 1;
          //           }

          //           $data["errorLogin"]="Usuario creado, inicie sesión";
          //           require_once("./vistas/Vista.php");
          //           $vista = new Vista();
          //           $vista->render("inicio",$data);
          //      }
    
        

     //   $pattern= "/^(?=.*[a-zA-Z])(?=.*\d).*$/";
     //      if(!preg_match($pattern,$_POST["pass"])){
     //           $data["errorLogin"]="Formato de contraseña incorrecta. Debe contener números y letras, vuelva a intentarlo";
     //           require_once("./vistas/Vista.php");
     //           $vista = new Vista();
     //           $vista->render("registro",$data);
     //      }
?>

