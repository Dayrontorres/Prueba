
/*CODIGO DE USUARIOS*/
var usuarios= new Usuarios();

var loginUser = () =>{
    
    var email=document.getElementById("email").value;
    var password=document.getElementById("password").value;
    usuarios.loginUser(email,password);
}

$().ready(()=>{
    $("#login").validate();
    //inicializamos sidenav
    $('.sidenav').sidenav();
});


