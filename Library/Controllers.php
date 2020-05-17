<?php
  class Controllers
  {
      public function __construct() {
        Session::star();
        //con doble dos puntos podemos invocar los metodos static en la clase session y el metodo star para
        //poder inicilizar nuestras variables de session
       
        $this->view=new Views();
        //aqui se invoca los metodos o objetos
        $this->loadclassmodels();
      }
      function loadclassmodels(){
        $model= get_class($this).'_model';
        $path = 'Models/'.$model.'.php';
        if(file_exists($path)){
          require $path;
          $this ->model= new $model();
        }
      }
  }
  

?>