
function validarRegistro(){

    const passwordPattern = /^(?=.*[a-zA-Z])(?=.*\d).*$/;
    const pass = document.getElementById("pass").value;
    const radioEmpresa = document.getElementById("empresa").checked;
    const radioConductor = document.getElementById("conductor").checked;
    

    if(document.getElementById("user").value == "" || document.getElementById("pass").value == ""){
        document.getElementById("resultado").innerHTML="Debes proporcionar los campos requeridos";
        return 
    } else if (!passwordPattern.test(pass)){
        document.getElementById("resultado").innerHTML="La contraseña no cumple con los requisitos: debe contener letras y números";
        return
         } 
    else if((radioEmpresa && radioConductor) || (!radioEmpresa && !radioConductor) ){
        document.getElementById("resultado").innerHTML="Debes elegir el tipo de usuario";
         return
    } 
        else {
           document.getElementById("formularioRegistro").submit();
        }

        
}



function validarLogin(){
    if(document.getElementById("user").value == "" || document.getElementById("pass").value == ""){
        alert("Debes proporcionar los campos requeridos");
    }
}