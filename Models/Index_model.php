<?php
 class Index_model extends Conexion

 {
    function __construct(){
       // $this->indexModel();
       parent::__construct();
      
    }
    function userLogin($email,$password){
       $where = " Email = :Email";
       $param=array('Email' => $email);
       $response = $this->db->select1("*",'usuarios',$where,$param);
      if (is_array($response)) {
         $response=$response['results'];
         if  ($password == $response["Password"]) {
            $data = array(
               "IdUsuario" => $response["IdUsuario"],
               "Nombre" => $response["Nombre"],
               "Apellido" => $response["Apellido"],
               "Roles" => $response["Roles"],
               "Imagen" => $response["Imagen"],
           
            );
            //si el usuario ingresa correctamente los datos quedaran guardados en una variable de session
            //se llama el metodo session 
            Session::setSession("User",$data);
           return $data;
         } else {
           $data=array(
              "IdUsuario" => 0,
           );
           return $data;
         }
         
      } else {
         return $response;
      }
      
      
        
    }
    
   }
 ?>