<?php

   class Usuarios extends Controllers
   {
       function __construct(){
           parent::__construct();
       }

       public function destroySession(){
           //metodo para destruir nuestras sessiones
           Session::destroy();

           //luego de destruir la session le dirigiremos a la vista index
           header("Location:".URL);
           
       }
   }
   

?>