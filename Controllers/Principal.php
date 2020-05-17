<?php
 
 class Principal extends Controllers 
 {
     function __construct(){
         parent::__construct();

     }
   
     public function principal(){
         //vamos a proporcionarle seguridad al usuario haciendo que cuando le de salir cierre totalmente sesion

         if (null != Session::getSession("User")) {
            $this->view->render($this,"principal");         
         } else {
            header("Location:".URL);
         }
                

     }
 }
 

?>