class Usuarios{

    constructor(){

    }
    loginUser(email ,password){
        //alert(email);
        if(email==""){
            //mensaje focus
            document.getElementById("email").focus();
            M.toast({html:'ingrese el email',classes:'rounded'});

        }else{
            if(password==""){
                //mensaje focus
                document.getElementById("password").focus();
                M.toast({html:'ingrese el password',classes:'rounded'});
    
            }else{
                if(validarEmail(email)){
                    if(6<=password.length){
                        $.post(
                            "Index/userLogin",
                            {email,password},
                            (response)=>{
                                console.log(response);
                                try {
                                    var item = JSON.parse(response);
                                    if(0 < item.IdUsuario){
                                        window.location.href = URL + "Principal/principal";

                                    }else{
                                        document.getElementById("indexMessaje").innerHTML="Email o contraseña incorrectos";

                                    }
                                } catch (error)
                                 {
                                    document.getElementById("indexMessaje").innerHTML=response;
                                    //mensaje de error que no se pudo conectar ala base de datos
                                }
                            }
                        );
                    }else{
                        document.getElementById("password").focus();
                        M.toast({html:'ingrese minimo 6 caracteres',classes:'rounded'});
                    }
                }else{
                    document.getElementById("email").focus();
                    M.toast({html:'ingrese una direccion de correo electronico valida',classes:'rounded'});
                }
            }

        }
    }

}