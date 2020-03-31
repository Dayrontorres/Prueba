<?php
  class Controllers
  {
      public function __construct() {
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