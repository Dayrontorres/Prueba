<?php
//vamos a heredar de la clase controllers
//la clase hija va ser Index 
//todos lo metodos de controllers podemos
//tener acceso desde Index
class Index extends Controllers
{
    public function __construct() {
        //echo "Controlador index";
        //invocar el metodo contructor
        //de la clase padre
       parent::__construct();
    }
    public function index(){
        //echo"metodo index";
        $this->view->render($this,"index");

    }
    public function userLogin(){
        if(isset($_POST["email"]) && isset($_POST["password"])){
           echo $this->model->userLogin($_POST["email"],$_POST["password"]);


        }
    }
}

?>