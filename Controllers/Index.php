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
        //$user=null;
        //evaluamos si la variable o la llave esta definida
        //$user= isset($_SESSION["User"]);
        $user= $_SESSION["User"] ?? null;
        if (null != $user)  {
            header("Location:".URL."Principal/principal");
        } else {
            $this->view->render($this,"index");
        }
        
        

    }

    public function userLogin(){
        if(isset($_POST["email"]) && isset($_POST["password"])){
          // echo password_hash($_POST["password"],PASSWORD_DEFAULT);
          $data = $this->model->userLogin($_POST["email"],$_POST["password"]);
          if (is_array($data)) {
          echo json_encode($data);
         } else {
            echo $data;
         }
         

        }
    }
}

?>