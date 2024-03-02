<?php

// class RegistroControlador{

//     public function __construct(Type $var = null) {
//         $this->var = $var;
//     }
    
// }


if(isset($_POST["user"]) && isset($_POST["pass"]) && (isset($_POST["radioConductor"]) || isset($_POST["radioEmpresa"]))){
   echo "he entrado";
    $pattern= "/^(?=.*[a-zA-Z])(?=.*\d).*$/";
   if(!preg_match($pattern,$_POST["pass"])){
        header("Location:../registro.php");
        exit();
   }
   header("Location:../index.php");
        exit();
}else{
    header("Location:../registro.php");
        exit();
}
?>